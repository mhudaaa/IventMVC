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
                                <span class="bold">Seminar Internet Marketing 2016</span>
                            </div>
                            <div class="col m6 right-align">
                                <h4><i class="lnr lnr-printer"></i></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col m12">
                                <table class="striped highlight">
                                    <thead>
                                        <tr>
                                              <th data-field="id">No</th>
                                              <th data-field="id">Nama</th>
                                              <th data-field="name">Email</th>
                                              <th data-field="price">No. Telp</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Alvin</td>
                                            <td>alvin@gmail.com</td>
                                            <td>0892-9920-0292</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Alan</td>
                                            <td>alan@gmail.com</td>
                                            <td>0820-9293-1293</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Jonathan</td>
                                            <td>lo@jon.com</td>
                                            <td>0380-2323-4994</td>
                                          </tr>
                                        </tbody>
                                </table>
                                <br>
                                <a href="detailEvent"><button class="btn grey z-depth-0">Kembali</button></a>
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