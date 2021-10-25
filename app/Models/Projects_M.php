<?php

namespace App\Models;

use CodeIgniter\Model;

class Projects_M extends Model
{
    protected $table         = 'tbl_postingan';
    protected $primaryKey    = 'id_postingan';
    protected $allowedFields = ['id_pengguna','judul_post', 'isi_post', 'link_post', 'foto_post', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Projects_E';
    protected $useTimestamps = true;
}