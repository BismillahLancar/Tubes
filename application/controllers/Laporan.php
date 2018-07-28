<?php

class Laporan extends CI_Controller 
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Member_model');
        $this->load->model('User_model');
        $this->load->library('Pdf');
        
    }

    public function index()
    {
        //$id = '';
        $user = $this->Member_model->list();
        $data = [
            "title" => "Member",
            "laporan"  => $user
        ];

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
    }

    public function destinasi()
    {
        //$id = '';
        $user = $this->Jurusan_model->list();
        $data = [
            "title" => "Destinasi",
            "laporan"  => $user
        ];

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->load_view('laporandestinasi', $data, 'laporan-destinasi.pdf');
    }

    public function laporanuser()
    {
        //$id = '';
        $user = $this->User_model->laporanuser();
        $data = [
            "title" => "User",
            "laporan"  => $user
        ];

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->load_view('laporanuser', $data, 'laporan-user.pdf');
    }
}