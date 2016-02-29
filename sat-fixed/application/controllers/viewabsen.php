<?php

class ViewAbsen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('table');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('text');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->getAll();

		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM','Nama Mahasiswa','Absen');
		$this->table->set_template($atur);
		foreach ($hasil->result_array() as $row) {
			 	$c = '<input type="checkbox" name="nim[';
			 	$f = $row['nim']."]";
			 	$z = $c.$f.'" value="1">';
			 	$this->table->add_row($row['nim'],$row['nama_mhs'],$z);
			}

		$tabel = $this->table->generate();
		$data['tabel'] = $tabel;
		$data['aksi'] = 'viewabsen/simpan';
	 	$id = $this->session->userdata("username");
		$data['taught'] = $this->getTaught($id);
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/output/viewabsen',$data);
	}

public function getTaught($username)
{
	# code...
	$this->load->model('/tabel/mkhaspenutor');
	$hasil = $this->mkhaspenutor->getAll();
	$myMk = array();
	$puter = 0;
	foreach ($hasil->result_array() as $row) {
		# code...
		if(strcmp($row['penutor_nim_penutor'],$username)==0)
		{
			$myMk[$puter++] = $row['nama_mk'];
		}
	}
	return $myMk;
}
	public function simpan()
	{

		$arr = $_POST;
		print_r($arr);
	}
}
