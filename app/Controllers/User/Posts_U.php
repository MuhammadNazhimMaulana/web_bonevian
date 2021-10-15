<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\Projects_M;
use App\Entities\Projects_E;

class Posts_U extends BaseController
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

        return view('User_View/dashboard_user', $data_user);
    }

}
