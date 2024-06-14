<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapelController extends CI_Controller {

	public function index()
	{
        $data['content'] = 'mapel/dataview';

		$this->load->view('master', $data);
	}
}
