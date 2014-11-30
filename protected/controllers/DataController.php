<?php

class DataController extends Controller {

     /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'admin';
    
    public function actionIndex() {
        
        // The maximum execution time, in seconds. If set to zero, no time limit is imposed.
        set_time_limit(0);
        
        // open in read-only mode
        $dbf = dbase_open('open-data/culture/poi-thessalonikis.dbf', 0);
        
        // delete all record from database before importing new data
        Yii::app()->db->createCommand('TRUNCATE TABLE `imported_data`')->execute(); 
                
        if ($dbf) {
            // count rows
            $num_records = dbase_numrecords($dbf);
            $all_records = array();
            
            for ($i = 1; $i <= $num_records; $i++) {
                // create model for each record
                $model = new ImportedData();
                
                // get each record from database
                $record = dbase_get_record_with_names($dbf, $i);
                
                // for each record conver its encoding to UTF-8 and remove double spaces
                foreach ($record as $key => $value) {
                    $record[$key] = trim(mb_convert_encoding($value, 'UTF-8', 'ISO-8859-7'));
                }

                // save data to model
                $model->attributes = $record;
                
                // save model
                $model->save();
            }
            
            dbase_close($dbf);
        }

        $this->render('index', array('num_records' => $num_records));
    }
    
}
