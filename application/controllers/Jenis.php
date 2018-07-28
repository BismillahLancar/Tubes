<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $jenis = $this->Jenis_model->list();

        $data = [
                    'title' => 'Project Besar',
                    'jenis' => $jenis,
                ];
        $this->load->view('jenis/index', $data);
    }

    public function create()
    {
        $error = array('error' => ' ' );
        $this->load->view('jenis/create', $error);
    }

    public function store()
    {
        // Ambil value 
        $jenis = $this->input->post('jenis');

        $dataval = $jenis;
        $errorval = $this->validate($dataval);
            
            // Insert data
            $data = [
                'pesawat' => $jenis
                ];
            $result = $this->Jenis_model->insert($data);
            
            if ($result)
            {
                redirect('jenis');
            }
            else
            {
                $error = array('error' => 'Gagal');
                $this->load->view('jenis/create', $error);
            }
    }

    public function edit($id_jenis,$error='')
    {
      // TODO: tampilkan view edit data
        $jenis = $this->Jenis_model->show($id_jenis);
        $data = [
            'data' => $jenis,
            'error' => $error
        ];
        $this->load->view('jenis/edit', $data);
    }

    public function update($id_jenis)
    {
        //Ambil Value
        $id_jenis=$this->input->post('id_jenis');
        $jenis = $this->input->post('pesawat');

        $dataval = $jenis;

            $data = [ 
                'pesawat'  => $jenis
            ];
            $result = $this->Jenis_model->update($id_jenis,$data);

            if ($result)
            {
                redirect('jenis');
            }
            else
            {
                $data = array('error' => 'Gagal');
                $this->load->view('jenis/edit', $data);
            }
    }

    public function destroy($id_jenis)
    {
        $jenis = $this->Jenis_model->show($id_jenis);
        $data = [ 'data' => $jenis ];
        $this->Jenis_model->delete($id_jenis);
        redirect('jenis');
    }

    public function validate($dataval)
    {
        // Validasi Nama dan Jenis
        $this->form_validation->set_rules('jenis','Jenis','trim|required');

        if (! $this->form_validation->run())
        { return true; }
        else
        { return false; }
    }

}