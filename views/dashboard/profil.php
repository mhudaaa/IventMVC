<?php include('template/header.php') ?>

    </head>

    <body>

        <div id="wrapper">
            <?php include('template/navbar.php') ?>
        </div>

        <!-- Board -->
        <div id="board">
            <div class="row flexbox">

                <?php include('template/sidebar.php') ?>

                <!-- Content -->
                <div class="col col-content s12 m8 l8 content">
                    <div class="content-wrapper">

                        <!-- Title -->
                        <div class="row">
                            <div class="col m6">
                                <h5 class="title bolder text-red">Profil</h5>
                            </div>
                            <div class="col m6 right-align">
                                <a href="<?=base_url?>dashboard/ubahProfil">
                                    <button class="btn z-depth-0 red lighten-2">Ubah Profil</button>
                                </a>
                            </div>
                        </div>

                        <br>
                        <?php if (isset($_SESSION['pesan'])) {?>
                            <div class="alert alert-success">
                                <?=$_SESSION['pesan']?>
                            </div>
                        <?php unset($_SESSION['pesan']); } ?>

                        <div class="row">
                            <div class="col s3">
                                <div class="profile-card">
                                    <img class="photo" src="<?=base_url?>assets/dashboard/img/panda.png">
                                </div>
                            </div>
                            
                            <div class="col s6">
                                <table class="profile-info">
                                    <tr>
                                        <td class="bold text-red" width="120px"><i class="lnr lnr-user"></i> Nama</td>
                                        <td width="15px" class="center-align">:</td>
                                        <td><?=$user->nama?></td>
                                    </tr>
                                    <tr>
                                        <td class="bold text-red"><i class="lnr lnr-envelope"></i> Email</td>
                                        <td width="15px" class="center-align">:</td>
                                        <td><?=$user->email?></td>
                                    </tr>
                                    <tr>
                                        <td class="bold text-red"><i class="lnr lnr-phone-handset"></i> Telp.</td>
                                        <td width="15px" class="center-align">:</td>
                                        <td><?=$user->telp?></td>
                                    </tr>
                                    <tr>
                                        <td class="bold text-red"><i class="lnr lnr-license"></i> Organisasi</td>
                                        <td width="15px" class="center-align">:</td>
                                        <td><?=$user->organisasi?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col s3">
                                <table class="profile-info">
                                    <tr>
                                        <td class="right-align text-red bold">Tanggal Gabung <i style="margin-left: 8px" class="lnr lnr-calendar-full"> </td>
                                    </tr>
                                    <tr>
                                        <td class="right-align"><?= date('d M Y', strtotime($user->created_at))?></td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col s4">
                                <h6 class="bold grey-text">Event yang anda kelola</h6>
                            </div>
                            <div class="col s7">
                                <hr class="title">
                            </div>
                            <div class="col s1 right-align">
                                <h6 class="bold text-green">2</h6>
                            </div>
                        </div>

                        <div class="event-list-wrapper">
                            <div class="row border">
                                <div class="col s12">
                                    <div class="event-list grey lighten-5">
                                        <div class="number">1</div>
                                        <div class="row">
                                            <div class="col s9">
                                                <b class="red-text text-lighten-3">Summer Sound Festival</b>
                                            </div>
                                            <div class="col s3 right-align grey-text">
                                                12 Dec 2016 <i style="margin-left: 15px" class="lnr lnr-calendar-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="event-list grey lighten-5">
                                        <div class="number">2</div>
                                        <div class="row">
                                            <div class="col s9">
                                                <b class="red-text text-lighten-3">British Academy Film Awards</b>
                                            </div>
                                            <div class="col s3 right-align grey-text">
                                                15 Dec 2016 <i style="margin-left: 15px" class="lnr lnr-calendar-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col s4">
                                <h6 class="bold grey-text">Event yang anda Ikuti</h6>
                            </div>
                            <div class="col s7">
                                <hr class="title">
                            </div>
                            <div class="col s1 right-align">
                                <h6 class="bold text-green"><?=$jmlEvent?></h6>
                            </div>
                        </div>

                        <div class="event-list-wrapper">
                            <div class="row border">
                                <div class="col s12">
                                    <div class="event-list grey lighten-5">
                                        <div class="number">1</div>
                                        <div class="row">
                                            <div class="col s9">
                                                <b class="red-text text-lighten-3">Summer Sound Festival</b>
                                            </div>
                                            <div class="col s3 right-align grey-text">
                                                12 Dec 2016 <i style="margin-left: 15px" class="lnr lnr-calendar-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border">
                                <div class="col s12">
                                    <div class="event-list grey lighten-5">
                                        <div class="number">2</div>
                                        <div class="row">
                                            <div class="col s9">
                                                <b class="red-text text-lighten-3">Summer Sound Festival</b>
                                            </div>
                                            <div class="col s3 right-align grey-text">
                                                12 Dec 2016 <i style="margin-left: 15px" class="lnr lnr-calendar-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="event-list grey lighten-5">
                                        <div class="number">3</div>
                                        <div class="row">
                                            <div class="col s9">
                                                <b class="red-text text-lighten-3">British Academy Film Awards</b>
                                            </div>
                                            <div class="col s3 right-align grey-text">
                                                15 Dec 2016 <i style="margin-left: 15px" class="lnr lnr-calendar-full"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        
                    </div>
                </div>
            </div>
            <div class="copyright bold spacing-1 grey-text text-darken-6">
                &copy; 2016 IVENT - All Rights Reserved
            </div>
        </div>

        <!-- Share popup -->
        <div id="share" class="modal">
            <div class="modal-content grey-text text-lighten-1">
                <div class="row">
                    <div class="col s10">
                        <h6 class="text-red bold">Bagikan Event</h6>
                    </div>
                    <div class="col s2 right-align">
                        <a href="#!" class="grey-text text-lighten-1 modal-close "><span class="lnr lnr-cross"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p class="bold">Tautan</p>
                    </div>
                    <div class="col s9">
                        <input type="text" name="link" value="http://domain.com/event/12399">
                    </div>
                    <div class="col s3">
                        <button class="btn z-depth-0 grey lighten-2">salin</button>
                    </div>
                </div>
            </div>
        </div>
       <?php include('template/footer.php') ?>