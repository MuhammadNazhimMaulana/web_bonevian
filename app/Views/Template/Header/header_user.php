<header>
    <div class="kontainer">
        <div class="logo">
            <img src="">
            <h3>Bonevian</h3>
        </div>

        <div class="links">
            <ul>
                <li><a href="<?= base_url('Umum') ?>" class="<?= $title == 'Dashboard User' ? 'tombol' : ''?>">Home</a></li>
                <li><a href="<?= base_url('Umum/projects') ?>" class="<?= $title == 'Postingan' ? 'tombol' : ''?>">Projects</a></li>
                <li><a href="<?= base_url('Umum/contact') ?>" class="<?= $title == 'Kontak' ? 'tombol' : ''?>">Contact</a></li>
            </ul>
        </div>

        <div class="overlay"></div>

        <div class="hamburger-menu">
            <div class="bar"></div>
        </div>
    </div>
</header>