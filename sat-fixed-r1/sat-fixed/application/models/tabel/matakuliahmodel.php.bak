<?php

class MataKuliahModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "mydb";
		$config['username'] = 'root';
		$config['password'] = '';
		
		$this->load->database($config);
	}
	
	public function getAll()
	{
		$sql = 'SELECT * FROM mata_kuliah';
		$hasil = $this->db->query($sql);
		return $hasil;	
	}
	
	public function insert($data)
	{
		$this->db->insert('mata_kuliah',$data);	
		return $this->db->affected_rows();
	}
}