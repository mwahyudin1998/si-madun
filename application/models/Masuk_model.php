<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk_model extends CI_Model
{
    private $_table = "penduduks";

    //public $id_penduduk;
    public $tgl_masuk;
    public $no_kk;
    public $nik;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tgl_lahir;
    public $agama;
    public $status_kawin;
    public $jenis_kelamin;
    public $status_keluarga;
    public $is_kepala_keluarga;
    public $pendidikan;
    public $pekerjaan;
    public $alamat;
    public $rt;
    public $rw;
    public $no_telp;
    public $image;
    public $status_penduduk = 'sementara';

    public function rules()
    {
        return [
            ['field' => 'tgl_masuk',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'no_kk',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'nik',
            'label' => ' ',
            'rules' => 'required'],
            
            ['field' => 'nama_lengkap',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required'],

            ['field' => 'status_kawin',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'status_keluarga',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'is_kepala_keluarga',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'rt',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'rw',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => ' ',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["status_penduduk" => 'sementara'])->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row();
    }

    public function masuk()
    {
        $post = $this->input->post();
        //$this->id_penduduk = uniqid();
        $this->tgl_masuk = $post["tgl_masuk"];
        $this->no_kk = $post["no_kk"];
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->status_kawin = $post["status_kawin"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status_keluarga = $post["status_keluarga"];
        $this->is_kepala_keluarga = $post["is_kepala_keluarga"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->no_telp = $post["no_telp"];
        $this->status_penduduk = 'Sementara';
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //$this->id_penduduk = uniqid();
        $this->tgl_masuk = $post["tgl_masuk"];
        $this->no_kk = $post["no_kk"];
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->status_kawin = $post["status_kawin"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status_keluarga = $post["status_keluarga"];
        $this->is_kepala_keluarga = $post["is_kepala_keluarga"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->no_telp = $post["no_telp"];
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

    private function _deleteImage($id)
    {
        $penduduks = $this->getById($id);
        if ($penduduks->image != "default.jpg") {
            $filename = explode(".", $penduduks->image)[0];
            return array_map('unlink', glob(FCPATH."upload/penduduk/$filename.*"));
        }
    }
}