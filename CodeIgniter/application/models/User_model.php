<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Pastikan Anda menggunakan hashing yang sama dengan saat penyimpanan

        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            log_message('debug', 'User found: ' . print_r($user, true));
            return $user;
        } else {
            log_message('debug', 'No user found for username: ' . $username);
            return false;
        }
    }

    public function get_data()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user_by_id($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function tambah_petugas($data)
    {
        return $this->db->insert('users', $data);
    }

    public function delete_petugas($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}
