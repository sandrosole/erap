<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct() {	
		parent::__construct();
		$this->load->model('NilaiModel', 'nilai');
	}

	public function index()
	{
		$siswa = $this->session->userdata('user');
		$data['content'] = 'nilai';
        $data['data'] = $this->nilai->ambildata($siswa['id']);
		$data['siswa'] = $siswa;

		$this->load->view('master', $data);
	}
}
