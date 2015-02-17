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
				<td><input id="latitude" type="input" name="latitude"/></td>
			</tr>
			<tr>
				<td><label for="longitude">Longitude: </label></td>
				<td><input id="longitude" type="input" name="longitude"/></td>
			</tr>
			<tr>
				<td><label for="maxradiuskm">Max radius (km): </label></td>
				<td><input id="maxradiuskm" type="input" name="maxradiuskm"/></td>
			</tr>
			<tr>
				<td><label for="minradiuskm">Min radius (km): </label></td>
				<td><input id="minradiuskm" type="input" name="minradiuskm"/></td>
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

<script type="text/javascript">

	$(document).ready(function(){

	  $('#search').click(function(){

	    var request_base_url = "http://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson";
	    var url = "";

	    var start_date = $('#start_date').val();
	    var end_date = $('#end_date').val();
	    var alert_level = $('#alert_level').val();

	    if(start_date!=="" && end_date!==""){
	      url = request_base_url+"&starttime="+start_date+"&endtime="+end_date;
	    }

	    if(alert_level!==""){
	      url = url+"&alertlevel="+alert_level;
	    }

	    //construct the request URL for earthquake query
	    //var url = 'http://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime='+start_date+'&endtime='+end_date;
	    //getServerData(url);

	    if(url!==""){
	      getServerData(url);
	    }

	  });

	});
</script>