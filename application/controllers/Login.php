<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    { 
        parent::__construct();
    }
    
    public function index($error='')
    {   
        if (isset($this->session->status)){
            redirect('admin');
        } else {
            $error = [ 'error' => $error ];
            $this->load->view('admin/login', $error);
        }
    }
    
    public function login()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $set = $this->Login_model->cek($user, $pass);
        if($set)
        { 
            $log = [
                'id' => $set->id_admin,
                'username' => $set->username,
                'nama' => $set->nama,
                'status' => 'Logged'
            ];
            $this->session->set_userdata($log);
            redirect('admin/');
        }
        else
        { $this->index($error = 'Username atau Password Salah!'); }
    }
    public function logout()
    { 
        $this->session->sess_destroy();
        redirect('login/');
    }
}