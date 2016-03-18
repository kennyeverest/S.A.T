<?php

class MataKuliahModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "sat";
		$config['username'] = 'root';
		$config['password'] = '';

		$this->load->database($config);
	}

	public function getAll()
	{
		$sql = 'SELECT * FROM mata_kuliah ORDER BY id_mk ASC';
		$hasil = $this->db->query($sql);
		return $hasil;
	}

	public function getNumRows()
	{
		# code...
		$sql = 'SELECT * FROM mata_kuliah';
		$hasil = $this->db->query($sql);
		return $hasil->num_rows();
	}


public function getTet()
{
	# code...
	$sql = 'SELECT id_mk, nama_mk FROM mata_kuliah ORDER BY id_mk ASC';
	$hasil = $this->db->query($sql);
	return $hasil;
}
	public function insert($data)
	{
		$this->db->insert('mata_kuliah',$data);
		return $this->db->affected_rows();
	}
}
