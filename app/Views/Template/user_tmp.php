<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Link CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">  

    <!-- Link custom css -->
    <link rel="stylesheet" href="<?= base_url('css/user.css')?>">

    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<main>
    <div class="big-wrapper light">
        <img src="<?= base_url('img/shape.png') ?>" class="shape">
        <!-- Header -->
        <?= $this->include('Template/Header/header_user') ?>
        
        <!-- Awal isi Home -->
        <div class="showcase-area">
            <?= $this->renderSection('user') ?>
        </div>
        <!-- Akhir isi Home -->
        
        <!-- Footer -->
        <?= $this->include('Template/Footer/footer_user') ?>
    </div>
</main>
    

    <!-- Link JS Bootstrap -->
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Link JS Custom -->
    <script src="<?= base_url('js/main.js')?>"></script>
</body>
</html>