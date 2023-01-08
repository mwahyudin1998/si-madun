<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        // if(!$this->user_model->isNotLogin()) redirect(base_url());
        //$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        if ($this->input->post()) {
            $login_success = $this->user_model->doLogin();
            if ($login_success) {
                switch ($login_success) {
                    case "EMPTY":
                        $this->session->sess_destroy();
                        $this->session->set_flashdata('failed', 'Username/email atau password tidak boleh kosong');
                        break;
                    case "INACTIVE":
                        $this->session->sess_destroy();
                        $this->session->set_flashdata('warning', 'Akun anda belum diaktivasi, silakan hubungi admin.');
                        break;
                    case "FAILED":
                        $this->session->sess_destroy();
                        $this->session->set_flashdata('failed', 'Username/email atau password salah');
                        break;
                    case "SUCCESS":
                        redirect(site_url("admin"));
                        break;
                }
            }
        }
        $this->load->view("admin/login_page.php");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("login"));
    }

    public function test()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('foo' => 'bar')));
    }
}
