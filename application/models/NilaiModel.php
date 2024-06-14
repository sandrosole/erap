<?php

class NilailModel extends CI_Model {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $tabel = 'nilai';

	public function simpan($data){
		$this->db->insert($this->tabel, $data);
	}

	public function hapus($id){
		$this->db->delete($this->tabel, ['id' => $id]);
	}

	public function edit($data,$id){
		$this->db->update($this->tabel, $data, ['id' => $id]);
	}

	public function ambildata($limit = null){
        $this->db->join('mapel map', 'map.id = nilai.idmapel', 'left');
        $this->db->join('user us', 'us.id = nilai.iduser', 'left');
        if (!is_null($limit)){
			$this->db->limit($limit);
		}

		$query = $this->db->get($this->tabel);
		return $query->result();
	}

	public function ambilsatu($id){
		return $this->db->get_where($this->tabel, ["id" => $id])->row();
	}

	public function update($id, $data){

		return $this->db->update($this->tabel, $data, array('id' => $id));
	}
}