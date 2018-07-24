<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat_model extends CI_Model {

    public function count($kode)
    {
        $this->db->where(kode, $kode);
        $this->db->count_all_results('pesawat');   
    }

}