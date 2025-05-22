<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title?></h6>
    </div>
    <div class="card-body">
        <?php
        //notif Validsasi form
        echo validation_errors('<div class="alert alert-danger">', '</div>'); 
        ?>
        <?php
        echo form_open('mahasiswa/edit_mahasiswa/'.$mhs->id_mahasiswa); //mengirim data kesitu?>

        <div class="form-grup">
            <label for="nim">NIM</label>
            <input type="text" value="<?= $mhs->NIM?>" name="nim" class="form-control"  placeholder="NIM" >
            <?php echo form_error('nim', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-grup">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" value="<?= $mhs->nama_mahasiswa?>" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" >
            <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text"value="<?= $mhs->tempat_lahir?>" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir">
            <?php echo form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" value="<?= $mhs->tgl_lahir?>" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" >
            <?php echo form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="L"<?= $mhs->jenis_kelamin == 'L'?'selected': ''?>>Laki-laki</option>
                <option value="P"<?= $mhs->jenis_kelamin == 'P' ? 'selected': ''?>>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>

        </div>
        <div class="form-grup">
        <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
            <a href="<?= base_url('mahasiswa/index')?>" class="btn btn-success">Kembali</a>
        </div>
        <?php echo form_close(); ?>
                                
    </div>
</div>


