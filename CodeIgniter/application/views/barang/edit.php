<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link href="<?= base_url('assets/bootswatch-5/dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Barang</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('beranda/edit/' . $barang['id_barang']); ?>

        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" id="kode_barang" class="form-control" name="kode_barang" value="<?php echo set_value('kode_barang', $barang['kode_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" class="form-control" name="nama_barang" value="<?php echo set_value('nama_barang', $barang['nama_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label for="kategori_barang">Kategori Barang</label>
            <input type="text" id="kategori_barang" class="form-control" name="kategori_barang" value="<?php echo set_value('kategori_barang', $barang['kategori_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_barang">Deskripsi Barang</label>
            <input type="text" id="deskripsi_barang" class="form-control" name="deskripsi_barang" value="<?php echo set_value('deskripsi_barang', $barang['deskripsi_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="text" id="harga_barang" class="form-control" name="harga_barang" value="<?php echo set_value('harga_barang', $barang['harga_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" required>
                <option value="selesai" <?php echo ($barang['status'] == 'Selesai') ? 'selected' : ''; ?>>Selesai</option>
                <option value="terkirim" <?php echo ($barang['status'] == 'Terkirim') ? 'selected' : ''; ?>>Terkirim</option>
                <option value="dikemas" <?php echo ($barang['status'] == 'Dikemas') ? 'selected' : ''; ?>>Dikemas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" id="tanggal_masuk" class="form-control" name="tanggal_masuk" value="<?php echo set_value('tanggal_masuk', $barang['tanggal_masuk']); ?>" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Edit Barang</button>
        <button onclick="window.location.href='<?php echo base_url('barang/data_barang'); ?>'" type="button" class="btn btn-warning">Cencle </button>
        <?php echo form_close(); ?>
    </div>
</body>

</html>