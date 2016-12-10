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
                            <div class="col m4">
                                <h5 class="title bolder text-red">Event kamu</h5>
                            </div>
                            <div class="col m6">
                                <form class="cari right-align" method="post" action="" autocomplete="off">
                                    <div class="cari-line"></div>
                                    <input type="text" name="cari" placeholder="cari event...">
                                </form>
                            </div>
                            <div class="col m2 center-align bold grey-text text-lighten-1">
                                Kategori
                                <div class="sm-divider"></div>

                                <div class="row"> 
                                    <div class="col s4">
                                        <img src="<?=base_url?>assets/dashboard/img/bullet1.png">
                                    </div>
                                    <div class="col s4">
                                        <img src="<?=base_url?>assets/dashboard/img/bullet2.png">
                                    </div>
                                    <div class="col s4">
                                        <img src="<?=base_url?>assets/dashboard/img/bullet3.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-wrapper">

                            <?php 
                                $noa = 1;
                                $nob = 1;
                                foreach($events as $event){ 
                            ?>
                            <!-- Item -->
                            <div class="row">
                                <div class="col m10">
                                    <div class="item white grey-text text-lighten-1">
                                        <div class="hvr-forward event-photo">
                                            <img src="<?=base_url?>assets/img/<?=$event->poster?>.jpg">
                                        </div>
                                        <div class="action">
                                            <a class="dropdown-button" href="" data-activates='dropdown-action-<?=$noa++?>'><img src="<?=base_url?>assets/dashboard/img/action.png"></a>
                                        </div>
                                        <div class="row">
                                            <div class="col m10 offset-m2 event-title">
                                                <div class="col m12">
                                                    <h6 class="truncate semi-bold"><?=$event->nama_event?></h6>
                                                </div>
                                                
                                                <div class="uppercase lato spacing-1 semi-bold">
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-calendar-full"></i> <?=$event->tgl_event?></small>
                                                    </div>
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-clock"></i> <?=date('H:i', strtotime($event->waktu_mulai));?> - <?=date('H:i', strtotime($event->waktu_selesai));?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge">
                                            <img src="<?=base_url?>assets/dashboard/img/bullet1.png">
                                        </div>
                                    </div>
                                    <ul id='dropdown-action-<?=$nob++?>' class='dropdown-content z-depth-0'>
                                        <li><a href="<?=base_url?>dashboard/detailEvent"><i class="lnr lnr-eye"></i> Rincian</a></li>
                                        <li><a href="<?=base_url?>dashboard/peserta"><i class="lnr lnr-users"></i> Peserta</a></li>
                                        <li><a href="#share"><i class="lnr lnr-thumbs-up"></i> Bagikan</a></li>
                                    </ul>
                                </div>
                                <div class="col m2 center-align grey-text text-lighten-1 ticket">
                                    <h4 class="unisans text-red">0</h4>
                                    <span class="unisans">/ <?=$event->jml_peserta?></span>
                                    <small class="spacing-1"><p>Peserta</p></small>
                                </div>
                            </div>
                            <!-- End item -->
                            <?php } ?>

                            <!-- Item -->
                           <!--  <div class="row">
                                <div class="col m10">
                                    <div class="item white grey-text text-lighten-1">
                                        <div class="hvr-forward event-photo">
                                            <img src="<?=base_url?>assets/img/poster3.jpg">
                                        </div>
                                        <div class="action">
                                            <a class="dropdown-button" href="#" data-activates='dropdown-action-2'><img src="<?=base_url?>assets/dashboard/img/action.png"></a>
                                        </div>
                                        <div class="row">
                                            <div class="col m10 offset-m2 event-title">
                                                <div class="col m12">
                                                    <h6 class="truncate semi-bold">Lorem ipsum dolor sit</h6>
                                                </div>
                                                
                                                <div class="uppercase lato spacing-1 semi-bold">
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-calendar-full"></i> 30 Oktober 2016</small>
                                                    </div>
                                                    <div class="col m5">
                                                        <small><i class="lnr lnr-clock"></i> 07:00 - 13:00</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge">
                                            <img src="<?=base_url?>assets/dashboard/img/bullet2.png">
                                        </div>
                                    </div>
                                    <ul id='dropdown-action-2' class='dropdown-content z-depth-0'>
                                        <li><a href="<?=base_url?>dashboard/detailEvent"><i class="lnr lnr-eye"></i> Rincian</a></li>
                                        <li><a href="<?=base_url?>dashboard/peserta"><i class="lnr lnr-users"></i> Peserta</a></li>
                                        <li><a href="#"><i class="lnr lnr-thumbs-up"></i> Bagikan</a></li>
                                    </ul>
                                </div>
                                 <div class="col m2 center-align grey-text text-lighten-1 ticket">
                                    <h4 class="unisans text-red">148</h4>
                                    <span class="unisans">/ 200</span>
                                    <small class="spacing-1"><p>Peserta</p></small>
                                </div>
                            </div> -->
                            <!-- End item -->
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