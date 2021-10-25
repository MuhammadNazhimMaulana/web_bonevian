<?= $this->extend('Template/user_tmp') ?>
<?= $this->section('user') ?>

<div class="container">
    <h1 class="mb-5 d-flex justify-content-center">Daftar Projek</h1>
    
    <div class="row row-cols-1 row-cols-md-3 g-4" style="max-width: 50rem;">
      <?php foreach ($data_pengguna as $index => $posts) :?>
        <div class="col">
            <div class="card">
            <img src="<?= base_url('img/Bonevian.png') ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $posts->judul_post ?></h5>
                <p class="card-text">This is a longer card with supporting <?= $posts->link_post ?></p>
            </div>
            </div>
        </div>
      <?php endforeach ?>
    </div>  
    
</div>

<?= $this->endSection() ?>
