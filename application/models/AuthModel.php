<?php
class AuthModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function cek_user($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }

    function cekLoginAdmin()
    {
        if (empty($this->session->userdata('is_login'))) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebihdahulu!');
            redirect('/');
        } elseif ($this->session->userdata('role') == 'Supervisor') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('supervisor');
        } elseif ($this->session->userdata('role') == 'Manager') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('manager');
        } elseif ($this->session->userdata('role') == 'User') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('user');
        }
    }
    function cekLoginSupervisor()
    {
        if (empty($this->session->userdata('is_login'))) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebihdahulu!');
            redirect('/');
        } elseif ($this->session->userdata('role') == 'Admin') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('admin');
        } elseif ($this->session->userdata('role') == 'Manager') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('manager');
        } elseif ($this->session->userdata('role') == 'User') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('user');
        }
    }

    function cekLoginManager()
    {
        if (empty($this->session->userdata('is_login'))) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebihdahulu!');
            redirect('/');
        } elseif ($this->session->userdata('role') == 'Admin') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('admin');
        } elseif ($this->session->userdata('role') == 'Supervisor') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('supervisor');
        } elseif ($this->session->userdata('role') == 'User') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('user');
        }
    }

    function cekLoginUser()
    {
        if (empty($this->session->userdata('is_login'))) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebihdahulu!');
            redirect('/');
        } elseif ($this->session->userdata('role') == 'Admin') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('admin');
        } elseif ($this->session->userdata('role') == 'Manager') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('manager');
        } elseif ($this->session->userdata('role') == 'Supervisor') {
            $this->session->set_flashdata('error', 'Bukan Hak Akses Anda!');
            redirect('supervisor');
        }
    }
}
