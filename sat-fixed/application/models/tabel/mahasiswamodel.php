<?php

class MahasiswaModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "mydb";
		$config['username'] = 'root';
		$config['password'] = 'kenny';
		$this->load->database($config);
	}
	
	public function insert($data)
	{
		$this->db->insert('mahasiswa',$data);
		return $this->db->affected_rows();
	}
	

	
}