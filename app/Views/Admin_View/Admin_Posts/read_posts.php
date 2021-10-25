<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>

<main>
<div class="grid-read">
        <div class="projects">
            <div class="kartu">
                <div class="kartu-header">
                    <h2>Daftar Postingan</h2>

                    <button><a href="<?= base_url('Admin/projects/create') ?>">Tambah Data</a></button>
                </div>

                <div class="kartu-body">
                    <div class="table-responsive text-center">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Penulis</td>
                                    <td>Judul</td>
                                    <td>Isi</td>
                                    <td>Ringkasan</td>
                                    <td>Status</td>
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
                                        <td><?= $posts->link_post ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/projects/view/' . $posts->id_postingan) ?>" class="btn btn-primary me-1">View</a>
                                            <a href="<?= base_url('Admin/projects/update/' . $posts->id_postingan) ?>" class="btn btn-success me-1">Update</a>
                                            <a href="#modalDelete<?= $posts->id_postingan ?>" data-bs-toggle="modal" onclick="" class="btn btn-danger">Delete</a>
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
            <div class="modal fade" id="modalDelete<?= $posts->id_postingan ?>" tabindex="-1" data-bs-backdrop="static">
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
                                <button class="btn btn-danger"><a href="<?= base_url('Admin/projects/delete/' . $posts->id_postingan) ?>">Delete</a></button>
                            </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

<?= $this->endSection() ?>
