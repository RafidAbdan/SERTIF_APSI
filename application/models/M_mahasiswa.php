<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    //TAMPILKAN SELURUH DATA MAHASISWA
	public function all_data()
	{
		$this->db->select('*');
        $this->db->from('tb_mahasiswa');
        return $this->db->get()->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('tb_mahasiswa', $data);
    }


    public function detail_data($id_mahasiswa)
    {
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        return $this->db->get()->row();
    }

    public function update_data($data)
    {
        $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->update('tb_mahasiswa', $data);
    }
    // {
    //     $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
    //     $this->db->update('tb_mahasiswa', $data);
    // }
    public function delete_data($id_mahasiswa)
    {
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $this->db->delete('tb_mahasiswa');
    }
}
