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
		$config['password'] = '';
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

public function getAdmin()
{
	# code...
	$sql = 'SELECT nim,nama,angkatan FROM mahasiswa WHERE is_admin = 1';
	$hasil = $this->db->query($sql);
	return $hasil;
}

public function getAngkatan($num)
{
	# code...
	$sql = 'SELECT nim,nama,angkatan FROM mahasiswa WHERE angkatan = '.$num;
	$hasil = $this->db->query($sql);
	return $hasil;

}
public function getDataMhs($Nim){
	$sql = 'SELECT nim,nama,angkatan,no_hp,email,is_penutor FROM mahasiswa WHERE nim = '.$Nim;
	$hasil = $this->db->query($sql);
	if ($hasil->num_rows() > 0) 
	return $hasil->result();
    else
    	return false;
}
public function updateMhs($data, $nim){
	$this->db->where('nim', $nim);
    $hasil=$this->db->update('mahasiswa', $data); 
    return $hasil;
}


}
