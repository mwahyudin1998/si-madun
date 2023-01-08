<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//validasi login
		$this->load->model("user_model");
    if($this->user_model->isNotLogin()) redirect(base_url());
		$this->load->model("penduduk_model");
		$this->load->model("keluarga_model");
	}

	public function index()
	{
		$pendudukModel = $this->penduduk_model;

		$data["jumlah_penduduk"] = $pendudukModel->jumlahPenduduk();
		$data["jumlah_laki"] = $pendudukModel->jumlahLaki();
		$data["jumlah_perempuan"] = $pendudukModel->jumlahPerempuan();
		$data["jumlah_RW"] = $pendudukModel->jumlahRW();
		$data["jumlah_LPRW"] = $pendudukModel->jumlahLakiPerempuanRW();
		$data["jumlah_keluarga"] = $this->keluarga_model->jumlahKeluarga();
		// echo '<pre>' . var_export($data, true) . '</pre>';
		// die();
    // load view admin/overview.php
    $this->load->view("admin/v_dashboard", $data);
	}
}
