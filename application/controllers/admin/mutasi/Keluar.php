<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("keluar_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["penduduks"] = $this->keluar_model->getAll();
        $this->load->view("admin/mutasi/keluar/list_mutasi", $data);
    }

    public function tambah()
    {
        $keluar = $this->keluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($keluar->rules());

        if ($validation->run()) {
            $keluar->keluar();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/mutasi/keluar/tambah_mutasi");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/mutasi/keluar');
       
        $penduduk = $this->keluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();
        
        $this->load->view("admin/mutasi/keluar/edit_mutasi", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/mutasi/keluar');
       
        $penduduk = $this->keluar_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();
        
        $this->load->view("admin/mutasi/keluar/lihat_mutasi", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->keluar_model->search_nik($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => "$row->nik - $row->nama_lengkap",
                    'tgl_keluar' => $row->tgl_keluar,
                    'nama_lengkap' => $row->nama_lengkap,
                    'tempat_lahir' => $row->tempat_lahir,
                    'tgl_lahir' => $row->tgl_lahir,
                    'value' => $row->nik
                 );
                echo json_encode($arr_result);
            }
        }
    }
}