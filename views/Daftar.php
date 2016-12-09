<!DOCTYPE html>
<html>
<head>
	<title>Daftar - Ivent</title>

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/linearicons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/hover-min.css">
</head>
<body class="daftar">

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
					<a href="dashboard"><input type="submit" class="hvr-wobble-horizontal" name="loginBtn" value="Masuk"></a>
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
							<li><a href="login"><span class="lnr lnr-calendar-full"></span> Buat Event</a></li>
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
				<div class="col-sm-7">
					
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  	<!-- Indicators -->
					  	<ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
					  	</ol>

					  	<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
					      		<h2 class="bolder text-grey">Daftar, Atur dan Promosikan eventmu<br><span class="text-red text-uppercase">Gratis!</span></h2>
								<br>
								<p class="bold">Solusi buat kamu yang <span class="text-red">gak mau ribet</span> urusin sistem pendaftaran member di eventmu. Mengatur event jadi lebih mudah, tinggal buat akun, masukkan detail event, dan <span class="text-red">atur member eventmu sendiri</span>.</p>
					    	</div>

						    <div class="item">
						    	<h2 class="bolder text-grey">Lorem ipsum</h2>
								<br>
								<p class="bold">Solusi buat kamu yang <span class="text-red">gak mau ribet</span> urusin sistem pendaftaran member di eventmu. Mengatur event jadi lebih mudah, tinggal buat akun, masukkan detail event, dan <span class="text-red">atur member eventmu sendiri</span>.</p>
						    </div>
					  	</div>
					</div>
				</div>
				<div class="form-wrapper col-sm-4 col-sm-offset-1">
					<div class="form-daftar">
						<h4 class="bold">Daftar - <small class="bold">Lengkapi formulir dibawah ini</small></h4>
						<form method="post" action="" autocomplete="off">
							<input type="text" name="nama" placeholder="Nama kamu..." required="">
							<input type="email" name="email" placeholder="Email kamu..." required="">
							<input type="text" name="telp" placeholder="No Telp..." required="">
							<input type="password" name="password" placeholder="Password..." required="">
							<input type="password" name="re-password" placeholder="Ulangi password..." required="">
							<input type="submit" value="Daftar">
						</form>
					</div>
					<small><span class="bold">Sudah punya akun?</span> <a href="login.html"><span class="bolder">Masuk</span></small></a>
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