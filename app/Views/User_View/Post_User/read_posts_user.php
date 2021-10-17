<?= $this->extend('Template/user_tmp') ?>
<?= $this->section('user') ?>
<div class="container">
    <h1 class="mb-5">Daftar Projek</h1>
    <div class="full">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Projek</th>
                    <th scope="col">Ringkasan</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    <?php foreach ($data_pengguna as $index => $posts) :?>
                        <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $posts->judul_post ?></td>
                        <td><?= $posts->ringkasan_post ?></td>
                        <td>@mdo</td>
                        <td><a href="<?= base_url('Umum/projects/view/' . $posts->id_postingan) ?>" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                    <?php endforeach ?>
                </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
