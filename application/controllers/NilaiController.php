<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property NilaiModel $nilai
 * @property UserModel $user
 * @property MapelModel $mapel
*/

class NilaiController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('NilaiModel', 'nilai');
        $this->load->model('UserModel', 'user');
        $this->load->model('MapelModel', 'mapel');
    }

	public function index()
	{
        $data['content'] = 'nilai/dataview';
        // $data['data'] = $this->nilai->ambildata();
        $data['user'] = $this->user->ambildata(null, 'siswa');
        
		$this->load->view('master', $data);
	}

    public function add($id){
        $siswa = $this->user->ambilsatu($id);

        $data['content'] = 'nilai/berinilai';
        $data['siswa'] = $siswa;
        $data['data'] = $this->nilai->ambildata($id);
        $data['mapel'] = $this->mapel->ambildata(null, $siswa->kelas);
        
		$this->load->view('master', $data);
    }

    public function edit(){

    }

    public function delete(){
        
    }

    public function save(){
        $data['idmapel'] = $this->input->post('idmapel');
        $data['nilai'] = $this->input->post('nilai');
        $data['iduser'] = $this->input->post('iduser');

        $this->nilai->simpan($data);

        redirect('NilaiController/add/'. $this->input->post('iduser'));
    }

    public function update(){

    }
}
