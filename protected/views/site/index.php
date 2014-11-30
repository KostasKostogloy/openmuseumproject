<?php
/* @var $this SiteController */

$cs = Yii::app()->clientScript;
$cs->registerScript('popups_etc',
'
    $(\'.bs-component [data-toggle="popover"]\').popover();
    $(\'.bs-component [data-toggle="tooltip"]\').tooltip();
',  CClientScript::POS_LOAD);

$institutes = Institution::model()->findAll('POINT_X != "" AND POINT_Y != ""');
$LatLng = '';
$marker = '';
$markerContent = '';
$infowindow= '';
foreach ($institutes as $key => $institute)
{
    switch ($institute->NEWSUBCAT):
        case 'ΑΙΘΟΥΣΕΣ ΤΕΧΝΗΣ':
            $icon = Yii::app()->baseUrl . '/images/museum_paintings.png';
            break;
        case 'ΘΕΑΤΡΑ':
            $icon = Yii::app()->baseUrl . '/images/theater.png';
            break;
        case 'ΜΟΥΣΕΙΑ':
            $icon = Yii::app()->baseUrl . '/images/monument.png';
            break;
        case 'ΠΟΛΙΤΙΣΤΙΚΑ ΙΔΡΥΜΑΤΑ - ΦΟΡΕΙΣ':
            $icon = Yii::app()->baseUrl . '/images/museum_crafts.png';
            break;
    endswitch;
    
    $LatLng .= 'var LatLng' . $key . ' = new google.maps.LatLng(' . $institute->POINT_X . ',' . $institute->POINT_Y . ');
    ';
    $marker .= 'marker' . $key . ' = new google.maps.Marker({position: LatLng' . $key . ', map: map, title: \''.$institute->NAMEGRK.'\',icon: "'.$icon.'"});
    ';
    $infowindow .= 'var infowindow'.$key.' = new google.maps.InfoWindow({
        content: "<h4>'.$institute->NAMEGRK.'</h4>'.$institute->abstract.'"
    });
    ';
    $markerContent .= ' google.maps.event.addListener(marker'.$key.', \'click\', function() {
        if (openwindow) {
            openwindow.close();
        }
        infowindow'.$key.'.open(map,marker'.$key.');
        openwindow = infowindow'.$key.';
      });
    ';
}

Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&dummy=.js');
Yii::app()->clientScript->registerScript('markers','
    var drawingManager;
    var map; // Global declaration of the map
    var marker = null;
    var openwindow;
    function initializeMap() {
        ' . $LatLng . '
        var LatLngInitial= new google.maps.LatLng( 40.63753445137685 , 22.945375442504883);
        var myOptions = {
            zoom: 13,
            center: LatLngInitial,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        ' . $marker.$infowindow.$markerContent.'
    }
    initializeMap();
    $("#WelcomeModal").modal("toggle");
    $(\'#yw1\').yiiListView({\'ajaxUpdate\':[\'yw1\'],\'ajaxVar\':\'ajax\',\'pagerClass\':\'pagination pull-right\',\'loadingClass\':\'list-view-loading\',\'sorterClass\':\'sorter\',\'enableHistory\':false});
', CClientScript::POS_LOAD);
?>
<!-- Modal -->
<div class="modal fade hidden-xs" id="WelcomeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center text-primary" id="myModalLabel">Open Culture Project</h4>
      </div>
      <div class="modal-body">
          <div class="text-center" style="width: 100%;margin-bottom: 20px;">
              <img src="<?=Yii::app()->baseUrl?>/images/logo.png" />
          </div>
        <strong>Η παρούσα εφαρμογή βρίσκεται ακόμα σε στάδιο ανάπτυξης!</strong> Η εφαρμογή Open Culture Project αποτελεί συλογικό έργο των Kώστα Κώστογλου και Μάριο Στίκα στα πλαίσια του διαγωνισμού Hackathon Θεσσαλονίκης. Το έργο είναι ανοιχτού κώδικα και μπορείτε να το βρείτε <a href="https://github.com/KostasKostogloy/openmuseumproject" target="_blank">εδώ</a>.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Συνέχεια</button>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
    <div class="bs-component">
      <div class="alert alert-dismissable alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Η παρούσα εφαρμογή βρίσκεται ακόμα σε στάδιο ανάπτυξης!</strong> Η εφαρμογή Open Culture Project αποτελεί συλογικό έργο των Kώστα Κώστογλου και Μάριο Στίκα στα πλαίσια του διαγωνισμού Hackathon Θεσσαλονίκης. Το έργο είναι ανοιχτού κώδικα και μπορείτε να το βρείτε <a href="https://github.com/KostasKostogloy/openmuseumproject" target="_blank">εδώ</a>.
      </div>
    </div>
</div>

<div class="col-lg-12">
    <div id="map_canvas"></div>
</div>

<div class="col-lg-12">
    <div class="row">
    <?php
    $institution = new Institution;
    $dataProvider = $institution->search();
    $dataProvider->sort->defaultOrder='thumbnail DESC';
    $this->widget('zii.widgets.CListView', array(
            'id' => 'institution-grid',
            'dataProvider'=> $dataProvider  ,
            'itemView'=>'_institution',
            'itemsCssClass'=> 'row',
            'pager' => array(
                'header' => '',
                'htmlOptions' => array('class'=>'pagination'),
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass'=> 'pagination pull-right',
    )); ?> 
    </div>
</div>