<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar_model extends CI_Model
{
    private $_table = "penduduks";

    //public $id_penduduk;
    public $tgl_keluar;

    public function rules()
    {
        return [
            ['field' => 'tgl_keluar',
            'label' => ' ',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["status_penduduk" => 'keluar'])->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row();
    }

    public function keluar()
    {
        $post = $this->input->post();
        $this->tgl_keluar = $post["tgl_keluar"];
        $this->status_penduduk = "keluar";
        return $this->db->update($this->_table, $this, array('nik' => $post['nik']));
    }

    public function update()
    {
        $post = $this->input->post();
        //$this->id_penduduk = uniqid();
        $this->tgl_keluar = $post["tgl_keluar"];
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->status_penduduk = $post["status_penduduk"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('nik' => $post['id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/penduduk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nik;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        //print_r($this->upload->display_errors());
        return "default.jpg";
    }

    function search_nik($title){
        $this->db->like('nik', $title , 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('penduduks')->result();
    }
}