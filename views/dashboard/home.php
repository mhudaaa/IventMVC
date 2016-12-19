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
                                        <li><a href="<?=base_url?>dashboard/detailEvent/<?=$event->id_event?>"><i class="lnr lnr-eye"></i> Rincian</a></li>
                                        <li><a href="<?=base_url?>dashboard/peserta/<?=$event->id_event?>"><i class="lnr lnr-users"></i> Peserta</a></li>
                                    </ul>
                                </div>
                                <div class="col m2 center-align grey-text text-lighten-1 ticket">
                                    <h4 class="unisans text-red"><?=$event->peserta->count()?></h4>
                                    <span class="unisans">/ <?=$event->jml_peserta?></span>
                                    <small class="spacing-1"><p>Peserta</p></small>
                                </div>
                            </div>
                            <!-- End item -->
                            <?php } ?>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright bold spacing-1 grey-text text-darken-6">
                &copy; 2016 IVENT - All Rights Reserved
            </div>
        </div>


       <?php include('template/footer.php') ?>