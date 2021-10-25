<?= $this->extend('Template/user_tmp') ?>
<?= $this->section('user') ?>
<div class="kontainer">
    <div class="left">
        <div class="big-title">
            <h1>My Projects Web</h1>
        </div>
        <p class="text">
            If you are curious with what I have made you could click the button below for more information
        </p>
        <div class="cta">
            <a href="#" class="tombol">View Projects</a>
        </div>
    </div>
    
    <div class="right">
        <img src="<?= base_url('img/Bonevian.png') ?>" class="gambar-kanan">
    </div>
</div>

<?= $this->endSection() ?>
