<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Pengguna_M;
use App\Entities\Pengguna_E;

class Authorisasi extends BaseController
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

    public function register()
    {
        $data_auth = [
            'title' => 'Register Admin'
        ];
        
        if ($this->request->getPost()) {

            // Validasi data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');

            $errors = $this->validation->getErrors();

            //Jika tidak ada error
            if (!$errors) {

                $model = new Pengguna_M();
                $user = new Pengguna_E();

                // Dapatkan data yang telah di input
                $user->fill($data);
                $user->tingkat = 1;
                $user->tgl_masuk = date("Y-m-d");
                $user->created_at = date("Y-m-d H:i:s");
                $user->foto_pengguna = $this->request->getFile('foto_pengguna');
                $user->password = $this->request->getPost('password');

                $model->save($user);

                $data_auth = [
                    'title' => 'Login Admin'
                ];

                return view('Auth_View/login_web', $data_auth);
            }

            $this->session->setFlashdata('errors', $errors);
        }

        return view('Auth_View/register_web', $data_auth);
    }

    public function login()
    {
        $data_auth = [
            'title' => 'Login Admin'
        ];

        if ($this->request->getPost()) {

            // Validasi data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');

            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('/login');
            }

            $model = new Pengguna_M();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if (password_verify($password, $user->password) == false) {

                $this->session->setFlashdata('errors', ['Password Salah']);
            } else {
                $session_data = [
                    'username' => $user->username,
                    'nama' => $user->nama_lengkap,
                    'id_user' => $user->id_user,
                    'tingkat' => $user->tingkat,
                    'isLoggedIn' => TRUE
                ];

                $this->session->set($session_data);

                return redirect()->to(site_url('Admin'));
            }
            
            $this->session->setFlashdata('errors', $errors);
            
        }

        return view('Auth_View/login_web', $data_auth);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('/login'));
    }
}
