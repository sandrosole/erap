<?php

class AdminModel extends CI_Model {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $tabel = 'user';

    public function ambildata($limit = null, $kelas = null){
		if (!is_null($limit)){
			$this->db->limit($limit);
		}
        if (!is_null($kelas)){
            $this->db->where('kelas', $kelas);
        }

		$query = $this->db->get($this->tabel);
		return $query->result();
	}

    public function hapus($id){
		$this->db->delete($this->tabel, ['id' => $id]);
	}

    public function ambilsatu($id){
		return $this->db->get_where($this->tabel, ["id" => $id])->row();
	}

    public function edit($data,$id){
		$this->db->update($this->tabel, $data, ['id' => $id]);
	}

    public function update($id, $data){

		return $this->db->update($this->tabel, $data, array('id' => $id));
	}
    public function simpan($data){
		$this->db->insert($this->tabel, $data);
	}

}