<?php

class Database_Model extends CI_Model{
    function __construct()
	{
		parent::__construct();
		
	}
	public function veri_ekle($table,$data)
	{
				$this->db->insert($table,$data);
				return true;
	}

	public function veri_sil($table,$id){
			$this->db->delete($table, array('id' => $id));
	}
	public function veri_duzenle($table,$data){
			$this->db->update($table,$data, array('id' => $data['id']));
	}
}
