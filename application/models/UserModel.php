<?php

class UserModel extends CI_Model {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $tabel = 'user';


	public function ambildata($limit = null, $role = null){
		if (!is_null($limit)){
			$this->db->limit($limit);
		}
        if (!is_null($role)){
            $this->db->where('role', $role);
        }

		$query = $this->db->get($this->tabel);
		return $query->result();
	}

	public function ambilsatu($id){
		return $this->db->get_where($this->tabel, ["id" => $id])->row();
	}
}