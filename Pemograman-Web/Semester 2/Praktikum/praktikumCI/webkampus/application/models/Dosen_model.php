<?php
class Dosen_model extends CI_Model
{
    private $table = 'dosen';

    public function getAll()
    {
        //SELECT * FROM dosen
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        // SELECT * FROM dosen WHERE nidn=$id;
        $this->db->where('nidn', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        // INSERT INTO dosen (nidn,nama,gender,tgl_lahir,tmp_lahir,pendidikan_akhir)
        // VALUES ('0213122234','Ahmad Rio','L','1976-05-04','Jakarta', 'M.Si);
        $sql = "INSERT INTO dosen 
        (nidn,nama,gender,tgl_lahir,tmp_lahir,pendidikan_akhir, prodi_kode)
            VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data)
    {
        // UPDATE
        $sql = "UPDATE dosen SET nidn=?,nama=?,gender=?,tgl_lahir=?,tmp_lahir=?,
        pendidikan_akhir=?, prodi_kode=? WHERE nidn=?";
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        // DELETE FROM dosen WHERE nidn=$id;
        $sql = 'delete from dosen where nidn=?';
        $this->db->query($sql, [$id]);
    }
}

?>