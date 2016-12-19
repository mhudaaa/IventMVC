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
                        <div class="row grey-text text-lighten-1">
                            <div class="col m6">
                                <h5 class="title bolder text-red">Daftar Peserta</h5>
                                <span class="bold"><?=$event->nama_event?></span>
                            </div>
                            <div class="col m6 right-align">
                                <h4><i class="lnr lnr-printer"></i></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col m12">
                                <table id="table-peserta" class="striped highlight">
                                    <thead>
                                        <tr>
                                              <th data-field="no" width="6px">No</th>
                                              <th data-field="nama">Nama</th>
                                              <th data-field="email">Email</th>
                                              <th data-field="telp">No. Telp</th>
                                              <th data-field="daftar">Daftar</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($pesertas as $peserta){ ?>
                                            <tr>
                                                <td class="center-align"><?=$no++?></td>
                                                <td><?=$peserta->user->nama?></td>
                                                <td><?=$peserta->user->email?></td>
                                                <td><?=$peserta->user->telp?></td>
                                                <td><?=date('d M Y', strtotime($peserta->created_at))?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                </table>
                                <br>
                                <a href="<?=base_url?>dashboard/detailEvent/<?=$event->id_event?>"><button class="btn grey z-depth-0">Kembali</button></a>
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

       <?php include('template/footer.php') ?>