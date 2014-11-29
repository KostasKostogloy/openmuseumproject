<?php
$latitude = 40.6606062;
$longitude = 22.9778421;
$latitude2 = 40.6663166;
$longitude2 = 22.9346466;
$latitude3 = 40.6522526;
$longitude3 = 22.9253768;
Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&dummy=.js');
Yii::app()->clientScript->registerScript('markers','
    var drawingManager;
    var map; // Global declaration of the map
    var marker = null;
    function initializeMap() {
        var myLatlng = new google.maps.LatLng(' . $latitude . ',' . $longitude . ');
        var myLatlng2 = new google.maps.LatLng(' . $latitude2 . ',' . $longitude2 . ');
        var myLatlng3 = new google.maps.LatLng(' . $latitude3 . ',' . $longitude3 . ');
        var myOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        marker = new google.maps.Marker({position: myLatlng, map: map});
        marker2 = new google.maps.Marker({position: myLatlng2, map: map});
        marker3 = new google.maps.Marker({position: myLatlng3, map: map});
        google.maps.event.addListener(map, \'click\', function(event) {
            //delete the old marker
            if (marker) { marker.setMap(null); }
            //create new marker
             marker = new google.maps.Marker({ position: event.latLng, map: map});
             jQuery("#latitude").html(event.latLng.lat());
             jQuery("#longitude").html(event.latLng.lng());
        });
    }
    initializeMap();
', CClientScript::POS_LOAD);
?>

<div class="row">
    <div id="map_canvas"></div>
</div>

<p class="pull-left"><?php echo Yii::t('business', 'Your latitude'); ?> <span class="pseudo-input" id="latitude"><?php echo $latitude; ?></span></p>
<p class="pull-left" style="margin-left:20px;"><?php echo Yii::t('business', 'Your longitude'); ?> <span class="pseudo-input" id="longitude"><?php echo $longitude; ?></span></p>
            