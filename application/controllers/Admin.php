<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            if($this->session->status != 'Logged'){
                redirect('login');
            }
        }

        public function index()
        {
            $this->load->view('admin/index');
            
        }
        
    }
    
    /* End of file Admin.php */
    