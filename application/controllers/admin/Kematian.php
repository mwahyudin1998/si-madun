<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kematian_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["kematians"] = $this->kematian_model->getAll();
        $this->load->view("admin/kematian/list_kematian", $data);
    }

    public function tambah()
    {
        $kematian = $this->kematian_model;
        $validation = $this->form_validation;
        $validation->set_rules($kematian->rules());

        if ($validation->run()) {
            $kematian->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kematian/tambah_kematian");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kematian');
       
        $kematian = $this->kematian_model;
        $validation = $this->form_validation;
        $validation->set_rules($kematian->rules());

        if ($validation->run()) {
            $kematian->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kematians"] = $kematian->getById($id);
        if (!$data["kematians"]) show_404();
        
        $this->load->view("admin/kematian/edit_kematian", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/kematian');
       
        $kematian = $this->kematian_model;
        $validation = $this->form_validation;
        $validation->set_rules($kematian->rules());

        if ($validation->run()) {
            $kematian->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kematian"] = $kematian->getById($id);
        if (!$data["kematian"]) show_404();
        
        $this->load->view("admin/kematian/lihat_kematian", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kematian_model->delete($id)) {
            redirect(site_url('admin/kematian'));
        }
    }

    public function print($id = null)
    {
        $kematian = $this->kematian_model->getById($id);
        if (!isset($id)) redirect('admin/kematian');

        $kematian = $this->kematian_model;
        $data["kematians"] = $kematian->getById($id);
        if (!$data["kematians"]) show_404();

        $this->load->view("admin/kematian/print_kematian", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->kematian_model->search_nik($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => "$row->nik - $row->nama_lengkap",
                    'nama_lengkap' => $row->nama_lengkap,
                    'jenis_kelamin' => $row->jenis_kelamin,
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