<?php

class Laporan extends CI_Controller 
{
    public function __construct()
    {
        parent ::__construct();
    }

    public function pdf()
    {
        $data = [
            "title" => "Contoh Laporan",
            "data"  => [
                ["kolom1" => "kolom1", "kolom2" => "kolom2"],
                ["kolom1" => "kolom2", "kolom2" => "kolom2"],
                ["kolom1" => "kolom1", "kolom2" => "kolom2"],
            ]
        ];

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
    }

    public function html()
    {
        $data = [
            "title" => "Contoh Laporan",
            "data" => [
                ["kolom1" => "kolom1", "kolom2" => "kolom2"],
                ["kolom1" => "kolom1", "kolom2" => "kolom2"],
                ["kolom1" => "kolom1", "kolom2" => "kolom2"],
            ]
        ];

        $this->load->view('laporan', $data);
    }
}