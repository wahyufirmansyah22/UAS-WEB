<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data List</title>
    <link href="<?= base_url('assets/bootswatch-5/dist/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <form action="<?php echo base_url('barang/search_barang'); ?>" method="post">
        <input type="text" name="keyword" placeholder="Cari Nama Barang">
        <button type="submit">Cari</button>
        <button onclick="window.location.href='<?php echo base_url('barang/data_barang'); ?>'" type="button">Reset</button>
    </form>
</head>

<body>
    <div class="container">
        <h1>Data List</h1>
        <button onclick="window.location.href='<?php echo base_url('barang/create'); ?>'" class="btn btn-primary">Tambah Data</button><br></br>
        <table border="3" class="table table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Harga Barang</th>
                    <th>Status</th>
                    <th>Tanggal Masuk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php foreach ($barang as $index => $record) : ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $record['kode_barang']; ?></td>
                    <td><?php echo $record['nama_barang']; ?></td>
                    <td><?php echo $record['kategori_barang']; ?></td>
                    <td><?php echo $record['deskripsi_barang']; ?></td>
                    <td><?php echo $record['harga_barang']; ?></td>
                    <td><?php echo $record['status']; ?></td>
                    <td><?php echo $record['tanggal_masuk']; ?></td>
                    <td>
                        <a href="<?php echo base_url('beranda/edit/' . $record['id_barang']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url('beranda/delete/' . $record['id_barang']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>