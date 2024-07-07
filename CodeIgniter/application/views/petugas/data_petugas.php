<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container">
        <h1>Data List</h1>
        <button onclick="window.location.href='<?php echo base_url('petugas/tambah_petugas'); ?>'" class="btn btn-primary">Tambah Data</button><br></br>
        <table border="3" class="table table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($User as $index => $user) : ?>
                    <tr>
                        <td><?php echo $index +1; ?></td>
                        <td><?php echo $user->nama_petugas; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->password; ?></td>

                        <td>
                            <a href="<?php echo base_url('petugas/delete/' . $user->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>

</html>