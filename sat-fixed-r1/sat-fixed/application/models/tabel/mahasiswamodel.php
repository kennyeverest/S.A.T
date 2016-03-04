<?php

class MahasiswaModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "sat";
		$config['username'] = 'root';
		$config['password'] = 'kenny';
		$this->load->database($config);
	}

	public function getAll()
	{
		$sql = 'SELECT * FROM mahasiswa';
		$hasil = $this->db->query($sql);
		return $hasil;
	}
public function getSimpleTabel()
{
	# code...
	$sql = 'SELECT nim,nama,angkatan FROM mahasiswa';
	$hasil = $this->db->query($sql);
	return $hasil;
}

	public function insert($data)
	{
		$this->db->insert('mahasiswa',$data);
		 $this->db->error();
		return $this->db->affected_rows();
	}

public function getLogin_Info()
{
	# code...
	$sql = 'SELECT nim,password FROM mahasiswa';
	$hasil = $this->db->query($sql);
	return $hasil;
}

}
