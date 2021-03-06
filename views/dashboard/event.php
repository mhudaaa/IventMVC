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
                                <h5 class="title bolder text-red">Event yang diikuti</h5>
                            </div>
                            <div class="col m6">
                                <form class="cari right-align" method="post" action="" autocomplete="off">
                                    <div class="cari-line"></div>
                                    <input type="text" name="cari" placeholder="cari event...">
                                </form>
                            </div>
                        </div>

                        <br>

                        <div class="item-wrapper">

                            <?php 
                                foreach($events as $event){ 
                            ?>
                            <!-- Item -->
                            <div class="row">
                                <div class="col m10">
                                    <div class="item white grey-text text-lighten-1">
                                        <div class="hvr-forward event-photo">
                                            <img src="<?=base_url?>upload/<?=$event->event->poster?>">
                                        </div>
                                        <div class="action">
                                            <!-- <a class="" href="#share" data-activates=''><i class="lnr lnr-thumbs-up"></i></a> -->
                                        </div>
                                        <div class="row">
                                            <div class="col m10 offset-m2 event-title">
                                                <div class="col m12">
                                                    <h6 class="truncate semi-bold"><?=$event->event->nama_event?></h6>
                                                </div>
                                                
                                                <div class="uppercase lato spacing-1 semi-bold">
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-calendar-full"></i> <?=$event->event->tgl_event?></small>
                                                    </div>
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-clock"></i> <?=date('H:i', strtotime($event->event->waktu_mulai));?> - <?=date('H:i', strtotime($event->event->waktu_selesai));?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge">
                                            <img src="<?=base_url?>assets/dashboard/img/bullet1.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col m2">
                                    <br>
                                    <a href="<?=base_url?>dashboard/detailEventPeserta/<?=$event->event->id_event?>"><button class="btn-border btn-small btn-block">Rincian</button></a><br>
                                    <a href=""><button class="btn-border btn-small btn-block">Tiket</button></a>
                                </div>
                            </div>
                            <!-- End item -->

                            <?php
                                }
                            ?>
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

       <?php include('template/footer.php') ?>