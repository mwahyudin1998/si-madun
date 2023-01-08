<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("surat_model");
        //validasi login
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(base_url());
    }

    public function index()
    {
        $this->load->view("admin/surat/list_surat");
    }

    public function domisili($id = null)
    {
        $data["surats"] = $this->surat_model->idDomisili();
        $this->load->view("admin/surat/lihat_domisili", $data);
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
