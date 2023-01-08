<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pindah_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["penduduks"] = $this->pindah_model->getAll();
        $this->load->view("admin/pindah/tambah_pindah", $data);
    }

    public function edit()
    {
        $penduduk = $this->pindah_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/pindah/tambah_pindah");
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->pindah_model->search_nik($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => "$row->nik - $row->nama_lengkap",
                    'nama_lengkap' => $row->nama_lengkap,
                    'tempat_lahir' => $row->tempat_lahir,
                    'tgl_lahir' => $row->tgl_lahir,
                    'alamat' => $row->alamat,
                    'rt' => $row->rt,
                    'rw' => $row->rw,
                    'value' => $row->nik
                 );
                echo json_encode($arr_result);
            }
        }
    }
}