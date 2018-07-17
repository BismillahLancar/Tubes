<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $admin = $this->Member_model->list();

        $data = [
                    'title' => 'Member',
                    'admin' => $admin,
                ];
        $this->load->view('member/index', $data);
    }

    public function create()
    {
        $error = array('error' => ' ' );
        $this->load->view('member/create', $error);
    }

    public function store()
    {
        // Ambil value
        $admin = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $dataval = $admin;
        $errorval = $this->validate($dataval);

        // Pesan Error atau Upload
        if ($errorval==false)
        {
              
            // Insert data
            $data = [
                'nama' => $admin,
                'username' => $username,
                'password'  => $password
                ];
            $result = $this->Member_model->insert($data);
                
            if ($result)
            {
                redirect('member');
            }
            else
            {
                $error = array('error' => 'Gagal');
                $this->load->view('member/create', $error);
            }
        }
        else
        {
            $error = ['error' => validation_errors()];
            $this->load->view('member/create', $error);
        }
    }

    public function edit($id_admin,$error='')
    {
    // TODO: tampilkan view edit data
        $admin = $this->Member_model->show($id_admin);
        $data = [
            'data' => $admin,
            'error' => $error
        ];
        $this->load->view('member/edit', $data);
    }

    public function update($id_admin)
    {
        //Ambil Value
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $dataval = $nama;
        $errorval = $this->validate($dataval);

        if ($errorval==false)
        {
            $data = [ 
                'nama'     => $nama,
                'username' => $username,
                'password' => $password
            ];
            $result = $this->Member_model->update($id_admin,$data);

            if ($result)
            {
                redirect('member');
            }
            else
            {
                $data = array('error' => 'Gagal');
                $this->load->view('member/edit', $data);
            }
        }
        else
        {
            $error = validation_errors();
            $this->edit($id_admin,$error=' ');
        }   
    }

    public function destroy($id_admin)
    {
        $admin = $this->Member_model->show($id_admin);
        $data = [ 'data' => $admin ];
        $this->Member_model->delete($id_admin);

        redirect('member');
    }

    public function validate($dataval)
    {
        // Validasi Nama dan Jurusan
        $this->form_validation->set_rules('nama','Nama','trim|required');

        if (! $this->form_validation->run())
        { return true; }
        else
        { return false; }
    }
}