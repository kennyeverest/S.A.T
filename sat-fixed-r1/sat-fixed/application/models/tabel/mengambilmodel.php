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
    $config['password'] = 'kenny';
    $this->load->database($config);
  }

  public function insert($data)
  {
    # code...
    $this->db->insert('mengambil',$data);
    //print_r($this->db->error());
    return $this->db->affected_rows();
  }

}
