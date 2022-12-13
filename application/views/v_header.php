<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <title>Aplikasi Klinik Codeigniter</title>

    <style>
        .footer {
            background-color: #f5f5f5;
        }
        .footer {
            padding-right: 15px;
            padding-left: 15px;
        }
        </style>
    </head>
<body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="<?= base_url(); ?>">Klinik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Master Data
                </a>
                <div class="dropdown-menu" aria-labellebody="navMaster">
                    <a class="dropdown-item" href="<?= base_url('users'); ?>">Data Users</a>
                    <a class="dropdown-item" href="<?= base_url('dokter'); ?>">Data Dokter</a>
                    <a class="dropdown-item" href="<?= base_url('pasien'); ?>">Data Pasien</a>
                    <a class="dropdown-item" href="<?= base_url('obat'); ?>">Data Obat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kunjungan');?>">Kunjungan/Berobat</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navLaporan" role="button" data-toggle="dropdown" aria-expanded="false">
                Laporan
                </a>
                <div class="dropdown-menu" aria-labellebody="navlaporan">
                    <a class="dropdown-item" href="<?= base_url('laporan/data_dokter'); ?>">Data Dokter</a>
                    <a class="dropdown-item" href="<?= base_url('laporan/data_pasien'); ?>">Data Pasien</a>
                    <a class="dropdown-item" href="<?= base_url('laporan/data_kunjungan'); ?>">Data Kunjungan</a>
                </div>
            </li>
            <li class="nav-item"dropdown>
                <a class="nav-link" href="<?= base_url('auth/logout');?>">Logout</a>
            </li>
            </ul>
        </div>
        </nav>