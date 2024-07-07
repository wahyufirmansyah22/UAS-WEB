<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="<?php echo base_url(); ?>assets/bootswatch-5/dist/united/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/bootswatch-5/docs/_assets/img/logo.svg'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">My Website</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item <?php echo ($active_menu == 'home') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url('beranda'); ?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($active_menu == 'tentang') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url('barang/create'); ?>">Pemesanan</a>
                    </li>
                    <li class="nav-item <?php echo ($active_menu == 'data_petugas') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url('beranda/data_petugas'); ?>">Petugas</a>
                    </li>
                </ul>
                </ul>
            </div>
            <a href="<?php echo site_url('login/logout'); ?>">Logout</a>
            <script src="<?= base_url('assets/bootswatch-5/docs/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
        </div>
    </nav>
    <div class="container mt-5">

    