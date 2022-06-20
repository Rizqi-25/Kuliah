<?php
class Mobil_model extends CI_Model
{
  private $table = 'mobil';
    private $table_merk = 'merk';

    public function getAll()
    {
        //SELECT * FROM mobil
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getAllMerk()
    {
        //SELECT * FROM merk
        $query = $this->db->get($this->table_merk);
        return $query->result();
    }

    public function findById($id)
    {
        // SELECT * FROM mobil WHERE id=$id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
