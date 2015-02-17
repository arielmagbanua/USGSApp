<header id = "header">
	<h1>US Geological Survey GeoJSON Mapping</h1>
</header>

<nav id = "nav">
	<ul id = "navigation_list">
		<li><a href="<?php echo base_url();?>">Summaries</a></li>
		<li><a href="<?php echo base_url();?>index.php/search">Search</a></li>
	</ul>
</nav>

<div id = "query_pane">

	<h2>Summaries</h2>

	<div id = "summaries">
		
		<select name="summary" id="summary_type">
			<option value="hour.geojson">Past Hour</option>
			<option value="day.geojson">Past Day</option>
			<option value="week.geojson">Past 7 Days</option>
			<option value="month.geojson">Past 30 Days</option>
		</select><br/>

		<div>
			<ul id = "summary_links">
				<li>
					<a id="significant" href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_hour.geojson">Significant Earthquakes</a>
				</li>
				<li>
					<a id="m45" href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_hour.geojson">M4.5+ Earthquakes</a>
				</li>
				<li>
					<a id="m25" href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_hour.geojson">M2.5+ Earthquakes</a>
				</li>
				<li>
					<a id="m1" href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_hour.geojson">M1.0+ Earthquakes</a>
				</li>
				<li>
					<a id="all" href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson">All Earthquakes</a>
				</li>
			</ul>
		</div>
	</div>

</div>

<section id = "section">
	<div id="map_canvas"></div>
</section>

<footer id= "footer">
Copyright © USGS
</footer>

<script type="text/javascript">
	
	$(document).ready(function(){

		function summaryLinkChange(){

  			var summaryType = $('#summary_type').val();

  			var baseURL = "http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/";

  			var significantLink = baseURL+"significant_"+summaryType;
  			$('a#significant').attr('href',significantLink);

  			var m45Link = baseURL+"4.5_"+summaryType;
  			$('a#m45').attr('href',m45Link);

  			var m25Link = baseURL+"2.5_"+summaryType;
  			$('a#m25').attr('href',m25Link);

  			var m1Link = baseURL+"1.0_"+summaryType;
  			$('a#m1').attr('href',m1Link);

  			var allLink = baseURL+"all_"+summaryType;
  			$('a#all').attr('href',allLink);

  		}

		$('#summary_type').change(function(){
			summaryLinkChange();
		});

		$('#summary_links li a').click(function(){
    
    		//get the link of the feed
    		var url = $(this).attr('href');
    		getServerData(url);

    		return false;
  		});

	});
	
</script>