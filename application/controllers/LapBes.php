<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LapBes extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url', 'form'); 
        $this->load->model('Model File');
        
    }
    
    public function index()
    {
        
    }

}

/* End of file Controllername.php */
