<?php

class NilaiModel extends CI_Model {

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

	public function ambildata($idsiswa){
        $this->db->select('map.nama as mapel, map.semester as semester, map.kelas as kelas, nilai');
        $this->db->join('mapel map', 'map.id = nilai.idmapel', 'left');
        $this->db->join('user us', 'us.id = nilai.iduser', 'left');
        $this->db->where('iduser', $idsiswa);

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