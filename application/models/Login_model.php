<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function cek($user, $pass)
    { 
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        return $this->db->get('admin')->row();
    }
}