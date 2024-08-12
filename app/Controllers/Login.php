<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MLogin;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {

        return view('login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // $model = new MLogin();

        // $cek_login = $model->where('email', $email)->where('password', $password)->get();
        $cek_login = false;
        if ($email == 'luthfi@gmail.co' && $password == 'asd123') {
            $cek_login = true;
        } else {
            $cek_login = false;
        }

        if ($cek_login === true) {
            $data = [
                'email' => $email,
            ];
            session()->set($data);
        } else {
            return redirect()->to(base_url('login'));
        }

        return redirect()->to(base_url());
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
