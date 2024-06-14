<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/loginview');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		
		// Check in user table
		$user = $this->db->get_where('user', ['username' => $username])->row_array();


		if ($user) {
			if ($password == $user['password']) {
				$this->session->set_userdata('user', $user);
				if($user['role'] == 'siswa'){
					redirect('UserController');
				}else{
					redirect('NilaiController'); 
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('AuthController');
			}
		}else {
          
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
				redirect('AuthController');
			
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		!$this->session->has_userdata('user');

		redirect('AuthController');
	}
}