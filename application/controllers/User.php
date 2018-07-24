<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function create($error='')
    {
        $jurusan = $this->Jurusan_model->list();
        $data = [
            'error' => $error,
            'data' => $jurusan
        ];
        $this->load->view('user/create', $data);
    }

    public function show($id)
    {
        $user = $this->User_model->show($id);
        $data = [
            'data' => $user
        ];
        $this->load->view('user/index', $data);
    }
    
    public function store()
    {
        $set = array(
			'nama' => $this->input->post("nama"),
            'telepon' => $this->input->post("telepon"),  
            'email' => $this->input->post("email"),                       
			'messege' => $this->input->post("messege"),
			'tanggal' => date("Y-m-d"),
			'fk_jurusan' => $this->input->post('jurusan')
		);
		$this->db->insert("pemesanan",$set);
		
		redirect('Home','refresh');
    }

    public function edit($id,$error='')
    {
      // TODO: tampilkan view edit data
        $user = $this->User_model->show($id);
        $jurusan = $this->Jurusan_model->list();
        $data = [
            'data' => $user,
            'datajab' => $jurusan,
            'error' => $error
        ];
        $this->load->view('user/edit', $data);
      
    }

    public function update($id)
    {
        //Ambil Value
        $id=$this->input->post('id');
        $nama = $this->input->post('nama');
        $no = $this->input->post('telepon');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');
        $pesan = $this->input->post('messege');

        // Validasi Nama dan Matakuliah
        $dataval = [
            'nama' => $nama,
            'jurusan' => $jurusan,
            'telepon'   => $no,
            'email'   => $email,
            'messege' => $pesan
            ];
        $errorval = $this->validate($dataval);

        $data = [
            'nama'     => $nama,
            'fk_jurusan' => $jurusan,
            'telepon'  => $no,
            'email'  => $email,
            'messege'  => $pesan
            ];
        $result = $this->User_model->update($id,$data);

        redirect('user');
    }

    public function destroy($id)
    {
        $user = $this->User_model->show($id);
        
        $this->User_model->delete($id);

        redirect('user');
    }

    public function validate($dataval)
    {
        // Validasi Nama dan Matakuliah
        $rules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|callback_alpha_space'
            ]
          ];

        $this->form_validation->set_rules($rules);

        if (! $this->form_validation->run())
        { return true; }
        else
        { return false; }
    } 

    public function alpha_space($str)
    {
        return ( ! preg_match("/^([a-z ])+$/i", $str)) ? FALSE : TRUE;
    }

    public function index()
    {
        if($this->uri->segment(3))
        { 
            $search=$this->uri->segment(3); 
        }
        else
        {
            if($this->input->post("search"))
            { 
                $search = $this->input->post("search"); 
            }
            else
            {
                $search = 'null'; 
            }
        }
        $data = [];
        $total = $this->User_model->getTotal($search);
        if ($total > 0)
        {
            $limit = 2;
            $start = $this->uri->segment(4,0);
            $config = [
                'base_url' => site_url().'/user/index/'.$search,
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 4,
                // Bootstrap 3 Pagination
                'first_link' => '&laquo;',
                'last_link' => '&raquo;',
                'next_link' => 'Next',
                'prev_link' => 'Prev',
                'full_tag_open' => '<ul class="pagination">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><span>',
                'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
            ];
            $this->pagination->initialize($config);
            $data = [
                'pemesanan' => $this->User_model->list($limit, $start, $search),
                'start' => $start,
                'links' => $this->pagination->create_links()
            ];
        }
        $this->load->view('user/index', $data);
    }

}

/* End of file Controllername.php */