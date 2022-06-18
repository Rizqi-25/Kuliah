<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller{

    public function index(){

        $this->load->model('Prodi_model', 'prodi');
        $list_prodi = $this->prodi->getALL();
        $data['list_prodi'] = $list_prodi;
        

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/footer');
    }

}