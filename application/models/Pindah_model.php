<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah_model extends CI_Model
{
    private $_table = "penduduks";

    public $alamat;
    public $rt;
    public $rw;

    public function rules()
    {
        return [
            ['field' => 'alamat',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'rt',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'rw',
            'label' => ' ',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $query = "select * from ".$this->_table." name WHERE status_penduduk=? OR status_penduduk = ?";
        return $this->db->query($query, array('sementara','tetap' ))->result();
        //return $this->db->get_where($this->_table, ["status_penduduk" => 'tetap' AND 'sementara'])->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        return $this->db->update($this->_table, $this, array('nik' => $post['id']));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        return $this->db->update($this->_table, $this, array('nik' => $post['nik']));
    }

    function search_nik($title){
        $this->db->like('nik', $title , 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('penduduks')->result();
    }
}