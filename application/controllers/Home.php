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

        $data = [
                    'title' => 'Project Besar',
                    'jurusan' => $jurusan,
                ];
		$this->load->view('Home',$data);
    }
}