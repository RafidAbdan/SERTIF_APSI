<a href="<?= base_url('mahasiswa/input_mahasiswa')?>" class="btn btn-primary btn-sm">Tambah Data</a>

<?php
//notif
if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> ' . $this->session->flashdata('pesan') . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tempat/Tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($mhs as $key => $value) {?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $value->NIM ?></td>
                <td><?= $value->nama_mahasiswa ?></td>
                <td><?= $value->tempat_lahir ?>/ <?= date('d M Y',strtotime($value->tgl_lahir ))?></td>
                <td><?= $value->jenis_kelamin?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/edit_mahasiswa/'. $value->id_mahasiswa)?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('mahasiswa/hapus_mahasiswa/'. $value->id_mahasiswa)?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>