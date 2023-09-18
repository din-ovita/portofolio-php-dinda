<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        // if ($this->session->userdata('logged_in') != 'login') {
        //     redirect(base_url() . 'auth');
        // }
    }

    public function index()
    {
        $this->load->view('data/dashboard');
    }

    public function siswa()
    {
        $data['result'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('data/siswa', $data);
    }
}
