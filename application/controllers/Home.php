<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$jurusan = $this->Jurusan_model->list();
		$jenis = $this->Jenis_model->list();

        $data = [
                    'title' => 'Project Besar',
					'jurusan' => $jurusan,
					'jenis' => $jenis,
                ];
		$this->load->view('Home',$data);
	}
	
	public function premium()
	{
		$this->load->view('premium');
	}

	public function quite()
	{
		$this->load->view('quite');
	}

	public function pesan()
	{
		$set = array(
			'nama' => $this->input->post("nama"),
			'telepon' => $this->input->post("telepon"),
			'messege' => $this->input->post("messege"),
			'tanggal' => date("Y-m-d"),
			'fk_jurusan' => $this->input->post('jurusan'),
			'pesawat' => $this->input->post("pesawat")
		);
		$this->db->insert("pemesanan",$set);
		
		redirect('Home','refresh');
	}
}