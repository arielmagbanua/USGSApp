<header id="header">
	<h1>US Geological Survey GeoJSON Mapping</h1>
</header>

<nav id="nav">
	<ul id="navigation_list">
		<li><a href="<?php echo base_url();?>">Summaries</a></li>
		<li><a href="<?php echo base_url();?>index.php/search">Search</a></li>
	</ul>
</nav>

<div id="query_pane">

	<h2>Search Parameters</h2>

	<div id="params">

		<table id="params_table">
			<tr>
				<td><label for="start">Start Date: </label></td>
				<td><input id="start_date" type="input" name="start" /></td>
			</tr>
			<tr>
				<td><label for="end">End Date: </label></td>
				<td><input id="end_date" type="input" name="end" /></td>
			</tr>
			<tr>
				<td><label for="alertlevel">Alert Label: </label></td>
				<td>
					<select name="alertlevel" id="alert_level">
						<option value="all">All</option>
						<option value="green">Green</option>
						<option value="yellow">Yellow</option>
						<option value="orange">Orange</option>
						<option value="red">Red</option>
					</select>
				</td>
			</tr>
			<tr><th colspan="2"><br/></th></tr>
			<tr>
				<th colspan="2">
					Circle
				</th>
			</tr>
			<tr>
				<td><label for="latitude">Latitude: </label></td>
				<td><input id="latitude" type="input" name="latitude" value="0.0"/></td>
			</tr>
			<tr>
				<td><label for="longitude">Longitude: </label></td>
				<td><input id="longitude" type="input" name="longitude" value="0.0"/></td>
			</tr>
			<tr>
				<td><label for="maxradiuskm">Max radius (km): </label></td>
				<td><input id="maxradiuskm" type="input" name="maxradiuskm" value="0.0"/></td>
			</tr>
			<tr>
				<td><label for="minradiuskm">Min radius (km): </label></td>
				<td><input id="minradiuskm" type="input" name="minradiuskm" value="0.0"/></td>
			</tr>
		</table>
		<br/><br/>
		<div align="center"><button id="search">Search Earthquake</button></div>
	</div>

</div>

<section id="section">
	<div id="map_canvas"></div>
</section>

<footer id="footer">
Copyright © USGS
</footer>

<script type="text/javascript" src="<?php echo base_url();?>js/picker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/legacy.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>js/picker.date.js"></script>

<script type="text/javascript">
	
	$('#start_date').pickadate();
	$('#end_date').pickadate();

	var earthquakeCircle;

	$(document).ready(function(){

	  	$('#search').click(function(){

		    var request_base_url = "http://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson";
		    var url = "";

		    var start_date = $('#start_date').val();
		    var end_date = $('#end_date').val();
		    var alert_level = $('#alert_level').val();
		    var circleLatitude = $('#latitude').val();
		    var circleLongitude = $('#longitude').val();
		    var minRadius = $('#minradiuskm').val();
		    var maxRadius = $('#maxradiuskm').val();

	    	if(start_date!=="" && end_date!==""){
	      		url = request_base_url+"&starttime="+start_date+"&endtime="+end_date;
	    	}

	    	if(alert_level!=="" && alert_level!=="all"){
	      		url = url+"&alertlevel="+alert_level;
	    	}

	    	//circle parameters
	    	if(circleLatitude == 0.0 && circleLongitude == 0.0){
	    		alert("invalid circle origin!");
	    		return;
	    	}

	    	if( minRadius > maxRadius || minRadius == maxRadius){
	    		alert("Minimum Radius is greater than the Maximum Radius!");
	    		return;
	    	}

	    	url = url+"&latitude="+circleLatitude+"&longitude="+circleLongitude+"&minradiuskm="+minRadius+"&maxradiuskm="+maxRadius;

	    	if(url!==""){
	      		getServerData(url);
	    	}

	    	//convert km radius to meters
	    	var radius = maxRadius * 1000;

	    	//draw a circle
	        var circleOptions = {
	          	strokeColor: '#FF0000',
	          	strokeOpacity: 0.8,
	          	strokeWeight: 0.5,
	          	fillColor: '#FF0000',
	          	fillOpacity: 0.15,
	          	center: new google.maps.LatLng(circleLatitude,circleLongitude),
	          	radius: radius,
	        	map: map,
	        };

	        if(earthquakeCircle!==undefined){
	        	earthquakeCircle.setMap(null);
	        }

        	earthquakeCircle = new google.maps.Circle(circleOptions);

	  	});
	});

	function initCircleData(latLng){

		if(latLng!==undefined){
			//alert(latLng);
			$('#latitude').val(latLng.k);
			$('#longitude').val(latLng.D);
		}
	}

</script>