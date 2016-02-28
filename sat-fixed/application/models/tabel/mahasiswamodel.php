<?php

/**
Class model untuk tabel Mahasiswa pada schema database : "mydb"
**/

class MahasiswaModel extends CI_Model
{
	/**
	No-arg constructor
	fungsi : load default library dan load pre configured database
	**/
	
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
	
	/**
	Function untuk melakukan proyeksi pada tabel mahasiswa
	parameter 	: none
	return type	: pointer ke tabel 
	**/
	
	public function getAll()
	{
		$sql = 'SELECT * FROM mahasiswa';
		$hasil = $this->db->query($sql);
		return $hasil;
	}
	
	/**
	Function untuk melakukan insert ke dalam tabel Mahasiswa
	parameter 	: $data sebagai associative array dengan index sesuai attribute dalam tabel Mahasiswa
	return type : int (jumlah baris yang terpengaruh (affected_rows)
	**/
	public function insert($data)
	{
		$this->db->insert('mahasiswa',$data);
		return $this->db->affected_rows();
	}
	

	
}