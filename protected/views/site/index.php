<?php
/* @var $this SiteController */

$cs = Yii::app()->clientScript;
$cs->registerScript('popups_etc',
'
    $(\'.bs-component [data-toggle="popover"]\').popover();
    $(\'.bs-component [data-toggle="tooltip"]\').tooltip();
');

$coordinates = array();
$coordinates[0]['latitude'] = 40.6606062;
$coordinates[0]['longitude'] = 22.9778421;
$coordinates[1]['latitude'] = 40.6663166;
$coordinates[1]['longitude'] = 22.9346466;
$coordinates[2]['latitude'] = 40.6522526;
$coordinates[2]['longitude'] = 22.9253768;

$LatLng = '';
$marker = '';
$markerContent = '';
foreach ($coordinates as $key => $coordinate)
{
    $LatLng .= 'var LatLng' . $key . ' = new google.maps.LatLng(' . $coordinate['latitude'] . ',' . $coordinate['longitude'] . ');
    ';
    $marker .= 'marker' . $key . ' = new google.maps.Marker({position: LatLng' . $key . ', map: map, title: \'Uluru (Ayers Rock)\'});
    ';
    $markerContent .= ' google.maps.event.addListener(marker'.$key.', \'click\', function() {
        infowindow.open(map,marker'.$key.');
      });
    ';
}

Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&dummy=.js');
Yii::app()->clientScript->registerScript('markers','
    var drawingManager;
    var map; // Global declaration of the map
    var marker = null;
    function initializeMap() {
        ' . $LatLng . '
        var myOptions = {
            zoom: 13,
            center: LatLng0,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        ' . $marker . '
        
    var contentString = \'<div id="content">\'+
      \'<div id="siteNotice">\'+
      \'</div>\'+
      \'<h1 id="firstHeading" class="firstHeading">Uluru</h1>\'+
      \'<div id="bodyContent">\'+
      \'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large \' +
      \'sandstone rock formation in the southern part of the \'+
      \'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) \'+
      \'south west of the nearest large town, Alice Springs; 450&#160;km \'+
      \'(280&#160;mi) by road. Kata Tjuta and Uluru are the two major \'+
      \'features of the Uluru - Kata Tjuta National Park. Uluru is \'+
      \'sacred to the Pitjantjatjara and Yankunytjatjara, the \'+
      \'Aboriginal people of the area. It has many springs, waterholes, \'+
      \'rock caves and ancient paintings. Uluru is listed as a World \'+
      \'Heritage Site.</p>\'+
      \'<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">\'+
      \'http://en.wikipedia.org/w/index.php?title=Uluru</a> \'+
      \'(last visited June 22, 2009).</p>\'+
      \'</div>\'+
      \'</div>\';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
'.$markerContent.'
    }
    initializeMap();
    $("#WelcomeModal").modal("toggle");
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
<div class="col-lg-12" style="margin-top: 30px;">
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