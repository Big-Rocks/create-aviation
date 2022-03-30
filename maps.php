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
					    <ul class="navbar-nav ml-auto ">
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

<!-- jet search panel -->
		<section class="jet_search_panel pt-0  ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-right filter-btn">
						<button type="button" class="btn Show common-btn">Filter Results <i class="fa fa-angle-down"></i> </button>
					</div>
				</div>
				<div id="target" class="pb-5 pt-3">
				<div class="row">
					<div class="col mb-col">
						<div class="form-group">
							<label>Sort by</label>
							<div class="position-relative cstm-select">
							<select class="form-control ">
								<option>Weight - High to Low</option>
								<option>Weight - Low to High</option>
							</select>
							</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Type</label>
							<div class="position-relative cstm-select">
							<select class="form-control">
								<option>Jet</option>
								<option>Superjet</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Engine</label>
							<div class="position-relative cstm-select">
							<select class="form-control">
								<option>Single</option>
								<option>Double</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Units</label>
							<div class="position-relative cstm-select">
							<select class="form-control">
								<option>lbs</option>
								<option>lbs</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col mb-col">
						<div class="form-group">
							<label>Weight</label>
							<div class="position-relative cstm-select">
							<select class="form-control">
								<option>Useful Load</option>
								<option>Useful Load</option>
							</select>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Price</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>$5000</span>
							<span>$100000</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<span>$20000</span>
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>$20000</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Production Years</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>2001</span>
							<span>2022span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<span>2001</span>
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>2021</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Pax</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>200</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>30</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Height</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>50</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>30</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Volume</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>S0</span>
							<span>S100</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>15C</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 offset-md-3">
						<div class="form-group mb-0">
					      <input type="checkbox" id="com01">
					      <label for="com01">Show Only In Production</label>
					    </div>
					</div>
				</div>
				<div class="row">
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Range</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>800</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>30</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Fuel Burn 1</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>200</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>200</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Speed</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>10kts</span>
							<span>100kts</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>15km/h</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Takeoff</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>2000</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>2000</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-col pb-5">
						<div class="subject text-center w-100">Landing</div>
						<div class="ratio d-flex justify-content-between pb-2">
							<span>0</span>
							<span>2000</span>
						</div>
						<div class="dynamic-value position-relative">
							<div class="slide-img">
								<div class="slide-value">
									<img src="images/1-plane.png">
									<!-- <span>$20000</span> -->
								</div>
								<div class="slide-value">
									<img src="images/2-plane.png">
									<span>2000</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row pt-4">
					<div class="col-md-7">
						<div class="form-group mb-0  filter-search position-relative">
							<input type="text" class="form-control" placeholder="Search" name="">
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

<div class="map-viewr">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="map-sidebar">
					<h5 class="my-4">Range Map</h5>
				     <div id="accordion" class="myaccordion">
						  <div class="card mb-3">
							    <div class="card-header border-0 bg-transparent p-0" id="headingOne">
							      <h2 class="mb-0">
							        <button class="d-flex border-0 pl-3 p-0 align-items-center w-100 justify-content-between bg-transparent btn  collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							          1.Cessna Citation CJ2
							          <span class="area ar-1"></span>
							          <span class="fa-stack fa-sm">
							            <i class="fa  fa-stack-2x"></i>
							            <i class="fa fa-angle-down fa-stack-1x"></i>
							          </span>
							        </button>
							      </h2>
							    </div>
							    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							      <div class="card-body px-3 py-0">
							        <div class="jet-specify pb-2">
						  				<ul>
						  					<li>2009</li>
						  					<li>122 kts</li>
						  					<li>Range 694 nmi</li>
						  					<li>10 passengers</li>
						  				</ul>
						  			</div>
							      </div>
							    </div>
						  </div>
						  <div class="card mb-3">
							    <div class="card-header p-0 border-0 bg-transparent" id="headingTwo">
							      <h2 class="mb-0">
							        <button class="d-flex pl-3 border-0 bg-transparent p-0 w-100 align-items-center justify-content-between btn  collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          2.Cessna Citation CJ2 
									<span class="area ar-2"></span>
							          <span class="fa-stack fa-sm">
							            <i class="fa  fa-stack-2x"></i>
							            <i class="fa fa-angle-down fa-stack-1x"></i>
							          </span>
							        </button>
							      </h2>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							      <div class="card-body px-3 py-0">
							        <div class="jet-specify pb-2">
						  				<ul>
						  					<li>2009</li>
						  					<li>122 kts</li>
						  					<li>Range 694 nmi</li>
						  					<li>10 passengers</li>
						  				</ul>
						  			</div>
							      </div>
							    </div>
						  </div>
						  <div class="card mb-3">
							    <div class="card-header border-0 bg-transparent p-0" id="headingThree">
							      <h2 class="mb-0">
							        <button class="d-flex pl-3 p-0 border-0 bg-transparent w-100 align-items-center justify-content-between btn  collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          3.Cessna Citation CJ2
							          <span class="area ar-3"></span>
							          <span class="fa-stack fa-sm">
							            <i class="fa  fa-stack-2x"></i>
							            <i class="fa fa-angle-down fa-stack-1x"></i>
							          </span>
							        </button>
							      </h2>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							      <div class="card-body px-3 py-0">
							        <div class="jet-specify pb-2">
						  				<ul>
						  					<li>2009</li>
						  					<li>122 kts</li>
						  					<li>Range 694 nmi</li>
						  					<li>10 passengers</li>
						  				</ul>
						  			</div>
							      </div>
							    </div>
						  </div>
						  <div class="card mb-3">
							    <div class="card-header p-0 border-0 bg-transparent" id="headingFour">
							      <h2 class="mb-0">
							        <button class="d-flex pl-3 p-0 border-0 bg-transparent w-100 align-items-center justify-content-between btn  collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							          3.Cessna Citation CJ2
							          <span class="area ar-4"></span>
							          <span class="fa-stack fa-sm">
							            <i class="fa  fa-stack-2x"></i>
							            <i class="fa fa-angle-down fa-stack-1x"></i>
							          </span>
							        </button>
							      </h2>
							    </div>
							    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							      <div class="card-body px-3 py-0">
							        <div class="jet-specify pb-2">
						  				<ul>
						  					<li>2009</li>
						  					<li>122 kts</li>
						  					<li>Range 694 nmi</li>
						  					<li>10 passengers</li>
						  				</ul>
						  			</div>
							      </div>
							    </div>
						  </div>
					</div>

					<div class="map-reset text-center mt-5">
						<a href="#" class="common-btn P-1 ">RESET RANGE RINGS </a>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="view-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39010943.72799487!2d17.900375685019064!3d53.36045612220941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741837bdf37e4c3%3A0xc4290c1e1010!2sHungary!5e0!3m2!1sen!2sin!4v1648150336549!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>




	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

<script>

 $("#accordion").on("hide.bs.collapse show.bs.collapse", (e) => {
  $(e.target).prev().find("i:last-child").toggleClass("fa-angle-down fa-angle-up");
});

</script>

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