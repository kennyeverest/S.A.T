<?php

/**
 *
 */
class MengambilModel extends CI_Model
{

  function __construct()
  {
    # code...
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
    $this->db->insert('mengambil',$data);
    //print_r($this->db->error());
    return $this->db->affected_rows();
  }
  public function readAmbilMK($nim){
  	$sql = 'SELECT Mata_Kuliah_id_mk,is_over FROM mengambil WHERE Mahasiswa_nim = '.$nim;
	$hasil = $this->db->query($sql);
	if ($hasil->num_rows() >0) 
	return $hasil;
    else
    	return false;
  }
  public function updateAmbilMK($nim , $kodeMK){
	$sql = 'UPDATE mengambil SET is_over= 1 WHERE Mahasiswa_nim = '.$nim.' AND Mata_Kuliah_id_mk ='.$kodeMK;
	$hasil = $this->db->query($sql);
	return $hasil;
}

}
