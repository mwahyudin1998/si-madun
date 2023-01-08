<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Domisili extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("domisili_model");
        $this->load->library('form_validation');
        //validasi login
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["surats"] = $this->domisili_model->getAll();
        $this->load->view("admin/surat/list_domisili", $data);
    }

    public function tambah()
    {
        $surat = $this->domisili_model;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/surat/tambah_domisili");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/surat/domisili');
       
        $surat = $this->domisili_model;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surats"] = $surat->getById($id);
        if (!$data["surats"]) show_404();
        
        $this->load->view("admin/surat/edit_domisili", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->domisili_model->delete($id)) {
            redirect(site_url('admin/surat/domisili'));
        }
    }

    public function print($id = null)
    {
        $surat = $this->domisili_model->getById($id);
        if (!isset($id)) redirect('admin/surat/domisili');

        $surat = $this->domisili_model;
        $data["surats"] = $surat->getById($id);
        if (!$data["surats"]) show_404();

        $this->load->view("admin/surat/print_domisili", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->domisili_model->search_nik($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => "$row->nik - $row->nama_lengkap",
                    'nama_lengkap' => $row->nama_lengkap,
                    'jenis_kelamin' => $row->jenis_kelamin,
                    'tempat_lahir' => $row->tempat_lahir,
                    'tgl_lahir' => $row->tgl_lahir,
                    'agama' => $row->agama,
                    'status_kawin' => $row->status_kawin,
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