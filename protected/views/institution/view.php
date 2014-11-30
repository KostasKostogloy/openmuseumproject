<?php
/* @var $this InstitutionController */
/* @var $model Institution */

if (!empty($model->POINT_X) && !empty($model->POINT_Y)){
Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&dummy=.js');
Yii::app()->clientScript->registerScript('markers','
    var drawingManager;
    var map; // Global declaration of the map
    var marker = null;
    function initializeMap() {
        var myLatlng = new google.maps.LatLng(' . $model->POINT_X . ',' . $model->POINT_Y . ');
        var myOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        marker = new google.maps.Marker({position: myLatlng, map: map});
    }
    initializeMap();
', CClientScript::POS_LOAD);
}
?>

<div class="col-lg-12" id="map_canvas">
    
</div>

<div class="col-lg-6 text-center">
    <h3 class="text-primary"><?=$model->NAMEGRK?></h3>
    <img class="img-responsive img-thumbnail" src="<?=$model->thumbnail;?>"/>
    <p class="text-info"><?=$model->abstract;?></p>
    <p>
        <span class="label label-primary"><?=$model->DIMOS?></span>
        <span class="label label-info"><?=$model->NEWCAT?></span>
        <span class="label label-warning"><?=$model->NEWSUBCAT?></span>
    </p>
</div>

<div class="col-lg-6">
    <?php if (!empty($model->ADDRESS)):?>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Διεύθυνση</h3>
            </div>
            <div class="panel-body">
              <?=$model->ADDRESS;?>
            </div>
          </div>
    <?php endif;?>
    <?php if (!empty($model->PHONE)):?>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Τηλέφωνο επικοινωνίας</h3>
            </div>
            <div class="panel-body">
              <?=$model->PHONE;?>
            </div>
          </div>
    <?php endif;?>
    <?php if (!empty($model->WEBSITE)):?>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ιστότοπος</h3>
            </div>
            <div class="panel-body">
              <?=$model->WEBSITE;?>
            </div>
          </div>
    <?php endif;?>
</div>
