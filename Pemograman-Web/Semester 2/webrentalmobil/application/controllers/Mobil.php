<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function index()
    {
        $this->load->model('mobil_model', 'mobil');

        $data['list_mobil'] = $this->mobil->getAll();
        $this->load->view('dashboard/index', $data);
    }

}
