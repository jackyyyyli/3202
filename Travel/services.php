<?php
	session_start();
	require("logout.php");
?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Queensland Travel Agency"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/login.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/login.js"></script>
<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>




</head>
	
<body>
	<!-- header -->
	<div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
			<a href="index.php" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" alt="logo"></a>
		</div>
			<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"logo-right\">
							<ul>
								<li><a>".$_SESSION["username"]."</a></li>
							</ul>
						</div>";
			}
		?>
	</div>
		<div class="clearfix"> </div>

	<div class="container-fluid header-navigation" style="margin-bottom: 10px;">
		<div class="navigationbar navigationbar-default">
			<div class="row navigation navigationbar-nav">
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="index.php">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="services.php">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="gallery.php">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4"><a href="about.php">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"login.php\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"register.php\">Register</a></div>";
				} else {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"profile.php\">Profile</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"index.php?logout=true\">Logout</a></div>";
				}
				?>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner1">
	</div>
<!-- //banner -->
<!-- services -->
	<div class="services">
		<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">Services</li>
			</ol>
			<div class="services-grid">
				<h3>What We Offer</h3>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="services-overview">
				<h3>Services Overview</h3>
				<div class="services-overview-grids">
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/10.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-overview-grids">
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="images/6.jpg" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>Itaque earum rerum hic tenetur</h4>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam 
									eius modi tempora incidunt ut labore et dolore magnam aliquam 
									quaerat voluptatem.</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<h4>mail@qta.com.au</h4>>
					<h4>(07) 3456 7890</h4>
					<!--<ul class="social-icons">
						<li><a href="#" class="p"></a></li>
						<li><a href="#" class="in"></a></li>
						<li><a href="#" class="v"></a></li>
						<li><a href="#" class="facebook"></a></li>
					</ul>-->
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
						<li><a href="cart.html">Cart</a></li>
						<li><a href="order.html">Purchased Order</a></li>

					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Destination</h3>
					<ul>
						<li><a href="brisbane.html">Brisbane</a></li>
						<li><a href="goldcoast.html">Gold Coast</a></li>
						<li><a href="sunshinecoast.html">Sunshine Coast</a></li>
						<li><a href="cairns.html">Cairns<a/></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Copyright &copy; 2017.UQ</p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>