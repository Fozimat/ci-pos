<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- dataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css" />

    <title><?= $title; ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('home'); ?>">CI - POS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="<?= ($this->uri->segment(1) == 'home' ? 'nav-item active px-3' : 'nav-item px-3'); ?>">
                        <a class="nav-link" href="<?= site_url('home'); ?>">Barang</a>
                    </li>
                    <li class="<?= ($this->uri->segment(1) == 'supplier' ? 'nav-item active px-3' : 'nav-item px-3'); ?>">
                        <a class="nav-link" href="<?= site_url('supplier'); ?>">Supplier</a>
                    </li>
                    <li class="<?= ($this->uri->segment(1) == 'transaksi' ? 'nav-item active px-3' : 'nav-item px-3'); ?>">
                        <a class="nav-link" href="<?= site_url('transaksi'); ?>">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>