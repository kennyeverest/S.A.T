<?php

/**
 *
 */
class  MkHasPenutor extends CI_Model
{

  function __construct()
  {
    # code...
    parent::__construct();
    $config['hostname'] = "localhost";
    $config['dbdriver'] = "mysqli";
    $config['database'] = "mydb";
    $config['username'] = 'root';
    $config['password'] = 'kenny';
    $this->load->database($config);
  }

  public function getAll()
  {
    # code...
    $sql = 'SELECT a.penutor_nim_penutor, b.nama_mk FROM mata_kuliah_has_penutor a inner join mata_kuliah b  on a.mata_kuliah_id_mk=b.id_mk';
    $hasil = $this->db->query($sql);
    return $hasil;
  }
public function readAmbilMK($nim){
    $sql = 'SELECT Mata_Kuliah_id_mk FROM mata_kuliah_has_penutor WHERE Penutor_Mahasiswa_nim = '.$nim;
  $hasil = $this->db->query($sql);
  if ($hasil->num_rows() >0)
  return $hasil;
    else
      return false;
  }
  public function insert($data)
  {
    # code...
    $this->db->insert('mata_kuliah_has_penutor',$data);
    //print_r($this->db->error());
    return $this->db->affected_rows();
  }
    public function updateAmbilMK($nim , $kodeMK){
   $this->db->where('Mata_Kuliah_id_mk', $kodeMK);
   $this->db->where('Penutor_Mahasiswa_nim', $nim);
    $hasil = $this->db->delete('mata_kuliah_has_penutor');

  return $hasil;
}



}
