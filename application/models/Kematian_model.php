<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian_model extends CI_Model
{
    private $_table = "kematians";

    public $nik;
    public $nama_lengkap;
    public $jenis_kelamin;
    public $alamat;
    public $rt;
    public $rw;
    public $tanggal_meninggal;
    public $waktu;
    public $penyebab;
    public $tempat_kematian;
    public $nama_pelapor;
    public $hubungan_pelapor;
    
    public function rules()
    {
        return [
            ['field' => 'nik',
            'label' => ' ',
            'rules' => 'required'],
            
            ['field' => 'nama_lengkap',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
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

            ['field' => 'tanggal_meninggal',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'waktu',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'penyebab',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'tempat_kematian',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'nama_pelapor',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'hubungan_pelapor',
            'label' => ' ',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik" => $id])->row();
    }

    private function buat_kode()
    {

        $this->db->select('RIGHT(kematians.id_kematian,4) as kode', FALSE);
        $this->db->order_by('id_kematian', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('kematians');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $this->id_kematian = $this->buat_kode();
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->tanggal_meninggal = $post["tanggal_meninggal"];
        $this->waktu = $post["waktu"];
        $this->penyebab = $post["penyebab"];
        $this->tempat_kematian = $post["tempat_kematian"];
        $this->nama_pelapor = $post["nama_pelapor"];
        $this->hubungan_pelapor = $post["hubungan_pelapor"];
        
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->tanggal_meninggal = $post["tanggal_meninggal"];
        $this->waktu = $post["waktu"];
        $this->penyebab = $post["penyebab"];
        $this->tempat_kematian = $post["tempat_kematian"];
        $this->nama_pelapor = $post["nama_pelapor"];
        $this->hubungan_pelapor = $post["hubungan_pelapor"];

        return $this->db->update($this->_table, $this, array('nik' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nik" => $id));
    }

    function search_nik($title){
        $this->db->like('nik', $title , 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('penduduks')->result();
    }
}