<?php
class Prodi_model extends CI_Model{
    private $tabel = 'prodi';

    public function getALL(){
        $query = $this->db->get($this->tabel);
        return $query->result();
    }

    public function findByid($id){
        $this->db->where('kode', $id);

        $query = $this->db->get($this->tabel);
        return $query->row();
    }


}

?>