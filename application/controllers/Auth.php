<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
    }

    public function index()
    {
        $this->load->view('component/login');
    }

    public function register()
    {
        $this->load->view('component/register');
    }

    public function aksi_register()
    {
        $password = $this->input->post('password');
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($password),
            'role' => 'admin',
        ];
        if (strlen($password) >= 8) {
            $this->m_model->tambah_data('user', $data);
            redirect(base_url('auth'));
        } else {
            return;
        }
    }

    public function aksi_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $data = ['email' => $email];
        $query = $this->m_model->get_where('user', $data);
        $result = $query->row_array();

        if (!empty($result) && md5($password) === $result['password']) {
            $data = [
                'logged_in' => 'login',
                'email' => $result['email'],
                'username' => $result['username'],
                'role' => $result['role'],
                'id' => $result['id'],

            ];
            $this->session->set_userdata($data);
            if ($this->session->userdata('role') == 'admin') {
                redirect(base_url() . "admin");
            } else {
                redirect(base_url() . "auth");
            }
        } else {
            redirect(base_url() . "auth");
        }
    }
}
