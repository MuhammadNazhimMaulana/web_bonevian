<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>
<?php
    
    $id_pengguna = [
        'name' => 'id_pengguna',
        'id' => 'id_pengguna',
        'readonly' => true,
        'options' => $daftar_pengguna,
        'selected' => $projects->id_pengguna,
        'class' => 'form-control'
    ];
  
    $judul_post = [
        'name' => 'judul_post',
        'id' => 'judul_post',
        'value' => $projects->judul_post,
        'class' => 'form-control'
    ];
  
    $isi_post = [
        'name' => 'isi_post',
        'id' => 'isi_post',
        'value' => $projects->isi_post,
        'class' => 'form-control'
    ];
  
    $link_post = [
        'name' => 'link_post',
        'id' => 'link_post',
        'value' => $projects->link_post,
        'class' => 'form-control'
    ];
  
    $foto_post = [
        'name' => 'foto_post',
        'id' => 'foto_post',
        'value' => null,
        'class' => 'form-control'
    ];
    
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit'
    ];

$session = session();
$errors = $session->getFlashdata('errors');
?>

<main>
<div class="grid-read">
        <div class="projects">
            <div class="kartu">
                <div class="kartu-header">
                    <h1>Form Update Postingan</h1>
                </div>

                <div class="kartu-body">
                    <?php if ($errors != null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <p class="mb-0">
                                <?php foreach ($errors as $err) {
                                    echo $err . '<br>';
                                }

                                ?>
                            </p>
                        </div>
                    <?php endif ?>

                    <!-- Membuat Form dengan Form Helper -->
                    <?= form_open_multipart('Admin/projects/update/'. $projects->id_postingan) ?>

                    <div class="form-group mt-3">
                            <?= form_label("Nama Penulis", "id_pengguna") ?>
                            <?= form_dropdown($id_pengguna) ?>
                    </div>

                    <div class="form-group mt-3">
                            <?= form_label("Judul Postingan", "judul_post") ?>
                            <?= form_input($judul_post) ?>
                    </div>

                    <div class="form-group mt-3">
                            <?= form_label("Isi Postingan", "isi_post") ?>
                            <?= form_textarea($isi_post) ?>
                    </div>

                    <div class="form-group mt-3">
                            <?= form_label("Ringkasan Postingan", "link_post") ?>
                            <?= form_input($link_post) ?>
                    </div>

                    <!-- Preview Gambar -->
                    <div class="text-center">
                            <img class="img-fluid mb-3 mt-3" width="50" src="<?= base_url('upload/Foto Projek/' . $projects->foto_post) ?>">
                    </div>

                    <div class="form-group mt-3">
                        <?= form_label("Foto Postingan", "foto_post") ?>

                        <!-- Form Upload karena mau upload foto_post -->
                        <?= form_upload($foto_post) ?>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                    <!-- Form submit terkait submit-->
                    <?= form_submit($submit) ?>
                    </div>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
</main>

<?= $this->endSection() ?>