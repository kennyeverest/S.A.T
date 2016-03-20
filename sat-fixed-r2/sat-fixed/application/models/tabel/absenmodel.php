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
		$config['password'] = 'kenny';
		$this->load->database($config);
  }

  public function insert($data)
  {
    # code...
    $this->db->insert('absen',$data);
		 $this->db->error();
		return $this->db->affected_rows();
  }

}
