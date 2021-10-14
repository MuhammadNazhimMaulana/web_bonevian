<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Pengguna_M;
use App\Entities\Pengguna_E;

class Admin_C extends BaseController
{
    public function __construct()
    {
        // Memanggil Helper
        helper('form');

        // Load Validasi
        $this->validation = \Config\Services::validation();

        // Load Session
        $this->session = session();
    }

    public function home()
    {
        $data_admin = [
            'title' => 'Dashboard Admin'
        ];

        return view('Admin_View/dashboard_home', $data_admin);
    }

}
