<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{

    public function index()
    {
        $this->load->model('mobil_model', 'mobil');

        $data['list_mobil'] = $this->mobil->getAll();
        // $data['merk'] = $this->mobil->getAllMerk();


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layout/footer');
    }
}
