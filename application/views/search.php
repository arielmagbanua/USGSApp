		<div id="main">
			
			<div id="left_pane">

				<div align="center"><h2>Search Parameters</h2></div>

				<div id = "forms">
					<label for="start">Start Date: </label>
					<input id="start_date" type="input" name="start" /><br/><br/>

					<label for="end">End Date: </label>
					<input id="end_date" type="input" name="end" /><br/><br/>

					<label for="alertlevel">Alert Label: </label>
					<select name="alertlevel" id="alert_level">
						<option value="all">All</option>
						<option value="green">Green</option>
						<option value="yellow">Yellow</option>
						<option value="orange">Orange</option>
						<option value="red">Red</option>
					</select><br/><br/>
				</div>

				<div align="center"><button id="search">Search Earthquake</button></div>

			</div>
			
			<div id="map_canvas"></div>
		</div>