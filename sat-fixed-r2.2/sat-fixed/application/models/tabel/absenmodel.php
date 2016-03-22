<?php

class AbsenModel extends CI_Model
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

  public function insert($data)
  {
    # code...
    $this->db->insert('absen',$data);
		 $this->db->error();
		return $this->db->affected_rows();
  }

  
  public function menampilkanAbsenMk($mk)
  {
	  #code...
	  $sql= 'SELECT Mahasiswa_nim, nama FROM `mengambil`, mahasiswa WHERE mengambil.Mahasiswa_nim=mahasiswa.nim and mengambil.Mata_Kuliah_id_mk='.$mk;
	  $hasil = $this->db->query($sql);
	  return $hasil;
  }
  
}
