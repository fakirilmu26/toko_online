<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/V_HeaderAuth');
            $this->load->view('auth/index');
            $this->load->view('auth/V_FooterAuth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'role_id' => $user['role'],
                    'is_login' => true
                ];

                $this->session->start($data);
                if ($user['role'] == 'admin') {
                    redirect('admin/index');
                } else {
                    redirect('user/index');
                }
            }
        }
    }

    public function logout1()
    {
        $this->session->destroy();
        redirect('auth');
        $this->session->set_flashdata('message', 'berhasil logout!');
    }

    public function register()
    {
        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            // validasi input yang masuk
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();
            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $user = new \App\Entities\User();

                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');

                $user->created_by = 0;
                $user->created_date = date("Y-m-d H:i:s");
                $userModel->save($user);
                return view('login');
            }
            //jika  tidak berhasil simpan di session
            $this->session->setFlashdata('errors', $errors);
        }
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        return view('logout');
    }
}
