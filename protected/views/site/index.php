<?php
/* @var $this SiteController */

$cs = Yii::app()->clientScript;
$cs->registerScript('popups_etc',
'
    $(\'.bs-component [data-toggle="popover"]\').popover();
    $(\'.bs-component [data-toggle="tooltip"]\').tooltip();
');
?>

<div class="col-lg-12" style="margin-top: 30px;">
    <div class="bs-component">
      <div class="alert alert-dismissable alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Η παρούσα εφαρμογή βρίσκεται ακόμα σε στάδιο ανάπτυξης!</strong> Η εφαρμογή Open Museum Project αποτελεί συλογικό έργο των Kώστα Κώστογλου και Μάριο Στίκα στα πλαίσια του διαγωνισμού Hackathon Θεσσαλονίκης. Το έργο είναι ανοιχτού κώδικα και μπορείτε να το βρείτε <a href="https://github.com/KostasKostogloy/openmuseumproject" target="_blank">εδώ</a>.
      </div>
    </div>
</div>

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
        marker = new google.maps.Marker({position: myLatlng, map: map, title: \'Uluru (Ayers Rock)\'});
        marker2 = new google.maps.Marker({position: myLatlng2, map: map, title: \'Uluru (Ayers Rock)\'});
        marker3 = new google.maps.Marker({position: myLatlng3, map: map, title: \'Uluru (Ayers Rock)\'});
        google.maps.event.addListener(map, \'click\', function(event) {
            //delete the old marker
            if (marker) { marker.setMap(null); }
            //create new marker
             marker = new google.maps.Marker({ position: event.latLng, map: map});
             jQuery("#latitude").html(event.latLng.lat());
             jQuery("#longitude").html(event.latLng.lng());
        });
        
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
    google.maps.event.addListener(marker, \'click\', function() {
    infowindow.open(map,marker);
  });
    google.maps.event.addListener(marker2, \'click\', function() {
    infowindow.open(map,marker2);
  });
    google.maps.event.addListener(marker3, \'click\', function() {
    infowindow.open(map,marker3);
  });
    }
    initializeMap();
', CClientScript::POS_LOAD);
?>

<div class="row">
    <div id="map_canvas"></div>
</div>