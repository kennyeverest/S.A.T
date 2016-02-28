<?php

/**
Class model untuk tabel Penutor pada schema database : "mydb"
**/

class Penutor extends CI_Model
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
	Function untuk melakukan proyeksi pada tabel Penutor
	parameter 	: none
	return type	: pointer ke tabel
	**/

	public function getLogin_Info()
	{
		$sql = 'SELECT nim_penutor, password FROM penutor';
		$hasil = $this->db->query($sql);
		return $hasil;
	}

	/**
	Function untuk melakukan insert ke dalam tabel penutor
	parameter 	: $data sebagai associative array dengan index sesuai attribute dalam tabel penutor
	return type : int (jumlah baris yang terpengaruh (affected_rows)
	**/

	public function insert($data)
	{
		$this->db->insert('penutor',$data);
		return $this->db->affected_rows();
	}

}
