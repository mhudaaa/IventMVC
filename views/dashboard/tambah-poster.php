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
                                <h5 class="title semi-bolder text-red">Tambah Poster</h5>
                            </div>
                        </div>

                        <div class="isi grey-text text-lighten-1 semi-bold">
                            <form method="post" action="<?=base_url?>dashboard/prosesTambahPoster" enctype="multipart/form-data">

                                <!-- Poster -->
                                <div class="row">
                                    <div class="col s2">
                                        <small class="uppercase semi-bolder spacing-1 grey-text text-darken-5">Poster</small>
                                    </div>
                                    <div class="col s10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Poster</div>
                                    <div class="col m4">
                                        <input type="file" name="gambar" required="">
                                    </div>
                                    <div class="col m6">
                                        <ul class="no-margin">
                                            <li>Ukuran maksimum poster <b>1 MB</b></li>
                                            <li>Dimensi gambar maksimum : <b>800 x 1000 piksel</b></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr><br>
                                <div class="row">
                                    <div class="col m4">
                                        <input type="hidden" name="id_event" value="<?=$_SESSION['id_event']?>">
                                        <input type="submit" class="btn green lighten-2 white-text z-depth-0" value="Tambah Poster">
                                    </div>
                                </div>
                            </form>

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