<?php

$latitude = 40.6606062;
$longitude = 22.9778421;
$latitude2 = 40.6663166;
$longitude2 = 22.9346466;
$latitude3 = 40.6522526;
$longitude3 = 22.9253768;

$cs = Yii::app()->clientScript;
Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=true&libraries=drawing&dummy=.js');
$cs->registerScript('check_position',
'
var drawingManager;
var map; // Global declaration of the map
var marker = null;
var marker1 = null;
var marker2 = null;
var marker3 = null;
function initializeMap() {
    var myOptions = {
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
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
        var myLatlng1 = new google.maps.LatLng(' . $latitude . ',' . $longitude . ');
        var myLatlng2 = new google.maps.LatLng(' . $latitude2 . ',' . $longitude2 . ');
        var myLatlng3 = new google.maps.LatLng(' . $latitude3 . ',' . $longitude3 . ');
        marker1 = new google.maps.Marker({position: myLatlng1, map: map,icon: "'.Yii::app()->baseUrl.'/images/monument.png"});
        marker2 = new google.maps.Marker({position: myLatlng2, map: map,icon: "'.Yii::app()->baseUrl.'/images/arch.png"});
        marker3 = new google.maps.Marker({position: myLatlng3, map: map,icon: "'.Yii::app()->baseUrl.'/images/monument.png"});

}
initializeMap();   
', CClientScript::POS_LOAD);
?>

<div class="row">
    <div id="map_canvas"></div>
</div>