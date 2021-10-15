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
                <div class="kartu-header">
                    <h2>Projek Sebelumnya <span class="las la-arrow-right"></span></h2>

                    <button>Lihat Semua</button>
                </div>

                <div class="kartu-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Judul Projek</td>
                                    <td>Departemen</td>
                                    <td>Satus</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>UI/UX</td>
                                    <td>Tim UI</td>
                                    <td>
                                        <span class="status purple"></span>
                                        review
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengembangan Web</td>
                                    <td>Fronted</td>
                                    <td>
                                        <span class="status pink"></span>
                                        Dalam Proses
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ushop app</td>
                                    <td>Tim Mobile</td>
                                    <td>
                                        <span class="status orange"></span>
                                        Pending
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="customers">
            <div class="kartu">
                <div class="kartu-header">
                    <h3>Pelanggan Baru</h3>
    
                    <button>Lihat Semua</button>
                </div>
    
                <div class="kartu-body">
                    <div class="customer">
                        <div class="info">
                            <img src="" width="40px" height="40px">
                            <div>
                                <h4>Nama</h4>
                                <small>Jabatan</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="las la-user-circle"></span>
                            <span class="las la-comment"></span>
                            <span class="las la-phone"></span>
                        </div>
                    </div>
                </div>
            </div>
  
        </div>
    </div>
</main>

<?= $this->endSection() ?>
