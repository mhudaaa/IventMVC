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
                                <h5 class="title semi-bolder text-red">Tambah event</h5>
                            </div>
                        </div>

                        <div class="isi grey-text text-lighten-1 semi-bold">
                            <form method="post" action="<?=base_url?>dashboard/prosesTambahEvent" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col s2">
                                        <small class="uppercase semi-bolder spacing-1 grey-text text-darken-5">Detail</small>
                                    </div>
                                    <div class="col s10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Nama event</div>
                                    <div class="col m6">
                                        <input type="text" name="nama_event" placeholder="Masukkan nama event" required="">
                                    </div>
                                    <div class="col m3">Jumlah peserta</div>
                                    <div class="col m1">
                                        <input type="text" name="jml_peserta" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Tanggal</div>
                                    <div class="col m4">
                                        <input type="date" name="tgl_event" required="">
                                    </div>
                                    <div class="col m2">Tempat</div>
                                    <div class="col m4">
                                        <input type="text" name="tempat" placeholder="Masukkan lokasi event" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Waktu mulai</div>
                                    <div class="col m4">
                                        <input type="time" name="waktu_mulai" required="">
                                    </div>
                                    <div class="col m2">Selesai</div>
                                    <div class="col m4">
                                        <input type="time" name="waktu_selesai" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Deskripsi</div>
                                    <div class="col m10">
                                        <textarea name="deskripsi" maxlength="500" placeholder="Deskripsi maksimal 500 karakter" required=""></textarea>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col m2">Kota</div>
                                    <div class="col m6">
                                        <input type="text" name="kota" placeholder="Masukkan kota event" required="">
                                    </div>
                                    <div class="col m1">HTM</div>
                                    <div class="col m3">
                                        <input type="number" name="htm" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <small class="uppercase semi-bolder spacing-1 grey-text text-darken-5">Kontak</small>
                                    </div>
                                    <div class="col s10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">No Telp</div>
                                    <div class="col m4">
                                        <input type="text" name="telp" placeholder="Masukkan no. telepon" required="">
                                    </div>
                                    <div class="col m2">Website</div>
                                    <div class="col m4">
                                        <input type="text" name="website" placeholder="Masukkan alamat website" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Email</div>
                                    <div class="col m4">
                                        <input type="email" name="email" placeholder="Masukkan email" required="">
                                        <input type="hidden" name="event_organizer" value="1">
                                        <input type="hidden" name="poster" value="sample">
                                    </div>
                                </div>


                                <!-- Poster -->
                               <!--  <div class="row">
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
                                        <input type="file" name="gambar">
                                    </div>
                                    <div class="col m6">
                                        <ul class="no-margin">
                                            <li>Ukuran maksimum poster <b>1 MB</b></li>
                                            <li>Dimensi gambar maksimum : <b>800 x 1000 piksel</b></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <hr><br>
                                <div class="row">
                                    <div class="col m3">
                                        <input type="submit" class="btn green lighten-2 white-text z-depth-0" name="" value="Buat event">
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