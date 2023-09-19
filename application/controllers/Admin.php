<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        if ($this->session->userdata('logged_in') != 'login') {
            redirect(base_url() . 'auth');
        }
    }

    public function index()
    {
        $this->load->view('data/dashboard');
    }

    public function siswa()
    {
        $data['result'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('siswa/siswa', $data);
    }

    public function add_siswa()
    {
        $this->load->view('siswa/tambah_siswa');
    }

    public function up_siswa($id)
    {
        $data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('siswa/update_siswa', $data);
    }

    public function aksi_add_siswa()
    {
        $data = [
            'nama' => $this->input->post('nama_lengkap'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'id_kelas' => $this->input->post('id_kelas'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
        ];
        $this->m_model->tambah_data('siswa', $data);
        redirect(base_url('admin/siswa'));
    }
    public function aksi_up_siswa()
    {
        $data = array(
            'nama' => $this->input->post('nama_lengkap'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'id_kelas' => $this->input->post('id_kelas'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
        );
        $res = $this->m_model->up_data('siswa', $data, array('id_siswa' => $this->input->post('id_siswa')));
        if ($res) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/siswa'));
        } else {
            $this->session->set_flashdata('error', 'gagal...');
            redirect(base_url('admin/siswa/up_siswa/' . $this->input->post('id_siswa')));
        }
    }
    public function delete_siswa($id)
    {
        $this->m_model->delete('siswa', 'id_siswa', $id);
        redirect(base_url('admin/siswa'));
    }

    // guru
    public function guru()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('guru/guru', $data);
    }

    public function add_guru()
    {
        $this->load->view('guru/tambah_guru');
    }

    public function up_guru($id)
    {
        $data['guru'] = $this->m_model->get_by_id('guru', 'id_guru', $id)->result();
        $this->load->view('guru/update_guru', $data);
    }

    public function aksi_add_guru()
    {
        $data = [
            'nama_guru' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'id_mapel' => $this->input->post('id_mapel'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        ];
        $this->m_model->tambah_data('guru', $data);
        redirect(base_url('admin/guru'));
    }
    public function aksi_up_guru()
    {
        $data = array(
            'nama_guru' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'id_mapel' => $this->input->post('id_mapel'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        );
        $res = $this->m_model->up_data('guru', $data, array('id_guru' => $this->input->post('id_guru')));
        if ($res) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/guru'));
        } else {
            $this->session->set_flashdata('error', 'gagal...');
            redirect(base_url('admin/guru/up_guru/' . $this->input->post('id_guru')));
        }
    }

    public function delete_guru($id)
    {
        $this->m_model->delete('guru', 'id_guru', $id);
        redirect(base_url('admin/guru'));
    }
    // guru

    // mapel
    public function mapel()
    {
        $data['mapel'] = $this->m_model->get_data('mapel')->result();
        $this->load->view('mapel/mapel', $data);
    }

    public function add_mapel()
    {
        $this->load->view('mapel/tambah_mapel');
    }

    public function up_mapel($id)
    {
        $data['mapel'] = $this->m_model->get_by_id('mapel', 'id_mapel', $id)->result();
        $this->load->view('mapel/update_mapel', $data);
    }

    public function aksi_add_mapel()
    {
        $data = [
            'nama_mapel' => $this->input->post('mapel'),
        ];
        $this->m_model->tambah_data('mapel', $data);
        redirect(base_url('admin/mapel'));
    }
    public function aksi_up_mapel()
    {
        $data = array(
            'nama_mapel' => $this->input->post('mapel'),
        );
        $res = $this->m_model->up_data('mapel', $data, array('id_mapel' => $this->input->post('id_mapel')));
        if ($res) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/mapel'));
        } else {
            $this->session->set_flashdata('error', 'gagal...');
            redirect(base_url('admin/mapel/up_mapel/' . $this->input->post('id_mapel')));
        }
    }

    public function delete_mapel($id)
    {
        $this->m_model->delete('mapel', 'id_mapel', $id);
        redirect(base_url('admin/mapel'));
    }
    // mapel
}
