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
}
