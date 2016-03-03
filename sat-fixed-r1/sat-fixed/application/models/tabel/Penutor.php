<?php

class Penutor extends CI_Model
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
	
	public function getLogin_Info()
	{
		$sql = 'SELECT nim_penutor, password FROM penutor';
		$hasil = $this->db->query($sql);
		return $hasil;
	}
	
	public function insert($data)
	{
		$this->db->insert('penutor',$data);
		return $this->db->affected_rows();
	}
	
}