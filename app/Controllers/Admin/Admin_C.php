<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Pengguna_M;
use App\Models\Projects_M;
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
        $model_pengguna = new Pengguna_M();
        $model_projek = new Projects_M();

        $post_per_user = $model_projek->select('COUNT(tbl_postingan.id_postingan) AS jumlah, tbl_pengguna.username AS user')
            ->join('tbl_pengguna', 'tbl_postingan.id_pengguna=tbl_pengguna.id_pengguna')
            ->groupBy('tbl_postingan.id_pengguna')
            ->get();

        $data_admin = [
            'title' => 'Dashboard Admin',
            "post_per_user" => $post_per_user,
        ];

        return view('Admin_View/dashboard_home', $data_admin);
    }

    public function profile()
    {
        $model = new Pengguna_M();

        $username = $this->session->get('username');

        $pengguna = $model->where('tbl_pengguna.username', $username)->first();

        $data_admin = [
            'title' => 'Profil Admin',
            'pengguna' => $pengguna
        ];

        return view('Admin_View/Profile_Admin/profile_admin', $data_admin);
    }

    public function update_profile()
    {
        $id_pengguna = $this->request->uri->getSegment(4);

        $model = new Pengguna_M();

        if ($this->request->getPost()) {
            $data_pengguna = $this->request->getPost();
            $this->validation->run($data_pengguna, 'update_profile');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $pengguna = new Pengguna_E();
               $pengguna->id_pengguna = $id_pengguna;
               $pengguna->fill($data_pengguna);

                //Input Harga
                if ($this->request->getFile('foto_pengguna')->isValid()) {
                    $pengguna->foto_pengguna = $this->request->getFile('foto_pengguna');
                }

               $pengguna->updated_at = date("Y-m-d H:i:s");

                $model->save($pengguna);

                $segments = ['Admin', 'profile'];

                return redirect()->to(site_url($segments));
            }
        }
    }


}
