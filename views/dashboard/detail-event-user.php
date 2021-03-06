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
                                <h5 class="title semi-bolder text-red"><?=$detailEvent->nama_event?></h5>
                            </div>
                        </div>

                        <div class="isi">
                            <div class="action">
                                <a class="dropdown-button" href="#" data-activates='dropdown-action'><img src="<?=base_url?>assets/dashboard/img/action.png"></a>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <div class="poster">
                                        <img src="<?=base_url?>upload/<?=$detailEvent->poster?>">
                                    </div>
                                </div>
                                <div class="col s7 grey-text text-darken-5">
                                    <h6 class="detail-title semi-bolder">Deskripsi</h6>
                                    <div class="deskripsi">
                                        <p><?=$detailEvent->deskripsi?></p>
                                    </div>
                                </div>
                            </div>
                            <ul id='dropdown-action' class='dropdown-content z-depth-0'>
                                <li><a href="#"><i class="lnr lnr-thumbs-up"></i> Bagikan</a></li>
                            </ul>

                            <div class="sm-divider"></div>

                            <div class="row">
                                <div class="col s5 grey-text text-lighten-1">
                                    <div class="row">
                                        <div class="col s8 offset-2">
                                            <table class="peserta">
                                                <tr>
                                                    <td><h3 class="unisans text-red"><?=$detailEvent->peserta->count()?></h3></td>
                                                    <td><h6 class="unisans">/<?=$detailEvent->jml_peserta?></h6></td>
                                                    <td><h6 style="margin-top: 0px">Peserta</h6></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row lihat-peserta">
                                        <div class="col s10">
                                            <a href="peserta.html"><button class="hvr-shrink btn-border btn-block">Download tiket</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s7 grey-text text-darken-5">
                                    <h6 class="detail-title semi-bolder">Rincian Event</h6>
                                    <ul class="event-info grey-text text-lighten-1">
                                        <li><i class="lnr lnr-calendar-full"></i> <?=$detailEvent->tgl_event?></li>
                                        <li><i class="lnr lnr-clock"></i> <?=date('H:i', strtotime($detailEvent->waktu_mulai));?> - <?=date('H:i', strtotime($detailEvent->waktu_selesai));?></li>
                                        <li><i class="lnr lnr-apartment"></i> <?=$detailEvent->tempat?></li>
                                        <li><i class="lnr lnr-map-marker"></i> <?=$detailEvent->kota?></li>
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

        <?php include('template/footer-2.php') ?>“