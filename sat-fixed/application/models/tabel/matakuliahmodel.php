<?php

/**
Class model untuk tabel Mata_Kuliah pada schema database : "mydb"
**/

class MataKuliahModel extends CI_Model
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
	Function untuk melakukan proyeksi pada tabel mata_kuliah
	parameter 	: none
	return type	: pointer ke tabel 
	**/
	
	public function getAll()
	{
		$sql = 'SELECT * FROM mata_kuliah';
		$hasil = $this->db->query($sql);
		return $hasil;	
	}
	
	/**
	Function untuk melakukan insert ke dalam tabel Mata_Kuliah
	parameter 	: $data sebagai associative array dengan index sesuai attribute dalam tabel Mata_Kuliah
	return type : int (jumlah baris yang terpengaruh (affected_rows)
	**/
	
	public function insert($data)
	{
		$this->db->insert('mata_kuliah',$data);	
		return $this->db->affected_rows();
	}
}