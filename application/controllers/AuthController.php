<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
	{
		$data['content'] = 'login/loginview';
		$this->load->view('master', $data);
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		// Check in user table
		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				$this->session->set_userdata($user);
				redirect('AuthController'); 
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('Authcontroller');
			}
		}else {
          
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
				redirect('AuthController');
			}
		}
	}
