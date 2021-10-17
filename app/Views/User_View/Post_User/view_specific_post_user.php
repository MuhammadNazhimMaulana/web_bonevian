<?= $this->extend('Template/user_tmp') ?>
<?= $this->section('user') ?>
<div class="container">
    <h1 class="d-flex justify-content-center">Halaman view</h1>
        <div class="full">
            <div class="kartu">
                    <div class="kartu-body">
                        <a href="<?= site_url('Umum/projects') ?>" class="btn btn-primary mb-3">Kembali ke Daftar</a>
                        <h3 class="text-center mb-5"><?= $posts->username ?></h3>
                        <p><?= $posts->judul_post ?> adalah statusnya</p>
                    </div>
                </div>
            </div>
</div>

<?= $this->endSection() ?>
