<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Pengguna_M;
use App\Entities\Projects_E;
use App\Models\Projects_M;

class Posts_C extends BaseController
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

    public function read()
    {
        $model = new Projects_M();

        $data = [
            'data_pengguna' => $model->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_postingan.id_pengguna')->paginate(5, 'postingan'),
            'pager' => $model->pager,
            'title' => 'Daftar Postingan',
        ];

        return view('Admin_View/Admin_Posts/read_posts', $data);
    }

    public function view()
    {
        // Dapatkan Id dari segmen
        $id_postingan = $this->request->uri->getSegment(4);

        $model = new Projects_M();

        $postingan = $model->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_postingan.id_pengguna')->where('tbl_postingan.id_postingan', $id_postingan)->first();

        // Data yang akan dikirim ke view specific
        $data = [
            "posts" =>$postingan,
            "title" => 'Satu Postingan'
        ];

        return view('Admin_View/Admin_Posts/view_specific_post', $data);
    }

    public function create()
    {
        // Dapatkan Semua data
        $model_pengguna = new Pengguna_M();
        $pengguna = $model_pengguna->findAll();
        $list_pengguna = [];

        // Buat looping
        foreach ($pengguna as $users) {
            $list_pengguna[$users->id_pengguna] = $users->username;
        }

        $data_pengguna = [
            "title" => 'Tambah Postingan',
            'daftar_pengguna' => $list_pengguna,
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'post');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Projects_M();

               $projects = new Projects_E();
                
               // Fill untuk assign value data kecuali gambar
               $projects->fill($data);

               //Input Harga
               $projects->foto_post = $this->request->getFile('foto_post');
               $projects->created_at = date("Y-m-d H:i:s");

                $model->save($projects);

                $id_postingan = $model->insertID();

                $segments = ['Admin', 'Posts_C', 'view', $id_postingan];

                // Akan redirect ke /Admin/Rak_A/view/$id_pengguna
                return redirect()->to(site_url($segments));
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/Admin_Posts/insert_posts', $data_pengguna);
    }

    public function update()
    {
        $id_postingan = $this->request->uri->getSegment(4);

        $model = new Projects_M();

        $postingan = $model->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_postingan.id_pengguna')->where('tbl_postingan.id_postingan', $id_postingan)->first();
        
        // Dapatkan Semua data
        $model_pengguna = new Pengguna_M();
        $pengguna = $model_pengguna->findAll();
        $list_pengguna = [];

        // Buat looping
        foreach ($pengguna as $users) {
            $list_pengguna[$users->id_pengguna] = $users->username;
        }

        $data = [
            'projects' =>$postingan,
            "title" => 'harga',
            'daftar_pengguna' => $list_pengguna,
        ];

        if ($this->request->getPost()) {
            $data_pengguna = $this->request->getPost();
            $this->validation->run($data_pengguna, 'update_post');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $projects = new Projects_E();
               $projects->id_postingan = $id_postingan;
               $projects->fill($data_pengguna);

                //Input Harga
                if ($this->request->getFile('foto_post')->isValid()) {
                    $projects->foto_post = $this->request->getFile('foto_post');
                }

               $projects->updated_at = date("Y-m-d H:i:s");

                $model->save($projects);

                $segments = ['Admin', 'Posts_C', 'view', $id_postingan];

                return redirect()->to(site_url($segments));
            }
        }

        return view('Admin_View/Admin_Posts/update_post', $data);
    }

    public function delete()
    {
        $id_postingan = $this->request->uri->getSegment(4);

        $model = new Projects_M();

        $delete = $model->delete($id_postingan);

        return redirect()->to(site_url('Admin/Posts_C/read'));
    }

}
