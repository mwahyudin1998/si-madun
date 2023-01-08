<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("data_model");
        $this->load->model("password_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $pengaturan = $this->data_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengaturan->rules());

        if ($validation->run()) {
            $pengaturan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $pengaturan->getById($this->session->userdata('user_logged')->user_id);
        if (!$data["users"]) show_404();

        $this->load->view("pengaturan/edit_data", $data);
    }

    public function data()
    {
        $pengaturan = $this->data_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengaturan->rules());

        if ($validation->run()) {
            $pengaturan->updateData();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $pengaturan->getById($this->session->userdata('user_logged')->user_id);
        if (!$data["users"]) show_404();

        $this->load->view("pengaturan/edit_data", $data);
    }

    public function password()
    {
        $pengaturan = $this->password_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengaturan->rules());
        $post = $this->input->post();
        $data["users"] = $pengaturan->getById($this->session->userdata('user_logged')->user_id);

        if (!$data["users"]) show_404();

        if ($post) {
            if ($validation->run() == FALSE) {
                $data = array(
                    'old_password' => $post['old_password'],
                    'password' => $post['password'],
                    'confirm_password' => $post['confirm_password']
                );

                $this->load->view("pengaturan/edit_password", $data);
            } else {
                $is_password_match = password_verify($post['password'], $data['users']->password);
                if ($is_password_match) {
                    $this->session->set_flashdata('failed', 'Tidak boleh menggunakan password yang sama!');
                } else if ($pengaturan->updatePassword()) {
                    $this->session->set_flashdata('success', 'Berhasil disimpan!');
                } else {
                    $this->session->set_flashdata('failed', 'Password lama salah!');
                }
                $this->load->view("pengaturan/edit_password", $data);
            }
        } else {
            $this->load->view("pengaturan/edit_password", $data);
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->penduduk_model->delete($id)) {
            redirect(site_url('admin/penduduk'));
        }
    }
}
