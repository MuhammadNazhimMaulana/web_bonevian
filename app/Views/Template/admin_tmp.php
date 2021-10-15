<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Link line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- Link custom css -->
    <link rel="stylesheet" href="<?= base_url('css/admin.css')?>">
    
</head>
<body>

    <!-- Sidebar -->
    <?= $this->include('Template/Header/side_admin') ?>
    
    <div class="main-content">
        <!-- Header -->
        <?= $this->include('Template/Header/header_admin') ?>

        <!-- Awal isi Admin -->
        <?= $this->renderSection('admin') ?>
        <!-- Akhir isi Admin -->
    </div>
    

    <!-- Link JS Bootstrap -->
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>