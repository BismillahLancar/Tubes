<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    public function list()
    {
        $query = $this->db->get('admin');
        return $query->result();
    }

    public function insert($data = [])
    {
        $result = $this->db->insert('admin', $data);
        return $result;
    }

    public function show($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function update($id_admin, $data = [])
    {
        // TODO: set data yang akan di update
        // https://www.codeigniter.com/userguide3/database/query_builder.html#updating-data

        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
        return result;
    }

    public function delete($id_admin)
    {
        // TODO: tambahkan logic penghapusan data
        $this->db->where('id', $id_admin);
        $this->db->delete('admin');
    }
}