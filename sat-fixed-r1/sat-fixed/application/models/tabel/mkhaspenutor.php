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

  

}
