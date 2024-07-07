<?php
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $user = $this->User_model->login($username, $password);
    
        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);
            $this->session->set_userdata('logged_in', TRUE);

            //$this->session->set_userdata('user_id', $user->id);
            redirect('Beranda');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('login');
        }
    }
    
    

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        //$this->session->unset_userdata('user_id');
        redirect('login');
    }
}
?>
