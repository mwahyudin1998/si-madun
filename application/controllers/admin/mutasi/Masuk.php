<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("masuk_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["penduduks"] = $this->masuk_model->getAll();
        $this->load->view("admin/mutasi/masuk/list_mutasi", $data);
    }

    public function tambah()
    {
        $masuk = $this->masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($masuk->rules());

        if ($validation->run()) {
            $masuk->masuk();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/mutasi/masuk/tambah_mutasi");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/mutasi/masuk');
       
        $penduduk = $this->masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();
        
        $this->load->view("admin/mutasi/masuk/edit_mutasi", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/mutasi/masuk');
       
        $penduduk = $this->masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();
        
        $this->load->view("admin/mutasi/masuk/lihat_mutasi", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->penduduk_model->delete($id)) {
            redirect(site_url('admin/penduduk'));
        }
    }
}