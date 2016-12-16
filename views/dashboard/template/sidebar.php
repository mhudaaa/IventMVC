                <!-- Sidebar -->
                <div class="col col-sidebar s12 m4 l4 sidebar">
                    <div class="sidebar-wrapper">
                        <div class="row">
                            <div class="col m5 no-padding">
                                <div class="photo">
                                    <img src="<?=base_url?>assets/dashboard/img/panda.png">
                                </div>
                            </div>
                            <div class="col m7 no-padding akun-info">
                                
                                <h6 class="bold"><?=$user->nama?></h6>
                                <span class="semi-bold"><?=$user->organisasi?></span>
                                
                            </div>
                        </div>

                        <!-- Ubah profil -->
                        <div class="row">
                            <div class="col s12">
                                <a href="<?=base_url?>dashboard/profil"><div class="hvr-outline-out btn-profile center-align uppercase semi-bold">Ubah profil</div></a>
                            </div>
                        </div>

                        <!-- Menu -->
                        <div class="row">
                            <div class="col s12">
                                <ul class="menu">
                                    <a href="<?=base_url?>dashboard"><li class="hvr-forward"><i class="lnr lnr-home"></i> Beranda</li></a>
                                    <a href="<?=base_url?>dashboard/event"><li class="hvr-forward"><i class="lnr lnr-calendar-full"></i> Event</li></a>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-divider"></div>

                        <!-- Keterangan -->
                        <div class="row">
                            <div class="col s12">
                                <p class="uppercase bold">Keterangan</p>
                                <ul class="keterangan">
                                    <li><img src="<?=base_url?>assets/dashboard/img/bullet1.png"> Sudah selesai</li>
                                    <li><img src="<?=base_url?>assets/dashboard/img/bullet2.png"> Sedang berlangsung</li>
                                    <li><img src="<?=base_url?>assets/dashboard/img/bullet3.png"> Akan berlangsung</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->