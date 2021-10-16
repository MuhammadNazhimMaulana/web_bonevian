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

    public function read()
    {
        $model = new Projects_M();

        $data = [
            'data_pengguna' => $model->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_postingan.id_pengguna')->paginate(5, 'postingan'),
            'pager' => $model->pager,
            'title' => 'Postingan',
        ];

        return view('User_View/Post_User/read_posts_user', $data);
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
            "title" => 'Postingan'
        ];

        return view('User_View/Post_User/view_specific_post_user', $data);
    }

}
