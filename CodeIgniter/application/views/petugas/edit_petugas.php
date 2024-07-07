<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Petugas</title>
    <link href="<?php echo base_url(); ?>assets/bootswatch-5/dist/united/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Edit Data Petugas</h1>


        <?php echo validation_errors(); ?>

        <form action="<?php echo base_url('beranda/data_petugas/' . $user->id); ?>" method="post">

        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" value="<?php echo $user->nama_petugas; ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo $user->password; ?>" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo base_url('beranda/data_petugas'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
