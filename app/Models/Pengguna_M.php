<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna_M extends Model
{
    protected $table         = 'tbl_pengguna';
    protected $primaryKey    = 'id_pengguna';
    protected $allowedFields = ['username','nama_lengkap', 'tingkat', 'alamat', 'password', 'usia', 'foto_pengguna', 'tgl_masuk', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Pengguna_E';
    protected $useTimestamps = true;
}