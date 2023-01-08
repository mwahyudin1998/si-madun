<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["users"] = $this->user_model->getAll();
        $res = $this->session->flashdata('res');
        if (isset($res)) {
            $data["res"] = $this->session->flashdata('res');
        }
        $this->load->view("admin/users/list", $data);
    }

    public function verify($id)
    {
        if (isset($id)) {
            $res = $this->user_model->verify($id);
            $this->session->set_flashdata('res', $res);
        }
        redirect(base_url("admin/users"));
    }

    public function unverify($id)
    {
        if (isset($id)) {
            $res = $this->user_model->unverify($id);
            $this->session->set_flashdata('res', $res);
        } 
            redirect(base_url("admin/users"));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user');

        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $user->getById($id);
        if (!$data["users"]) show_404();

        $this->load->view("admin/users/ubah_user", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->user_model->delete($id)) {
            redirect(site_url('admin/users'));
        }
    }
}
