<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function index()
    {
        $this->load->model('dosen_model', 'dosen');

        $data['list_dosen'] = $this->dosen->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $data['dsn'] = $this->dosen->findById($_nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }

    public function create_dosen()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create_dosen');
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("dosen_model","dosen");

        $_nidn = $this->input->post('nidn');
        $_nama= $this->input->post('nama');
        $_gender = $this->input->post('jk');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi = $this->input->post('prodi');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_dsn[]=$_nidn;// ? 1
        $data_dsn[]=$_nama;// ? 2
        $data_dsn[]=$_gender;// ? 3
        $data_dsn[]=$_tgl_lahir;// ? 4
        $data_dsn[]=$_tmp_lahir;// ? 5
        $data_dsn[]=$_pendidikan_akhir;// ? 6
        $data_dsn[]=$_prodi;// ? 7

        if(isset($_idedit)){
            //update data lama
            $data_dsn[]=$_idedit; // ? 8
            $this->dosen->update($data_dsn);  
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->dosen->save($data_dsn);   
        }
        
        redirect(base_url().'index.php/dosen/view?id='.$_nidn, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("dosen_model","dosen");
        $dsnedit = $this->dosen->findById($_id);
        $data['dsnedit']=$dsnedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("dosen_model","dosen");
        $this->dosen->delete($_id);
        redirect(base_url().'index.php/dosen', 'refresh');
    }
}
