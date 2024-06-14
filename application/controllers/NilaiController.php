<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property NilaiModel $nilai
 * @property UserModel $user
*/

class NilaiController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('NilaiModel', 'nilai');
        $this->load->model('UserModel', 'user');
    }

	public function index()
	{
        $data['content'] = 'nilai/dataview';
        $data['data'] = $this->nilai->ambildata();
        $data['user'] = $this->user->ambildata();
        
		$this->load->view('master', $data);
	}

    public function add(){

    }

    public function edit(){

    }

    public function delete(){
        
    }

    public function save(){
        
    }

    public function update(){

    }
}
