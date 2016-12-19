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
	<!-- End login -->

	<!-- Account panel -->
	<div class="account-panel">
		<div class="rel">
			<div class="arrow-up"></div>
		</div>
		<ul>
			<li><a href="<?=base_url?>dashboard/profil"><i class="lnr lnr-user"></i> Profile</a></li>
			<li><a href="<?=base_url?>dashboard"><i class="lnr lnr-home"></i> Dashboard</a></li>
			<li class="separator"></li>
			<li><a href="<?=base_url?>auth/logout"><i class="lnr lnr-power-switch"></i>Logout</a></li>
		</ul>
	</div>
	<!-- End account panel -->

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
						
						<?php if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?=base_url?>dashboard/tambahEvent"><span class="lnr lnr-calendar-full"></span> Buat Event</a></li>
							<li class="open-account"><a href="#"><span class="lnr lnr-user"></span> <?=$_SESSION['nama']?> <small><i class="lnr lnr-chevron-down icon-right icon-sm"></i></small></a></li>
						</ul>
						<?php } else { ?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?=base_url?>index.php/home/login"><span class="lnr lnr-calendar-full"></span> Buat Event</a></li>
							<li class="open-login"><a href="#"><span class="lnr lnr-lock"></span> Masuk</a></li>
							<li><a href="<?=base_url?>index.php/home/daftar"><span class="lnr lnr-plus-circle"></span> Daftar</a></li>
						</ul>
						<?php } ?>

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
				<?php foreach($events as $event) {?>
				<div class="col-sm-3">
					<div class="event-list hvr-float-shadow">
						<img class="event-img" src="<?=base_url?>upload/<?=$event->poster?>">
						<h5 class="text-red"><?=$event->nama_event?></h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info"><?=$event->tgl_event?></span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right">Rp <?=$event->htm?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<a href="<?=base_url?>home/detailEvent/<?=$event->id_event?>"><button class="btn btn-red btn-small text-uppercase">detail</button></a>
							</div>
							<div class="col-sm-6 text-right bold plus">
								<a href="daftar.html"><h3><i class="hvr-buzz-out lnr lnr-plus-circle"></i></h3></a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
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