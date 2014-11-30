<?php

class InstitutionsController extends Controller
{
    public function actionIndex()
    {
        $model = new Institutions();

        $this->render('index', array('model' => $model));
    }
    
    public function actionAdmin()
    {
        set_time_limit(0);
        
        $modelImportedData = new ImportedData();
        
        $num_records = 0;
        // get all models from imported data
        foreach ($modelImportedData->findAll() as $instanceImportedData) {
            $modelInstitutions = new Institutions;

            // get models from institutions from imported data with the same GID
            $resultInstitutions = $modelInstitutions->findByAttributes(array('GID' => $instanceImportedData->GID));
            
            // if it doesn't exists save it to institution table
            if (empty($resultInstitutions))
            {
                // init NLP DBpediaSpotlight
                $api = new DBpediaSpotlight;
                //$api->init_nlp('Αρχαιολογικό Μουσείο Θεσσαλονίκης');
                $api->init_nlp($instanceImportedData->NAMEGRK);
                $api->query();
                if (isset($api)) {
                    $curl_info = $api->getCurlInfo();
                    $entity = $api->getEntities();
                    $dbpedia_uri = (isset($entity[0]['name'])) ? $entity[0]['name'] : '';
                    $modelInstitutions->dbpedia_url = $dbpedia_uri;
                }
                
                $modelInstitutions->attributes = $instanceImportedData->attributes;
                $modelInstitutions->save();
                $num_records++;
            }
        }
        
        $this->render('admin', array('num_records' => $num_records));
    }
}