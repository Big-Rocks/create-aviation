<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bigrocks.css">
	<link rel="stylesheet" type="text/css" href="css/rSlider.min.css">
	<link rel="stylesheet" type="text/css" href="css/pagination.css">
	<script>
		var inited = false;
	</script>
</head>
<body>
	<!-- site header -->
		<div class="jet-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg navbar-light px-0">
					  	<a class="navbar-brand" href="#"><img src="./images/jet-logo.png"></a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse " id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item active">
						        <a class="nav-link" href="#">Home</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Buy Aircraft</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Sell Aircraft</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link login_btn" href="#">Login</a>
						      </li>
						      <li class="nav-item">
						        	<a class="nav-link register_btn" href="#">Register</a>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	<!-- site header -->

	<!-- plane details popup  -->
	<div class="plane-details" style="display: none;">
		<div class="row no-gutters">
			<div class="col-md-12">
				<p class="font-weight-bold">Cessna Citation CJ2</p>
			</div>
			<div class="col-md-7"> 
				<div class="details-view-img"> 
					<img src="images/bplane.png" class="img-fluid"> 
				</div>
			</div>
			<div class="col-md-5 pl-0 pl-sm-3 mt-3 mt-sm-0">
				<div class="row">
					<div class="col-6 pb-3 pr-2"><img src="images/mini.png" class="img-fluid"></div>
					<div class="col-6 pb-3 pl-2"><img src="images/mini.png" class="img-fluid"></div>
				</div>
				<div class="row">
					<div class="col-6 pr-2"><img src="images/mini.png" class="img-fluid"></div>
					<div class="col-6 pl-2"><img src="images/mini.png" class="img-fluid"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="jet_price py-2">$ 15164658</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="jet-specification">
					<ul>
						<li><span>Make : </span></li>
						<li><span>Price : </span></li>
						<li><span>Pax : </span></li>
						<li><span>Height (ft) : </span></li>
						<li><span>Length (ft) : </span></li>
						<li><span>Length (ft) : </span></li>
						<li><span>Range (nm) : </span></li>
						<li><span>Qty Mode  : </span></li>
						<li><span>Avg Price in Aftermarket : </span></li>
						<li><span>Gross Weight (ibs) : </span></li>
						<li><span>Standard Fuel (L) : </span></li>
						<li><span>75% Cruise (kts) : </span></li>
						<li><span>rRate of Climb (ft/min) : </span></li>
						<li><span>Landing (ft)  </span></li>
						<li><span>Landing 50ft Obstacle (ft) : </span></li>
						<li><span># of Engines : </span></li>
						<li><span>Engine Model :</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="jet-specification">
					<ul>
						<li><span>Model : </span></li>
						<li><span>Production :</span></li>
						<li><span>Volume (cu ft) : </span></li>
						<li><span>Width (ft) : </span></li>
						<li><span>Wingspan (ft) : </span></li>
						<li><span>Height (ft) : </span></li>
						<li><span>Fuel Burn (gph) : </span></li>
						<li><span>Qty in Aftermarket : </span></li>
						<li><span>Empty Weight (Ibs) : </span></li>
						<li><span>Max Takeoff Weight (Ibs) : </span></li>
						<li><span>Max Fuel (L) : </span></li>
						<li><span>Service Ceiling (ft) : </span></li>
						<li><span>Takeoff (ft) : </span></li>
						<li><span>Takeoff 50ft Obstacle (ft) :  </span></li>
						<li><span>TBO : </span></li>
						<li><span>Engine Make : </span></li>
						<li><span>Engine Thrust (Ibf) :</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-3">
				<div class="col-md-6 col-12">
					<div class="mini-map d-flex justify-content-between align-items-center">
						<img src="images/mini-map.png">
						<div class="pl-2">
							<h5>Range 694 nmi</h5>
							<input type="text" class="form-control form-control-sm" placeholder="Departure Airport">
						</div>
					</div>
				</div>
				<div class="col-md-6 text-right col-12 mt-3 mt-sm-0">
					<a href="#" class="common-btn d-block d-sm-inline-block P-1 ">Buy / Sell </a>
				</div>
		</div>
	</div>
<!-- plane details popup  -->
<!-- <div id="demo1" class="paginationjs paginationjs-big paginationjs-theme-red">

</div> -->

	<!-- jet search panel -->
		<section class="jet_search_panel pt-0  ">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12 text-right filter-btn">
						<button type="button" class="btn Show common-btn" style="display:none;">Filter Results <i class="fa fa-angle-down"></i> </button>
					</div>
				</div>
				<div id="target" class="pb-5 pt-3">
								
				<div class="row">
					<div class="col mb-col">
						<div class="form-group">
							<label>Sort by</label>
							<div class="position-relative cstm-select">
							<select class="form-control" id="sort_by">
								<option value="alpha_asc">Alphabet - A to Z</option>
								<option value="alpha_desc">Alphabet - Z to A</option>
								<option value="price_desc">Price - High to Low</option>
								<option value="price_asc">Price - Low to High</option>
								<option value="prod_sy_desc">Production Year Started - High to Low</option>
								<option value="prod_sy_asc">Production Year Started - Low to High</option>
								<option value="prod_ey_desc">Production Year Ended - High to Low</option>
								<option value="prod_ey_asc">Production	Year Ended - Low to High</option>
								<option value="pax_desc">Pax - High to Low</option>
								<option value="pax_asc">Pax - Low to High</option>
								<option value="volume_desc">Cabin Volume - High to Low</option>
								<option value="volume_asc">Cabin Volume - Low to High</option>
								<option value="height_desc">Cabin Height - High to Low</option>
								<option value="height_asc">Cabin Height - Low to High</option>
								<option value="range_desc">Range - High to Low</option>
								<option value="range_asc">Range - Low to High</option>
								<option value="weight_desc">Weight - High to Low</option>
								<option value="weight_asc">Weight - Low to High</option>
								<option value="takeoff_desc">Takeoff - High to Low</option>
								<option value="takeoff_asc">Takeoff - Low to High</option>
								<option value="landing_desc">Landing - High to Low</option>
								<option value="landing_asc">Landing - Low to High</option>
								<option value="speed_desc">Speed - High to Low</option>
								<option value="speed_asc">Speed - Low to High</option>
							</select>
							</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Type</label>
							<div class="position-relative cstm-select">
							<select class="form-control" id="craft_type">
								<option value="jet">Jet</option>
								<option value="turbo">Turboprop</option>
								<option value="piston">Piston</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Engine</label>
							<div class="position-relative cstm-select">
							<select class="form-control" id="no_of_engine">
								<option value="all">All</option>
								<option value="single">Single</option>
								<option value="multi">Multi</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Units</label>
							<div class="position-relative cstm-select">
							<select class="form-control" id="unit">
								<option value="lbs">lbs, ft, in, kts</option>
								<option value="kg">kg, m, cm, kmh</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Weight</label>
							<div class="position-relative cstm-select">
							<select class="form-control" id="weight">
								<option value="useful">Useful Load</option>
								<option value="pl_full">Payload Full Fuel</option>
								<option value="pl_75">Payload 75% Fuel</option>
								<option value="pl_50">Payload 50% Fuel</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Pilot Weight (lbs)</label>
							<div class="position-relative">
							<input type="number" class="form-control" value="200" id="pilot_weight">
						</div>
						</div>
					</div>
				</div>
				<!-- ////////////////////    slider section    ////////////////// -->
				<!-- ////////////////////    slider section    ////////////////// -->
				<!-- ////////////////////    slider section    ////////////////// -->
				<?php
					$iterator = 0;
					$list_pagination = 5;
					$display_css = 'inline-block';

						  try {
							  $dbh = new PDO('mysql:host=localhost;dbname=airplanedatabase', 'root', '');
							  $result_pax_min = $dbh->query('SELECT MIN(cabin_typical_pax) from sheet;');
							  $result_pax_max = $dbh->query('SELECT MAX(cabin_typical_pax) from sheet;');
							  $result_volume_min = $dbh->query('SELECT MIN(cabin_volume) from sheet;');
							  $result_volume_max = $dbh->query('SELECT MAX(cabin_volume) from sheet;');
							  $result_height_min = $dbh->query('SELECT MIN(cabin_height) from sheet;');
							  $result_height_max = $dbh->query('SELECT MAX(cabin_height) from sheet;');
							  $result_range_min = $dbh->query('SELECT MIN(`range`) from sheet;');
							  $result_range_max = $dbh->query('SELECT MAX(`range`) from sheet;');
							  $result_fuel_min = $dbh->query('SELECT MIN(fuel_burn) from sheet;');
							  $result_fuel_max = $dbh->query('SELECT MAX(fuel_burn) from sheet;');
							  $result_speed_min = $dbh->query('SELECT MIN(cruise_75) from sheet;');
							  $result_speed_max = $dbh->query('SELECT MAX(cruise_75) from sheet;');
							  $result_takeoff_min = $dbh->query('SELECT MIN(takeoff) from sheet;');
							  $result_takeoff_max = $dbh->query('SELECT MAX(takeoff) from sheet;');
							  $result_landing_min = $dbh->query('SELECT MIN(landing) from sheet;');
							  $result_landing_max = $dbh->query('SELECT MAX(landing) from sheet;');

							
							foreach($result_pax_min as $rpmin){
								$pax_min = $rpmin;
							}
							foreach($result_pax_max as $rpmax){
								$pax_max = $rpmax;
							}
							foreach($result_volume_min as $rvmin){
								$volume_min = $rvmin;
							}
							foreach($result_volume_max as $rvmax){
								$volume_max = $rvmax;
							}
							foreach($result_height_min as $rhmin){
								$height_min = $rhmin;
							}
							foreach($result_height_max as $rhmax){
								$height_max = $rhmax;
							}
							foreach($result_range_min as $rrmin){
								$range_min = $rrmin;
							}
							foreach($result_range_max as $rrmax){
								$range_max = $rrmax;
							}
							foreach($result_fuel_min as $rfmin){
								$fuel_min = $rfmin;
							}
							foreach($result_fuel_max as $rfmax){
								$fuel_max = $rfmax;
							}
							foreach($result_speed_min as $rsmin){
								$speed_min = $rsmin;
							}
							foreach($result_speed_max as $rsmax){
								$speed_max = $rsmax;
							}
							foreach ($result_takeoff_min as $rtmin) {
								$takeoff_min = $rtmin;
							}
							foreach ($result_takeoff_max as $rtmax) {
								$takeoff_max = $rtmax;
							}
							foreach ($result_landing_min as $rlmin) {
								$landing_min = $rlmin;
							}
							foreach ($result_landing_max as $rlmax) {
								$landing_max = $rlmax;
							}
							  $dbh = null;
						  } catch (PDOException $e) {
							  print "Error!: " . $e->getMessage() . "<br/>";
							  die();
						  }
				?>
				<script>
					var price_min = 3000000;
					var price_max = 40000000;
					var year_min = 1950;
					var year_max = 2023;
					
					var only_in_production = false;
					
					var sort_by = "alpha_asc";
					var craft_type = "jet";
					var no_of_engine = "all";
					var unit = "lbs";
					var weight = "useful"
					var pilot_weight = 200;

					var pax_min = <?php echo $pax_min[0]; ?>;
					var pax_max = <?php echo $pax_max[0]; ?>;
					var volume_min = <?php echo $volume_min[0]; ?>;
					var volume_max = <?php echo $volume_max[0]; ?>;
					var height_min = <?php echo $height_min[0]; ?>;
					var height_max = <?php echo $height_max[0]; ?>;
					var range_min = <?php echo $range_min[0]; ?>;
					var range_max = <?php echo $range_max[0]; ?>;
					var fuel_min = <?php echo $fuel_min[0]; ?>;
					var fuel_max = <?php echo $fuel_max[0]; ?>;
					var speed_min = <?php echo $speed_min[0]; ?>;
					var speed_max = <?php echo $speed_max[0]; ?>;
					var takeoff_min = <?php echo $takeoff_min[0]; ?>;
					var takeoff_max = <?php echo $takeoff_max[0]; ?>;
					var landing_min = <?php echo $landing_min[0]; ?>;
					var landing_max = <?php echo $landing_max[0]; ?>;
					
				</script>
				<div class="row">
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Price</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>$300,000</span>
							<span>$40,000,000</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="price_slider" class="slider" />
        					</div>
						</div>
					</div>
								
					<div class="mb-col pb-1 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Production Years</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span id="place_y_start"></span>
							<span id="place_y_end"></span>
							<script>
								document.getElementById('place_y_start').innerHTML = year_min;
								document.getElementById('place_y_end').innerHTML = year_max;
							</script>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="prod_y_slider" class="slider" />
        					</div>
						</div>
						<!-- <label class="custom-control custom-checkbox">
    					     <input type="checkbox" class="custom-control-input" id="show_only" value="my-value">
    					     <span class="custom-control-indicator"></span>
    					     <span class="custom-control-description">Do not show me this again.</span>
    					</label> -->
						<div class="form-check" id="show_only_container">
						  <label class="form-check-label">
						    <input type="checkbox" class="form-check-input" value="asdfasdf"  id="show_only">Show Only In Production
						  </label>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Pax</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $pax_min[0]; ?></span>
							<span><?php echo $pax_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="pax_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Height</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $height_min[0]; ?>></span>
							<span><?php echo $height_max[0]; ?>></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="height_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Volume</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $volume_min[0]; ?></span>
							<span><?php echo $volume_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="volume_slider" class="slider" />
        					</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Range</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $range_min[0]; ?></span>
							<span><?php echo $range_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="range_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Fuel Burn 1</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $fuel_min[0]; ?></span>
							<span><?php echo $fuel_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="fuel_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Speed</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $speed_min[0]; ?> kts</span>
							<span><?php echo $speed_max[0]; ?> kts</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="speed_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Takeoff</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $takeoff_min[0]; ?></span>
							<span><?php echo $takeoff_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="take_off_slider" class="slider" />
        					</div>
						</div>
					</div>
					<div class="mb-col pb-5 bigrocks-adj" style="padding-left:35px!important;padding-right:35px!important;">
						<div class="subject text-center w-100">Landing</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span><?php echo $landing_min[0]; ?></span>
							<span><?php echo $landing_max[0]; ?></span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slider-container" style="width:100%;margin-top:-7px;">
        					    <input type="text" id="landing_slider" class="slider" />
        					</div>
						</div>
					</div>
				</div>

				<div class="row pt-4">
					<div class="col-md-7">
						<div class="form-group mb-0  filter-search position-relative">
							<form autocomplete="off" action="/ajax_search.php">
								<div class="autocomplete" style="width:100%;">
									<input type="text" list="recommend" class="form-control" placeholder="Search" id="maker_model_search">
								</div>
								
							</form>
							<span><i class="fa fa-search"></i>  </span>
						</div>
						
					</div>
					<div class="col-md-5 text-center text-md-right pt-3 pt-sm-0">
						<a href="#" class="common-btn Hide">close</a>
					</div>
				</div>
			</div>
			</div>
		</section>

	<!-- jet search panel -->
<div>
	
</div>

<!-- jet view section -->
	<section class="jet_view mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="view-top pb-3 d-flex justify-content-between align-items-center" >
					
							<nav class="view-tab">
									
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							  	<p class="pr-2">View</p>
							    <a class="nav-item nav-link active" id="list-view-tab" data-toggle="tab" href="#list-view" role="tab" aria-controls="list-view" aria-selected="true"><i class="fa fa-list-ul"></i> </a>
							    <a class="nav-item nav-link" id="box-view-tab" data-toggle="tab" href="#box-view" role="tab" aria-controls="box-view" aria-selected="false"><i class=" fa fa-th"></i></a>
							  </div>
							</nav>
						<div class="compare_aircraft">Compare Aircraft</div>
					</div>
					<div class="data-container tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
						</div>
						<div class="tab-pane fade" id="box-view" role="tabpanel" aria-labelledby="box-view-tab">
							<div class="row">
							</div>
						</div>
					</div>
		    		<div id="pagination-demo1" class="paginationjs paginationjs-big paginationjs-theme-red"></div>
				</div>
				
			</div>
			
		</div>


		        
	</section>

<!-- jet view section -->


<!-- footer section -->
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 footer-logo">
				<img src="images/jet-logo.png" class="img-fluid">
				<p class="ftr-details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, repellendus?</p>
			</div>
			<div class="col-md-3">
				<ul class="footer-link">
					<li><a href="#">Home</a></li>
					<li><a href="#">Buy Aircraft</a></li>
					<li><a href="#">Sell Aircraft</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="footer-link">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy & Cookies</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<p>Follow us on</p>
				<ul class="social-link">
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="footer-bottom" id="bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				&copy; 2002-2022 JetBuyerguide Ltd. All Rights Reserved
			</div>
		</div>
	</div>
</section>


<!-- footer section -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
<script src="js/rSlider.js"></script>
<script src="js/bigrocks.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="js/pagination.js"></script>
<script>
    $('.Show').click(function() {
      $('#target').show(500);
      $('.Show').hide(0);
      $('.Hide').show(0);
  });
  $('.Hide').click(function() {
      $('#target').hide(500);
      $('.Show').show(0);
      $('.Hide').hide(0);
  });
  
</script>

</body>
</html>