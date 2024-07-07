<?php
class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function tambah_petugas()
    { {
            $data = [
                'title' => 'Tambah Petugas',
                'active_menu' => 'tambah_petugas',
                'content' => $this->load->view('petugas/tambah_petugas', '', true)
            ];
            $this->load->view('template/template', $data);
        }
    }

    public function store()
    {
        $this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('petugas/tambah_petugas');
        } else {
            $nama_petugas = $this->input->post('nama_petugas');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password')); // Enkripsi password dengan md5

            $data = array(
                'nama_petugas' => $nama_petugas,
                'username' => $username,
                'password' => $password
            );

            if ($this->User_model->tambah_petugas($data)) {
                $this->session->set_flashdata('success', 'Data petugas berhasil ditambahkan');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan data petugas');
            }

            redirect('beranda/data_petugas');
        }
    }

    public function delete($id)
    {
        if ($this->User_model->delete_petugas($id)) {
            $this->session->set_flashdata('success', 'Data petugas berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data petugas');
        }

        redirect('beranda/data_petugas');
    }
}
