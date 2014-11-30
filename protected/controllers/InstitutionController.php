<?php

class InstitutionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'admin';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create', 'update', 'admin' and 'delete' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'wikipedia'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->layout = 'main';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Institution;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Institution'])) {
            $model->attributes = $_POST['Institution'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Institution'])) {
            $model->attributes = $_POST['Institution'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $model = new Institution();
        $this->render('index', array('model' => $model));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        set_time_limit(0);
        
        $modelImportedData = new ImportedData();
        
        $num_records = 0;
        
        // get all models from imported data
        foreach ($modelImportedData->findAll() as $instanceImportedData) {
            $modelInstitution = new Institution;
            
            // get models from institutions from imported data with the same GID
            $resultInstitution = $modelInstitution->findByAttributes(array('GID' => $instanceImportedData->GID));
            
            // if it doesn't exists save it to institution table
            if (empty($resultInstitution)) {
                
                $modelInstitution->attributes = $instanceImportedData->attributes;

                // replace spaces with +
                $address = str_replace(' ', '+', $instanceImportedData->ADDRESS);
                
                // find coordinates from address
                if(!empty($instanceImportedData->ADDRESS)) {
                    $url = "http://maps.google.com/maps/api/geocode/json?address=".$address."&sensor=false&region=Greece";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    $response = curl_exec($ch);
                    curl_close($ch);
                    $response_a = json_decode($response);
                    if(isset($response_a->results[0])) {
                        $modelInstitution->POINT_X = $response_a->results[0]->geometry->location->lat;
                        $modelInstitution->POINT_Y = $response_a->results[0]->geometry->location->lng;
                    } else {
                        $modelInstitution->POINT_X = '';
                        $modelInstitution->POINT_Y = '';
                    }
                }
                
                // init NLP DBpediaSpotlight
                $api = new DBpediaSpotlight;
                //$api->init_nlp('Αρχαιολογικό Μουσείο Θεσσαλονίκης');
                $api->init_nlp($instanceImportedData->NAMEGRK);
                $api->query();
                if (isset($api)) {
                    $curl_info = $api->getCurlInfo();
                    $entity = $api->getEntities();
                    $dbpedia_uri = (isset($entity[0]['name'])) ? $entity[0]['name'] : '';
                    $modelInstitution->dbpedia_url = $dbpedia_uri;
                }                
                $modelInstitution->save();
                $num_records++;
            }
        }
        $this->render('admin', array('num_records' => $num_records));
    }

    /*
     * Gets data from dbpedia
     */
    public function actionWikipedia($id)
    {
        $model = Institution::model()->findByPk($id);
        
        $dbpedia_url = urlencode($model->dbpedia_url);
        
        $url = "http://el.dbpedia.org/sparql?default-graph-uri=http%3A%2F%2Fel.dbpedia.org&query=select+%3Fabstract+%3Fthumbnail%0D%0Awhere+{%0D%0A+++%3C".$dbpedia_url."%3E+dbpedia-owl%3Aabstract+%3Fabstract+.%0D%0A+++%3C".$dbpedia_url."%3E+dbpedia-owl%3Athumbnail+%3Fthumbnail+.%0D%0A}&format=application%2Fsparql-results%2Bjson&timeout=0&debug=on";

        $json = file_get_contents($url);
        $obj = json_decode($json);
        $bindings = $obj->results->bindings;
        
        $binding_abstract = $bindings[0]->abstract->value;
        $binding_thumbnail = $bindings[0]->thumbnail->value;
        $model->abstract = $binding_abstract;
        $model->thumbnail = $binding_thumbnail;
        $model->save();
        
        $this->render('wikipedia', array('model' => $model));
    }
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Institution the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Institution::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Institution $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'institution-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
