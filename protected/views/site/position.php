<?php
$cs = Yii::app()->clientScript;
$cs->registerScript('check_position',
'
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
}

getLocation();
');
?>
<div class="row">
    <div class="col-lg-12">
        <div id="demo">

        </div>
    </div>
</div>