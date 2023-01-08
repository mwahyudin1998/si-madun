<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("penduduk_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["penduduks"] = $this->penduduk_model->getAll();
        $this->load->view("admin/penduduk/list", $data);
    }

    public function tambah()
    {
        $penduduk = $this->penduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/penduduk/tambah_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/penduduk');

        $penduduk = $this->penduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();

        $this->load->view("admin/penduduk/edit_form", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/penduduk');

        $penduduk = $this->penduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["penduduks"] = $penduduk->getById($id);
        if (!$data["penduduks"]) show_404();

        $this->load->view("admin/penduduk/lihat_data", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->penduduk_model->delete($id)) {
            redirect(site_url('admin/penduduk'));
        }
    }
}
