<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    private $_table = "surats";

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["kode_surat"])->result();
    }

    public function idDomisili()
    {
        return $this->db->get_where($this->_table, ["kode_surat" => "SKD"])->result();
    }

    public function jumlahKeluarga()
    {
        return $this->db->get_where($this->_table, ["is_kepala_keluarga" => 1])->num_rows();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->result();
    }

}