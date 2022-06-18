<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data = [];
        $this->load->view('login', $data);
    }

    public function registrasi()
    {
        $data = [];
        $this->load->view('register', $data);
    }

    public function otentikasi()
    {
        $this->load->model('user_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $user = $this->user->login($_username, $_password);
        if (isset($user)) { //jika user terdaftar
            $this->session->set_userdata('USERNAME', $user->username);
            $this->session->set_userdata('ROLE', $user->role);
            $this->session->set_userdata('USER', $user);
            redirect(base_url()."index.php/mahasiswa");
        }
        else{ //jika user tidak terdaftar atau password salah
            redirect(base_url()."index.php/login?status=f");
        }
    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url()."index.php/dashboard");
    }

    public function register(){
        $this->load->model('user_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');

        $data_usr[]=$_username;
        $data_usr[]=$_password;
        $data_usr[]=$_email;
        $data_usr[]=$_role;

        $this->user->registrasi($data_usr);

        redirect(base_url()."index.php/login");
    }
}
