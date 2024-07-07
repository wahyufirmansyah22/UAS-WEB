<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
    <link href="<?php echo base_url();?>assets/bootswatch-5/dist/united/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tambah Petugas</h1>
        <?php echo validation_errors(); ?>
        <?php if ($this->session->flashdata('success')) : ?>
            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        <?php echo form_open('petugas/store'); ?>

        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Tambah Petugas</button>
        <button onclick="window.location.href='<?php echo base_url('beranda/data_petugas'); ?>'" type="button" class="btn btn-warning">Cancel</button>
        </form>
    </div>
</body>
</html>
