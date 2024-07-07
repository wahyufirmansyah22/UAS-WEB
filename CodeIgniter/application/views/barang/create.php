<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link href="<?= base_url('assets/bootswatch-5/dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('beranda/create'); ?>

        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="kategori_barang">Kategori Barang</label>
            <input type="text" class="form-control" name="kategori_barang" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_barang">Deskripsi Barang</label>
            <input type="text" class="form-control" name="deskripsi_barang" required>
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" required>
                <option value="selesai">Selesai</option>
                <option value="terkirim">Terkirim</option>
                <option value="dikemas">Dikemas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Tambah Barang</button>
        <button onclick="window.location.href='<?php echo base_url('barang/data_barang'); ?>'" type="button" class="btn btn-warning">Cencle </button>
        </form>
    </div>
</body>

</html>