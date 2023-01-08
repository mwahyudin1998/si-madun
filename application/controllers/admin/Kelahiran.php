<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kelahiran_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["kelahirans"] = $this->kelahiran_model->getAll();
        $this->load->view("admin/kelahiran/list_kelahiran", $data);
    }

    public function tambah()
    {
        $kelahiran = $this->kelahiran_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelahiran->rules());

        if ($validation->run()) {
            $kelahiran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kelahiran/tambah_kelahiran");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kelahiran');

        $kelahiran = $this->kelahiran_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelahiran->rules());

        if ($validation->run()) {
            $kelahiran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kelahirans"] = $kelahiran->getById($id);
        if (!$data["kelahirans"]) show_404();

        $this->load->view("admin/kelahiran/edit_kelahiran", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/kelahiran');

        $kelahiran = $this->kelahiran_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelahiran->rules());

        if ($validation->run()) {
            $kelahiran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kelahirans"] = $kelahiran->getById($id);
        if (!$data["kelahirans"]) show_404();

        $this->load->view("admin/kelahiran/lihat_kelahiran", $data);
    }

    public function print($id = null)
    {
        $kelahiran = $this->kelahiran_model->getById($id);
        if (!isset($id)) redirect('admin/kelahiran');

        $kelahiran = $this->kelahiran_model;
        $data["kelahirans"] = $kelahiran->getById($id);
        if (!$data["kelahirans"]) show_404();

        $this->load->view("admin/kelahiran/print_kelahiran", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->kelahiran_model->delete($id)) {
            redirect(site_url('admin/kelahiran'));
        }
    }
}
