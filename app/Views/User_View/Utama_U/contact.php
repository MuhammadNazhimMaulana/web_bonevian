<?= $this->extend('Template/user_tmp') ?>
<?= $this->section('user') ?>
<div class="container">
    <h1 class="mb-5 d-flex justify-content-center">Hubungi Saya</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
        <img src="<?= base_url('img/FB.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="<?= base_url('img/IG.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="<?= base_url('img/Twitter.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
</div>

    <div class="full">
            <a href="https://github.com/MuhammadNazhimMaulana"><i class="fab fa-github"></i></a>
    </div>
</div>

<?= $this->endSection() ?>
