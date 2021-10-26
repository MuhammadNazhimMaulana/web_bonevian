<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>

<main>
    <div class="cards">
        <div class="card-single">
            <div>
                <h1>54</h1>
                <span>Pelanggan</span>
            </div>
            <div>
                <span class="las la-users"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>79</h1>
                <span>Projek</span>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>124</h1>
                <span>Pesanan</span>
            </div>
            <div>
                <span class="las la-shopping-bag"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>$12000</h1>
                <span>Pendapatan</span>
            </div>
            <div>
                <span class="lab la-google-wallet"></span>
            </div>
        </div>

    </div>

    <div class="recent-grid">
        <div class="projects">
            <div class="kartu">
                <div class="kartu-header flex justify-content-center">
                    <h2>Postingan Admin</h2>
                </div>

                <div class="kartu-body">
                    <canvas id="postingan" width="250" height="250"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Chart JS -->
<script src="<?= base_url('ChartJs/Chart.min.js') ?>"></script>
<script>
    // Chart Untuk postingan
    var kategori_postingan = document.getElementById('postingan');
    var data_postingan = [];
    var label_postingan = [];

    <?php foreach ($post_per_user->getResult() as $key => $value) : ?>
        data_postingan.push(<?= $value->jumlah ?>);
        label_postingan.push('<?= $value->user ?>');
    <?php endforeach ?>

    var data_post_per_user = {
        datasets: [{
            data: data_postingan,
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
            ],
        }],
        labels: label_postingan,
    }

    var chart_postingan = new Chart(kategori_postingan, {
        type: 'doughnut',
        data: data_post_per_user,
        options: {
                maintainAspectRatio: false,
            }
    });

</script>

<?= $this->endSection() ?>
