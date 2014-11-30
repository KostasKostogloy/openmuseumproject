<?php

$latitude = 40.6606062;
$longitude = 22.9778421;
$latitude2 = 40.6663166;
$longitude2 = 22.9346466;
$latitude3 = 40.6522526;
$longitude3 = 22.9253768;

$institutes = Institution::model()->findAll('latitude != "" AND longitude != ""');
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
    
    $LatLng .= 'var LatLng' . $key . ' = new google.maps.LatLng(' . $institute->latitude . ',' . $institute->longitude . ');
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

$cs = Yii::app()->clientScript;
Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=true&libraries=drawing&dummy=.js');
$cs->registerScript('check_position',
'
var drawingManager;
var map; // Global declaration of the map
var openwindow;
function initializeMap() {
    var myOptions = {
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    '.$LatLng . $marker.$infowindow.$markerContent.'
    // Try HTML5 geolocation
  if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = new google.maps.LatLng(position.coords.latitude,
                                           position.coords.longitude);

          marker = new google.maps.Marker({position: pos, map: map,icon: "'.Yii::app()->baseUrl.'/images/map_guy.png"});
          map.setCenter(pos);
        }, function() {
          handleNoGeolocation(true);
        });
      } else {
        // Browser doesn\'t support Geolocation
        handleNoGeolocation(false);
      }

}
initializeMap();   
', CClientScript::POS_LOAD);
?>

<div class="row">
    <div id="map_canvas"></div>
</div>