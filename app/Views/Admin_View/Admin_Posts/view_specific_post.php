<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>

<main>
<div class="grid-read">
        <div class="projects">
            <div class="kartu">
                <div class="kartu-header">
                    <h1>Data Postingan</h1>
                </div>

                <div class="kartu-body">
                    <a href="<?= site_url('Admin/Posts_C/read') ?>" class="btn btn-primary mb-3">Kembali ke Daftar</a>
                    <h3 class="text-center mb-5"><?= $posts->username ?></h3>
                    <p><?= $posts->judul_post ?> adalah statusnya</p>
                </div>
            </div>
        </div>
</main>

<?= $this->endSection() ?>