<?= $this->extend('Template/admin_tmp') ?>
<?= $this->section('admin') ?>
<?php
    
    $id_pengguna = [
        'name' => 'id_pengguna',
        'id' => 'id_pengguna',
        'readonly' => true,
        'value' => $pengguna->id_pengguna,
        'class' => 'form-control'
    ];
  
    $username = [
        'name' => 'username',
        'id' => 'username',
        'readonly' => true,
        'value' => $pengguna->username,
        'class' => 'form-control'
    ];
  
    $nama_lengkap = [
        'name' => 'nama_lengkap',
        'id' => 'nama_lengkap',
        'value' => $pengguna->nama_lengkap,
        'class' => 'form-control'
    ];
  
    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'readonly' => true,
        'value' => $pengguna->alamat,
        'class' => 'form-control'
    ];
  
    $usia = [
        'name' => 'usia',
        'id' => 'usia',
        'readonly' => true,
        'value' => $pengguna->usia,
        'class' => 'form-control'
    ];
  
    $foto_pengguna = [
        'name' => 'foto_pengguna',
        'id' => 'foto_pengguna',
        'readonly' => true,
        'value' => null,
        'type' => 'hidden',
        'class' => 'form-control'
    ];
    
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Ubah Data',
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
                <div class="kartu-header justify-content-center">
                    <h2>Profile Admin</h2>
                </div>

                <div class="kartu-body">

                    <!-- Membuat Form dengan Form Helper -->
                    <?= form_open_multipart('Admin/Admin_C/update_profile/'. $pengguna->id_pengguna) ?>
                    <div class="form-group mt-3">
                            <?= form_label("Nama Penulis", "username") ?>
                            <?= form_input($username) ?>
                    </div>
                    <div class="form-group mt-3">
                            <?= form_label("Nama Lengkap", "nama_lengkap") ?>
                            <?= form_input($nama_lengkap) ?>
                    </div>
                    <div class="form-group mt-3">
                            <?= form_label("Alamat", "alamat") ?>
                            <?= form_input($alamat) ?>
                    </div>
                    <div class="form-group mt-3">
                            <?= form_label("Usia", "usia") ?>
                            <?= form_input($usia) ?>
                    </div>
                    
                    <div class="form-group mt-3">
                        <?= form_label("Foto Pengguna", "foto_pengguna") ?>

                        <!-- Form Upload karena mau upload foto_pengguna -->
                        <?= form_upload($foto_pengguna) ?>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <!-- Form submit terkait submit-->
                        <?= form_submit($submit) ?>
                    </div>
                    <?= form_close() ?>

                </div>
            </div>
        </div>
</main>


<?= $this->endSection() ?>
