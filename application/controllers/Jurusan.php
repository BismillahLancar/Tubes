<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('url');
        // $this->load->library('pagination');
        // $this->load->model('Jurusan_model');
    }

    public function index()
    {
        $jurusan = $this->Jurusan_model->list();

        $data = [
                    'title' => 'Project Besar',
                    'jurusan' => $jurusan,
                ];
        $this->load->view('jurusan/index', $data);
    }

    public function create()
    {
        $error = array('error' => ' ' );
        $this->load->view('jurusan/create', $error);
    }

    public function store()
    {
        // Ambil value 
        $jurusan = $this->input->post('jurusan');
        $jam = $this->input->post('jam_berangkat');
        $harga = $this->input->post('harga');

        $dataval = $jurusan;
        $errorval = $this->validate($dataval);

        // Pesan Error atau Upload
        if ($errorval==false)
        {
            
            // Insert data
            $data = [
                'tujuan' => $jurusan,
                'jam_berangkat' => $jam,
                'harga'  => $harga
                ];
            $result = $this->Jurusan_model->insert($data);
            
            if ($result)
            {
                redirect(jurusan);
            }
            else
            {
                $error = array('error' => 'Gagal');
                $this->load->view('jurusan/create', $error);
            }
        }
        else
        {
            $error = ['error' => validation_errors()];
            $this->load->view('jurusan/create', $error);
        }
    }

    public function edit($kode,$error='')
    {
      // TODO: tampilkan view edit data
        $jurusan = $this->Jurusan_model->show($kode);
        $data = [
            'data' => $jurusan,
            'error' => $error
        ];
        $this->load->view('jurusan/edit', $data);
    }

    public function update($id)
    {
        //Ambil Value
        $kode=$this->input->post('kode');
        $jurusan = $this->input->post('jurusan');
        $jam = $this->input->post('jam_berangkat');
        $harga = $this->input->post('harga');

        $dataval = $jurusan;
        $errorval = $this->validate($dataval);

        if ($errorval==false)
        {
            $data = [ 
                'tujuan'     => $jurusan,
                'jam_berangkat' => $jam,
                'harga'    => $harga
            ];
            $result = $this->Jurusan_model->update($kode,$data);

            if ($result)
            {
                redirect('jurusan');
            }
            else
            {
                $data = array('error' => 'Gagal');
                $this->load->view('jurusan/edit', $data);
            }
        }
        else
        {
            $error = validation_errors();
            $this->edit($kode,$error=' ');
        }

        
    }

    public function destroy($kode)
    {
        $jurusan = $this->Jurusan_model->show($kode);
        $data = [ 'data' => $jurusan ];
        $this->Jurusan_model->delete($kode);
        redirect('jurusan');
    }

    public function validate($dataval)
    {
        // Validasi Nama dan Jurusan
        $this->form_validation->set_rules('jurusan','Jurusan','trim|required|callback_alpha_space');

        if (! $this->form_validation->run())
        { return true; }
        else
        { return false; }
    } 

    public function alpha_space($str)
    {
        return ( ! preg_match("/^([a-z -])+$/i", $str)) ? FALSE : TRUE;
    }
}