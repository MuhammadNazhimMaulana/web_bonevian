<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>
<?php
    
    $id_pengguna = [
        'name' => 'id_pengguna',
        'id' => 'id_pengguna',
        'options' => $daftar_pengguna,
        'class' => 'form-control'
    ];
  
    $judul_post = [
        'name' => 'judul_post',
        'id' => 'judul_post',
        'value' => null,
        'class' => 'form-control'
    ];
  
    $isi_post = [
        'name' => 'isi_post',
        'id' => 'isi_post',
        'value' => null,
        'class' => 'form-control'
    ];
  
    $ringkasan_post = [
        'name' => 'ringkasan_post',
        'id' => 'ringkasan_post',
        'value' => null,
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
                    <h1>Form Tambah Harga</h1>
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
                    <?= form_open_multipart('Admin/Posts_C/create') ?>

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
                            <?= form_label("Ringkasan Postingan", "ringkasan_post") ?>
                            <?= form_input($ringkasan_post) ?>
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