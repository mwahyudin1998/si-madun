<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $registerModel = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($registerModel->rules());

        if ($validation->run()) {
            $is_register_success = $registerModel->save();
            // echo '<pre>' . var_export($userModel, true) . '</pre>';
            // echo '<pre>' . var_export($post, true) . '</pre>';
            // echo '<pre>' . var_export($is_register_success, true) . '</pre>';
            // die();

            if ($is_register_success) {
                $this->session->set_flashdata('success', 'Akun anda berhasil terdaftar!');
                $this->load->view("admin/login_page");
            } else {
                $this->session->set_flashdata('failed', 'Username atau Email sudah terdaftar.');
                $this->load->view("admin/register_page");
            }
        } else {
            $this->load->view("admin/register_page");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function test()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('foo' => 'bar')));
    }
}
