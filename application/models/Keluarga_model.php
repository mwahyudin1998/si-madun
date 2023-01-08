<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluarga_model extends CI_Model
{
    private $_table = "penduduks";

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["is_kepala_keluarga" => 1])->result();
    }

    public function jumlahKeluarga()
    {
        return $this->db->get_where($this->_table, ["is_kepala_keluarga" => 1])->num_rows();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_kk" => $id])->result();
    }

}