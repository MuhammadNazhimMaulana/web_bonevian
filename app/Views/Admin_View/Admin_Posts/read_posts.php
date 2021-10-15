<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>

<main>
<div class="grid-read">
        <div class="projects">
            <div class="kartu">
                <div class="kartu-header">
                    <h2>Daftar Postingan</h2>

                    <button><a href="<?= site_url('Admin/Posts_C/create') ?>">Tambah Data</a></button>
                </div>

                <div class="kartu-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Penulis</td>
                                    <td>Judul</td>
                                    <td>Isi</td>
                                    <td>Ringkasan</td>
                                    <td>Satus</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($data_pengguna as $index => $posts) :?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $posts->username ?></td>
                                        <td><?= $posts->judul_post ?></td>
                                        <td><?= $posts->isi_post ?></td>
                                        <td><?= $posts->ringkasan_post ?></td>
                                        <td class="col-md-3">
                                            <a href="<?= base_url('Admin/Posts_C/view/' . $posts->id_pengguna) ?>" class="btn btn-primary">View</a>
                                            <a href="<?= base_url('Admin/Posts_C/update/' . $posts->id_pengguna) ?>" class="btn btn-success">Update</a>
                                            <a href="#modalDelete<?= $posts->id_pengguna ?>" data-bs-toggle="modal" onclick="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>

    <!-- Modal -->
    <?php foreach ($data_pengguna as $index => $posts) :?>
            <div class="modal fade" id="modalDelete<?= $posts->id_pengguna ?>" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Penghapusan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin akan menghapus data ini?</p>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-danger"><a href="<?= site_url('Admin/Posts_C/delete/' . $posts->id_pengguna) ?>">Delete</a></button>
                            </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

<?= $this->endSection() ?>
