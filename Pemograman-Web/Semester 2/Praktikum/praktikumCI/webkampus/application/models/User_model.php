<?php
class User_model extends CI_Model
{
    private $table = 'user';

    public function getAll()
    {
        //SELECT * FROM user
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        // SELECT * FROM user WHERE nim=$id;
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname, $pass){
        $sql = "SELECT * FROM user WHERE username=? AND password=MD5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function registrasi($data)
    {
        // Fungsi untuk registrasi user
        $sql = "INSERT INTO user 
        (username,password,email,role)
            VALUES (?,MD5(?),?,?)";
        $this->db->query($sql, $data);
    }

}