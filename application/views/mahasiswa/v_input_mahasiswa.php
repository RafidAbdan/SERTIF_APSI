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
        echo form_open('mahasiswa/input_mahasiswa'); //mengirim data kesitu?>

        <div class="form-grup">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control"  placeholder="NIM" value="<?php echo set_value('nim'); ?>">
            <?php echo form_error('nim', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-grup">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" value="<?php echo set_value('nama'); ?>">
            <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir'); ?>">
            <?php echo form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir'); ?>">
            <?php echo form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-grup">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin"  class="form-control">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="L" <?php echo set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
                <option value="P" <?php echo set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
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


