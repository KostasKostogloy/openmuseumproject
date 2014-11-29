<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$cs = Yii::app()->clientScript;
$cs->registerScriptFile('http://maps.google.com/maps/api/js?key=AIzaSyAT7OOExiG18lNGM68s6Y25xDVU-g3rWLQ&sensor=false&libraries=drawing&dummy=.js');
$cs->registerScript('popups_etc',
'
var drawingManager;
window.onload=function(){
    var map; // Global declaration of the map
    var iw = new google.maps.InfoWindow(); // Global declaration of the infowindow
    var lat_longs = new Array();
    var markers = new Array();
    function initialize() {
    	var myLatlng = new google.maps.LatLng(37.7577,-122.4376,13);
    	var myOptions = {
    		zoom: 13,
    		center: myLatlng,
    		mapTypeId: google.maps.MapTypeId.ROADMAP
    	}
    	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    	drawingManager = new google.maps.drawing.DrawingManager({
    		drawingMode: google.maps.drawing.OverlayType.POLYGON,
    		drawingControl: true,
    		drawingControlOptions: {
    			position: google.maps.ControlPosition.TOP_CENTER,
    			drawingModes: [google.maps.drawing.OverlayType.POLYGON]
    		},
    		polygonOptions: {
    			editable: true
    		}
    	});
    	drawingManager.setMap(map);
    	
    	google.maps.event.addListener(drawingManager, "overlaycomplete", function(event) {
    		newShape = event.overlay;
    		newShape.type = event.type;
    		markers.push(newShape);
    	});
    
    	google.maps.event.addListener(drawingManager, "overlaycomplete", function(event){
    		overlayClickListener(event.overlay);
    		$(\'#vertices\').val(JSON.stringify(event.overlay.getPath().getArray()));
    		var cList = $(\'ul#vertice_list\');
    		var li = $(\'<li><u>New Shape</u></li>\').appendTo(cList);
    		vertices = event.overlay.getPath().getArray();
    		$.each(vertices, function(i)
    		{
    		    var li = $(\'<li/>\')
    		        .appendTo(cList);
    		    var vertice = $(\'<a/>\')
    		        .text("Vertice " + i + ":" + vertices[i])
    		        .appendTo(li);
    		});
    		
    
    	});
    }
    
    function overlayClickListener(overlay) {
        if (markers.length > 1)
        {
            for (var i = 0; i < markers.length -1; i++ ) {
                markers[i].setMap(null);
            }
        }
        google.maps.event.addListener(overlay, "mouseup", function(event){
            $(\'#vertices\').val(JSON.stringify(overlay.getPath().getArray()));
        });
    }
    initialize();

    $(function(){
        $(\'#clear\').click(function(){
            for (var i = 0; i < markers.length; i++ ) {
                markers[i].setMap(null);
            }
            markers.length = 0;
            var cList = $(\'ul#vertice_list\');
            cList.html(" ");
            $(\'#vertices\').val("");
        });
    });
}//]]>  
');
?>
<div class="page-header">
    <div class="row">
        <div class="col-lg-12">
            <h2>Μαρκάρισμα περιοχής σε google maps με σχήμα πολυγώνου</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <form method="post" accept-charset="utf-8" id="map_form" style="display: inline-block;">
            <input type="hidden" name="vertices" value="" id="vertices"  />
            <input type="submit" value="Save!" id="save"  />
        </form>
        <button id="clear">Reset</button>   
        <ul id="vertice_list"></ul>   
    </div>
    <div class="col-lg-8">
        <div id="map_canvas" style="width:90%;height:700px;margin: 20px auto 0 auto;"></div>
    </div>
</div>