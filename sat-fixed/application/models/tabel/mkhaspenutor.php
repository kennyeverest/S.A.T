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
    $sql = 'SELECT * FROM mata_kuliah_has_penutor';
    $hasil = $this->db->query($sql);
    return $hasil;
  }

  

}
