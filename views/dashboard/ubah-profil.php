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
                            <div class="col m9">
                                <h5 class="title semi-bolder text-red">Ubah Profil</h5>
                            </div>
                            <div class="col m3 right-align">
                                <a href="<?=base_url?>dashboard/profil"><button class="btn z-depth-0 red lighten-2 white-text">Batal</button></a>
                            </div>
                        </div>

                        <div class="isi grey-text text-lighten-1 semi-bold">
                            <?php foreach ($users as $user) { ?>
                            <form method="post" action="<?=base_url?>dashboard/prosesUbahProfil/<?=$user->id_user?>">
                                <div class="row">
                                    <div class="col s2">
                                        <small class="uppercase semi-bolder spacing-1 grey-text text-darken-5">Akun</small>
                                    </div>
                                    <div class="col s10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Nama</div>
                                    <div class="col m4">
                                        <input type="text" name="nama" placeholder="Nama anda" value="<?=$user->nama?>" required="">
                                    </div>
                                    <div class="col m2 right-align">Organisasi</div>
                                    <div class="col m4">
                                        <input type="text" name="organisasi" placeholder="Nama organisasi" value="<?=$user->organisasi?>" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Email</div>
                                    <div class="col m5">
                                        <input type="email" name="email" placeholder="Email" value="<?=$user->email?>" required="">
                                    </div>
                                    <div class="col m1 right-align">Telp</div>
                                    <div class="col m4">
                                        <input type="text" name="telp" placeholder="Telp" value="<?=$user->telp?>" required="">
                                    </div>
                                </div>
                                 <hr><br>
                                <div class="row">
                                    <div class="col m3">
                                        
                                        <input type="submit" class="btn green lighten-2 white-text z-depth-0" name="" value="Simpan">
                                    </div>
                                </div>
                            </form>

                            <br>
                            <form>
                                <div class="row">
                                    <div class="col s2">
                                        <small class="uppercase semi-bolder spacing-1 grey-text text-darken-5">Password</small>
                                    </div>
                                    <div class="col s10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m2">Password baru</div>
                                    <div class="col m4">
                                        <input type="password" name="passbaru" placeholder="Masukkan password baru" required="">
                                    </div>
                                    <div class="col m2 right-align">Ulangi Password</div>
                                    <div class="col m4">
                                        <input type="password" name="passbaruc" placeholder="Ulangi password baru" required="">
                                    </div>
                                </div>

                                <hr><br>
                                <div class="row">
                                    <div class="col m3">
                                        <input type="submit" class="btn green lighten-2 white-text z-depth-0" name="" value="Ubah">
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
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