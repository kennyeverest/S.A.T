<<<<<<< HEAD
<?php

class MataKuliahModel extends CI_Model
{
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
	
	public function insert($data)
	{
		$this->db->insert('mata_kuliah',$data);	
		return $this->db->affected_rows();
	}
=======
<?php

class MataKuliahModel extends CI_Model
{
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
	
	public function insert($data)
	{
		$this->db->insert('mata_kuliah',$data);	
		return $this->db->affected_rows();
	}
>>>>>>> 58affcd3f53f02ce13d8c397397d88b1e8e2a590
}