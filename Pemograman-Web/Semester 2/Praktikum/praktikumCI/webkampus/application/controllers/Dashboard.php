<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
        // $data = [
        //     'nama'=>'Muhammad Rizqi',
        //     'title'=>'STT NF 2022'
        // ];
        // // $this->load->view('dashboard/index', $data);
        // $this->load->view('layout/header');
        // $this->load->view('layout/sidebar');
        $this->load->view('dashboard/index');
        // $this->load->view('layout/footer');



    }
}