<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class General_U extends BaseController
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
        $data_user = [
            'title' => 'Dashboard User'
        ];

        return view('User_View/Utama_U/landing_page', $data_user);
    }

}
