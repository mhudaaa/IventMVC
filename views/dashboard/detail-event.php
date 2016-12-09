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
                            <div class="col m12">
                                <h5 class="title semi-bolder text-red">Seminar Internet Marketing 2016</h5>
                            </div>
                        </div>

                        <div class="isi">
                            <div class="action">
                                <a class="dropdown-button" href="" data-activates='dropdown-action'><img src="<?=base_url?>assets/dashboard/img/action.png"></a>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <div class="poster">
                                        <img src="<?=base_url?>assets/img/poster2.jpg">
                                    </div>
                                </div>
                                <div class="col s7 grey-text text-darken-5">
                                    <h6 class="detail-title semi-bolder">Deskripsi</h6>
                                    <div class="deskripsi">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehen</p>
                                        <p>ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehen</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <ul id='dropdown-action' class='dropdown-content z-depth-0'>
                                <li><a href="#"><i class="lnr lnr-pencil"></i> Ubah</a></li>
                                <li><a href="#"><i class="lnr lnr-trash"></i> Hapus</a></li>
                            </ul>

                            <div class="sm-divider"></div>

                            <div class="row">
                                <div class="col s5 grey-text text-lighten-1">
                                    <div class="row">
                                        <div class="col s8 offset-2">
                                            <table class="peserta">
                                                <tr>
                                                    <td><h3 class="unisans text-red">126</h3></td>
                                                    <td><h6 class="unisans">/200</h6></td>
                                                    <td><h6 style="margin-top: 0px">Peserta</h6></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row lihat-peserta">
                                        <div class="col s10">
                                            <a href="peserta"><button class="hvr-shrink btn-border btn-block">Lihat peserta</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s7 grey-text text-darken-5">
                                    <h6 class="detail-title semi-bolder">Rincian Event</h6>
                                    <ul class="event-info grey-text text-lighten-1">
                                        <li><i class="lnr lnr-calendar-full"></i> 30 Oktober 2016</li>
                                        <li><i class="lnr lnr-clock"></i> 07:00 - 13:00</li>
                                        <li><i class="lnr lnr-apartment"></i> Gedung CDAST Lt. 4 Universitas Jember</li>
                                        <li><i class="lnr lnr-map-marker"></i> Jember, Jawa Timur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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

        <?php include('template/footer-2.php') ?>