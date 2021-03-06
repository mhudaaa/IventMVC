<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$detailEvent->nama_event?> - Ivent</title>

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/linearicons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/hover-min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/custombox.css">
</head>
<body class="detail">

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
						<a class="navbar-brand" href="<?=base_url?>"><img src="<?=base_url?>assets/img/logo.png"></a>
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
							<li><a href="<?=base_url?>index.php/home/login"><span class="lnr lnr-lock"></span> Masuk</a></li>
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
	<section>
		<div id="wrapper" class="semi-bold">
			<div class="row">
				<div class="col-sm-5">
					<img class="poster wow fadeIn" src="<?=base_url?>assets/img/poster-lg.jpg">
				</div>
				<div class="col-sm-7">
					<h4 class="semi-bolder"><?=$detailEvent->nama_event?></h4>

					<div class="event-line text-red">
						<img src="<?=base_url?>assets/img/event-line.png">
						<div class="seat text-uppercase text-center">
							<small>sisa</small><br>
							<div class="number lato"><?php echo $detailEvent->jml_peserta - $detailEvent->peserta->count() ?></div>
							<small>tiket</small><br>
						</div>
					</div>

					<!-- Event Info -->
					<div class="event-info semi-bolder lato text-red text-uppercase">
						<div class="row">
							<div class="col-sm-3">
								<small><span class="lnr lnr-calendar-full"></span> <?=date('d M Y', strtotime($detailEvent->tgl_event));?></small>
							</div>
							<div class="col-sm-3">
								<small><span class="lnr lnr-clock"></span> <?=date('H:i', strtotime($detailEvent->waktu_mulai));?> - <?=date('H:i', strtotime($detailEvent->waktu_selesai));?></small>
							</div>
							<div class="col-sm-4">
								<small><span class="lnr lnr-map-marker"></span> <?=$detailEvent->kota?></small>
							</div>
						</div>
					</div>
					<!-- End event info -->

					<?php if(isset($_SESSION['pesansukses'])) { ?>
					<div class="alert alert-success">
						<?=$_SESSION['pesansukses']?>
					</div>
					<?php 
					unset($_SESSION['pesansukses']);
					} else { ?>

					<?php if($cekdaftar->count() > 0){ ?>
					<div class="alert alert-info">
						Anda sudah mendaftar di event ini.
					</div>
					<?php } } ?>


					<!-- Event text -->
					<p><?=$detailEvent->deskripsi?></p>

					<!-- Event Detail -->
					<div class="rincian-event">
						<div class="title title-1">
							<span class="text-red semi-bolder">Rincian Event</span>
						</div>
						<div class="title title-2 text-center">
							<span class="text-tosca lato semi-bolder">Rp <?=number_format("$detailEvent->htm","0",",",".") ?></span>
						</div>
				
						<?php if($cekdaftar->count() > 0){ ?>
						<div class="title title-3 text-center bg-blue hvr-shrink">
							<button><span class="lato semi-bolder"><i class="lnr lnr-printer"></i> Cetak bukti</span></button>
						</div>
						<?php } else { ?>
						<div class="title title-3 text-center bg-tosca hvr-shrink">
							<button id="daftarBtn"><span class="lato semi-bolder">Daftar sekarang</span></button>
						</div>
						<?php } ?>

						<div class="row">
							<div class="col-sm-8">
								<table class="rincian">
									<tr>
										<td>Tempat</td>
										<td>: <?=$detailEvent->tempat?></td>
									</tr>
									<tr>
										<td>Kontak</td>
										<td>: <?=$detailEvent->kontak?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: <?=$detailEvent->email?></td>
									</tr>
									<tr>
										<td>Website</td>
										<td>: <?=$detailEvent->website?></td>
									</tr>
								</table>
							</div>
							<div class="col-sm-4">
								<div class="left-border"></div>
								<span class="text-red semi-bolder">Bagikan event</span><br><br>
								<span class="badge"><span class="lnr lnr-link"></span> Salin tautan event</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Content -->

	<!-- Event lainnya -->
	<section id="event-baru">
		<div class="before"></div>
		<div id="wrapper-top">
			<div class="row">
				<div class="col-sm-6">
					<h3>Event lainnya</h3>
				</div>
			</div>
			<div class="row">
				<?php
					$delay = 0.4; 
					foreach($events as $event) {
				?>
				<div class="col-sm-3 col wow fadeIn" data-wow-delay="<?=$delay+=.3?>s">
					<div class="event-list hvr-grow">
						<img class="event-img" src="<?=base_url?>upload/<?=$event->poster?>">
						<h5 class="text-red"><?=$event->nama_event?></h5>
						<div class="row">
							<div class="col-sm-6">
								<span class="event-info"><?=$event->tgl_event?></span>
							</div>
							<div class="col-sm-6">
								<span class="event-info text-green text-uppercase pull-right"><?=$event->htm?></span>
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
	<!-- End event lainnya -->

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

	<div id="daftarForm" class="modal-demo">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="modal-body">
				    <button type="button" class="close" onclick="Custombox.close();">
				        <span>&times;</span><span class="sr-only">Close</span>
				    </button>
				    <h4 class="title text-left text-red"><b>Daftar Event</b> - <small><?=$detailEvent->nama_event?></small></h4>
				    <br>
				    <div class="text-left">
				       <table class="table tbl-info">
				       		<tr>
				       			<td width="110px"><b><i class="lnr lnr-calendar-full icon-left"></i> Tanggal</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->tgl_event?></td>
				       			<td width="100px"><b><i class="lnr lnr-clock icon-left"></i> Waktu</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=date('H:i', strtotime($detailEvent->waktu_mulai));?> - <?=date('H:i', strtotime($detailEvent->waktu_selesai));?>
				       			</td>
				       		</tr>
				       		<tr>
				       			<td><b><i class="lnr lnr-map-marker icon-left"></i> Tempat</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->tempat?></td>
				       			<td><b><i class="lnr lnr-apartment icon-left"></i> Kota</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->kota?></td>
				       		</tr>
				       		<tr>
				       			<td><b><i class="lnr lnr-phone icon-left"></i> Kontak</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->kontak?></td>
				       			<td><b><i class="lnr lnr-envelope icon-left"></i> Email</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->email?></td>
				       		</tr>
				       		<tr>
				       			<td><b><i class="lnr lnr-earth icon-left"></i> Website</b></td>
				       			<td width="10px"> : </td>
				       			<td><?=$detailEvent->website?></td>
				       			<td><b><i class="lnr lnr-license icon-left"></i> HTM</b></td>
				       			<td width="10px"> : </td>
				       			<td>Rp <?=$detailEvent->htm?>,-</td>
				       		</tr>
				       		<tr>
				       			<td><b><i class="lnr lnr-file-empty icon-left"></i> Deskripsi</b></td>
				       			<td width="10px"> : </td>
				       			<td colspan="4"><?=$detailEvent->deskripsi?></td>
				       		</tr>
				       </table>
				       <hr>
				       <form method="post" action="<?=base_url?>home/prosesDaftarEvent">
				       		<div class="row">
				       			<div class="col-sm-9">
						       		<label class="text-info">
						       			&nbsp;<input type="checkbox" name="check" required=""> &nbsp; <small>Saya setuju dengan semua syarat dan ketentuan yang berlaku</small>
						       		</label>
				       			</div>
				       			<div class="col-sm-3">
				       				<input type="hidden" name="event" value="<?=$detailEvent->id_event?>">
					       			<input type="submit" name="daftarEvent" class="btn btn-success pull-right" value="Daftar">
				       			</div>
				       		</div>
				       </form>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Javascript -->
	<script type="text/javascript" src="<?=base_url?>assets/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/wow.min.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/custombox.js"></script>
	<script type="text/javascript" src="<?=base_url?>assets/js/script.js"></script>
	<script>
    	new WOW().init();

    	$(function() {
	        $('#daftarBtn').on('click', function( e ) {
	            Custombox.open({
	                target: '#daftarForm',
	                effect: 'sign',
	                overlayColor: "#eee",
	                overlaySpeed: 100
	            });
	            e.preventDefault();
	        });
	    });
    </script>


</body>
</html>