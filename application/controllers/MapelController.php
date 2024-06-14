<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property MapelModel $mapel
*/

class MapelController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('MapelModel', 'mapel');
    }

	public function index()
	{
        $data['content'] = 'mapel/dataview';
        $data['mapel'] = $this->mapel->ambildata();

		$this->load->view('master', $data);
	}

    public function add(){
        $data['content'] = 'mapel/create';

		$this->load->view('master', $data);
    }

    public function edit($id){
        $data['content'] = 'mapel/edit';
        $data['data'] = $this->mapel->ambilsatu($id);

        $this->load->view('master', $data);
    }

    public function delete($id){
        $this->mapel->hapus($id);
        redirect('mapel');
    }

    public function save(){
        $data['nama']  = $this->input->post('nama');
        $data['kelas']  = $this->input->post('kelas');
        $data['semester']  = $this->input->post('semester');

        $this->mapel->simpan($data);

        redirect('mapel');
    }

    public function update($id){
        $data['nama']  = $this->input->post('nama');
        $data['kelas']  = $this->input->post('kelas');
        $data['semester']  = $this->input->post('semester');

        $this->mapel->edit($data, $id);

        redirect('mapel');
    }
}
