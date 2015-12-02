<!DOCTYPE html>
<html style="height: 100%">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<title>Crimes visualization in Chicago</title>
	<script type="text/javascript" src="js/community_areas.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/map.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/paper/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.5/src/markerwithlabel_packed.js"></script>
</head>
<body style="height: 100%">
	<div class="row">
		<div class="text-center jumbotron">
			<h1>Data Visualization</h1>
			<p>Understanding crime in Chicago and its community areas.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7 col-md-offset-1 well" id="map" style="height: 500px">
		</div>
		<div class="col-md-3">
			<h3 class="text-center">Filters</h3>
			<hr>
			<label>Year</label>
			<select id="year-filter" class="form-control">
			<? foreach (range(2003, 2014) as $y):?>
				<option value="<?=$y?>"><?=$y?></option>
			<? endforeach ?>
			</select>
			<label>Crime type</label>
			<select id="type-filter" class="form-control">
				<option value="homicide">Homicide</option>
				<option value="battery">Battery</option>
				<option value="narcotics">Narcotics</option>
			</select>
		</div>
	</div>
</body>
</html>