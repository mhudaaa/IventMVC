<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Event</title>

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/linearicons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/hover-min.css">
</head>
<body id="daftar-event" class="daftar">

	<!-- Login form -->
	<div class="login-form">
		<div class="rel">
			<div class="arrow-up"></div>
		</div>
		<a href=""><small class="bold">Lupa password?</small></a>
		<form>
			<div class="row">
				<div class="col-sm-12">
						<input type="email" name="email" placeholder="Email...">
						<input type="password" name="password" placeholder="Kata sandi...">
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<a href="<?=base_url?>index.php/"><input type="submit" class="hvr-wobble-horizontal" name="loginBtn" value="Masuk"></a>
				</div>
			</div>
		</form>
	</div>

	<!-- Begin Header -->
	<section id="header">
		<div id="wrapper">

			<!-- Navbar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span> <span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="../home"><img src="<?=base_url?>assets/img/logo.png"></a>
					</div><!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?=base_url?>index.php/home/login"><span class="lnr lnr-calendar-full"></span> Buat Event</a></li>
							<li class="open-login"><a href="#"><span class="lnr lnr-lock"></span> Masuk</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->

				<div class="menu-arrow"></div>
			</nav>
		</div>
	</section>
	<!-- End Header -->

	<section>
		<div id="wrapper-top">
			<img src="<?=base_url?>assets/img/menu-arrow.png">
		</div>
	</section>
	
	<!-- Begin Content -->
	<sections>
		<div id="wrapper">
			<div class="row">
				<div class="col-sm-3 col">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="<?=base_url?>assets/img/poster1.jpg">
						<h5 class="text-red">Lorem ipsum dolor sit</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Gratis</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="<?=base_url?>assets/img/poster2.jpg">
						<h5 class="text-red">Summer Sounds Festival</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2016</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Rp 50.000</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="<?=base_url?>assets/img/poster3.jpg">
						<h5 class="text-red">British Academy Film Awards</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Gratis</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="<?=base_url?>assets/img/poster4.jpg">
						<h5 class="text-red">Qontinent - The Last Resort</h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info">30-6-2015</span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">RP. 30.000</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="detail-event.html"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Content -->

	<!-- Begin Footer -->
	<section id="footer">
		<div id="wrapper">
			<div class="row">
				<div class="col-sm-1">
					<img class="logo-footer" src="<?=base_url?>assets/img/logo-footer.png">
				</div>
				<div class="col-sm-5">
					Copyright &copy; 2016 PBW - All Rights Reserved
				</div>
				<div class="col-sm-6 footer-link">
					<ul class="pull-right">
						<li><a href="">Syarat & ketentuan</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Daftar</a></li>
						<li><a href="">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Footer -->

	<!-- Javascript -->
	<script type="text/javascript" src="<?=base_url?>assets/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/script.js"></script>

</body>
</html>