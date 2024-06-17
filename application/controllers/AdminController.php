<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property AdminModel $user
*/

class AdminController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('AdminModel', 'user');
        if(!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin'){
            redirect('AuthController');
        }
    }

	public function index()
	{
        $data['content'] = 'user/userview';
        $data['user'] = $this->user->ambildata();

		$this->load->view('master', $data);
	}

    public function edit($id){
        $data['content'] = 'user/edit';
        $data['data'] = $this->user->ambilsatu($id);

        $this->load->view('master', $data);
    }
    public function add(){
        $data['content'] = 'user/create';

		$this->load->view('master', $data);
    }
    public function delete($id){
        $this->user->hapus($id);
        redirect('Admin');
    }

    public function update($id){
        $data['nama']  = $this->input->post('nama');
        $data['username']  = $this->input->post('username');
        $data['password']  = $this->input->post('password');
        $data['kelas']  = $this->input->post('kelas');
        $data['role']  = $this->input->post('role');

        $this->user->edit($data, $id);

        redirect('Admin');
    }
    public function save(){
        $data['nama']  = $this->input->post('nama');
        $data['username']  = $this->input->post('username');
        $data['password']  = $this->input->post('password');
        $data['kelas']  = $this->input->post('kelas');
        $data['role']  = $this->input->post('role');

        $this->user->simpan($data);

        redirect('Admin');
    }
}