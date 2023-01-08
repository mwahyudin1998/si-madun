<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sku_model extends CI_Model
{
    private $_table = "surats";

    public $kode_surat = "SKU";
    public $nik;
    public $nama_lengkap;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tgl_lahir;
    public $agama;
    public $status_kawin;
    public $alamat;
    public $rt;
    public $rw;
    public $keterangan;

    public function rules()
    {
        return [
            [
                'field' => 'nik',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_lengkap',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_kelamin',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'tempat_lahir',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'tgl_lahir',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'agama',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'status_kawin',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'rt',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'rw',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'keterangan',
                'label' => ' ',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["kode_surat" => "SKU"])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_surat" => $id])->row();
    }

    private function buat_kode()
    {

        $this->db->select('RIGHT(surats.id_surat,4) as kode', FALSE);
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surats');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        return $kodemax;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_surat = $this->buat_kode();
        $this->jenis_surat = $post["jenis_surat"];
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->status_kawin = $post["status_kawin"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //$this->id_penduduk = uniqid();
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->agama = $post["agama"];
        $this->status_kawin = $post["status_kawin"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->keterangan = $post["keterangan"];

        return $this->db->update($this->_table, $this, array('id_surat' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_surat" => $id));
    }

    function search_nik($title){
        $this->db->like('nik', $title , 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('penduduks')->result();
    }
}
