<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelahiran_model extends CI_Model
{
    private $_table = "kelahirans";

    public $id_kelahiran;
    public $tgl_lahir;
    public $nama_bayi;
    public $jenis_kelamin;
    public $berat_bayi;
    public $panjang_bayi;
    public $nama_ayah;
    public $nama_ibu;
    public $tempat_lahir;
    public $alamat;
    public $rt;
    public $rw;

    public function rules()
    {
        return [
            ['field' => 'tgl_lahir',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'nama_bayi',
            'label' => ' ',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'berat_bayi',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'panjang_bayi',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'nama_ayah',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'nama_ibu',
            'label' => ' ',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
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
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelahiran" => $id])->row();
    }

    private function buat_kode()
    {

        $this->db->select('RIGHT(kelahirans.id_kelahiran,4) as kode', FALSE);
        $this->db->order_by('id_kelahiran', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('kelahirans');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $this->id_kelahiran = $this->buat_kode();
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->nama_bayi = $post["nama_bayi"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->berat_bayi = $post["berat_bayi"];
        $this->panjang_bayi = $post["panjang_bayi"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kelahiran = $post["id"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->nama_bayi = $post["nama_bayi"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->berat_bayi = $post["berat_bayi"];
        $this->panjang_bayi = $post["panjang_bayi"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];

        return $this->db->update($this->_table, $this, array('id_kelahiran' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kelahiran" => $id));
    }
}