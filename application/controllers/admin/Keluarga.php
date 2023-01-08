<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('global_model');
        $this->load->model("keluarga_model");
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $data["penduduks"] = $this->keluarga_model->getAll();
        $this->load->view("admin/keluarga/list_keluarga", $data);
    }

    public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/keluarga');

        $data["anggota_keluarga"] = $this->keluarga_model->getById($id);
        if (!$data["anggota_keluarga"]) show_404();

        $this->load->view("admin/keluarga/lihat_keluarga", $data);
    }

    public function print($id = null)
    {
        $daftarAnggotaKeluarga = $this->keluarga_model->getById($id);
        usort($daftarAnggotaKeluarga, function($a, $b) {
            return ($a->tgl_lahir > $b->tgl_lahir);
        });
        usort($daftarAnggotaKeluarga, function($a, $b) {
            return ($a->is_kepala_keluarga < $b->is_kepala_keluarga);
        });
        if (!$daftarAnggotaKeluarga) show_404();

        $data["anggota_keluarga"] = array(
            "list_keluarga" => $daftarAnggotaKeluarga,
            "kepala_keluarga" =>
            $this->global_model->findRowInArray(
                $daftarAnggotaKeluarga['is_kepala_keluarga' === 1],
                $daftarAnggotaKeluarga
            )
        );

        $this->load->view("admin/keluarga/print_keluarga", $data);
    }

    public function tambah_keluarga()
    {
        $penduduk = $this->keluarga_model;
        $validation = $this->form_validation;
        //$validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/keluarga/tambah_keluarga");
    }
}
