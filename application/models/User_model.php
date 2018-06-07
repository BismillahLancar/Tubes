<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function list($limit, $start, $search='')
    {
        $this->db->select('*');
        $this->db->join('jurusan', 'jurusan.kode=user.kode');
        
        if ($search != 'null')
        { 
            $this->db->like('nama', $search);
            $this->db->or_like('telepon', $search);
            $this->db->or_like('tujuan', $search);
        }
        
        $query = $this->db->get('user', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal($search='')
    {
        $this->db->select('*');
        $this->db->join('jurusan', 'jurusan.kode=user.kode');
        
        if ($search != 'null')
        { 
            $this->db->like('nama', $search);
            $this->db->or_like('telepon', $search);
            $this->db->or_like('tujuan', $search);
        }
        return $this->db->count_all_results('user');
    }

    public function insert($data = [])
    {
        $result = $this->db->insert('user', $data);
        return $result;
    }

    public function show($id)
    {
        $this->db->select('*');
        $this->db->from('user'); 
        $this->db->join('jurusan', 'user.kode=jurusan.kode');
        $this->db->where('id',$id);     
        $query = $this->db->get();
        return $query->row();
    }

    public function update($id, $data = [])
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        return result;
    }
    
    public function delete($id)
    {
        // TODO: tambahkan logic penghapusan data
        $this->db->where('id', $id);

        $this->db->delete('user');
    }
}

/* End of file ModelName.php */