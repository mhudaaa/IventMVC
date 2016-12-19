<?php include('template/header.php') ?>
<table class="table" id="table-peserta" class="striped highlight">
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