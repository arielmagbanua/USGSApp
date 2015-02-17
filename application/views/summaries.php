<!DOCTYPE html>
<html>
	
	<head>
		
		<title><?php echo $title; ?></title>
		<!-- <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script> -->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/index.css">
		<script type="text/javascript" src = "<?php echo base_url();?>js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src = "<?php echo base_url();?>js/googlemap.js"></script>

	</head>
	
	<body>
		
		<div id="header" class="fixed">
			<h1>US Geological Survey GeoJSON Mapping Summaries</h1>
		</div>

		<div id="main">
			
			<div id="left_pane">

				<h2>Earthquakes</h2>

				<div class="feed_block">
					<p class="feed_group_title">Past Hour</p>
					<p class="feed_group_subtitle">Updated every 5 minutes.</p>
					<ul>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_hour.geojson">Significant Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_hour.geojson">M4.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_hour.geojson">M2.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_hour.geojson">M1.0+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson">All Earthquakes</a>
						</li>
					</ul>
				</div>

				<div class="feed_block">
					<p class="feed_group_title">Past Day</p>
					<p class="feed_group_subtitle">Updated every 5 minutes.</p>
					<ul>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_day.geojson">Significant Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson">M4.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_day.geojson">M2.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_day.geojson">M1.0+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson">All Earthquakes</a>
						</li>
					</ul>
				</div>

				<div class="feed_block">
					<p class="feed_group_title">Past 7 Days</p>
					<p class="feed_group_subtitle">Updated every 5 minutes.</p>
					<ul>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_week.geojson">Significant Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojson">M4.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojson">M2.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_week.geojson">M1.0+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson">All Earthquakes</a>
						</li>
					</ul>
				</div>

				<div class="feed_block">
					<p class="feed_group_title">Past 30 Days</p>
					<p class="feed_group_subtitle">Updated every 5 minutes.</p>
					<ul>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_month.geojson">Significant Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson">M4.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_month.geojson">M2.5+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_month.geojson">M1.0+ Earthquakes</a>
						</li>
						<li>
							<a href="http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.geojson">All Earthquakes</a>
						</li>
					</ul>
				</div>

			</div>
			
			<div id="map_canvas"></div>
		</div>
		<div id="footer">
			<p>Search!</p>
		</div>
	</body>

</html>