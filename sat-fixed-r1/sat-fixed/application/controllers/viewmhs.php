<?php

class ViewMhs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('date');
		$this->load->helper('text');
		$this->load->library('table');
	}

	public function index()
	{
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->getSimpleTabel();
		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM', 'Nama Mahasiswa','Angkatan');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
		$data['tabel'] = $tabel;
		$data['hari']= $this->hari(date('w'));
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/output/viewmhs',$data);
	}
	public function hari ($hari=-1)
	{
		$ahari= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$rtrn=(($hari>=0)&&($hari<=6))?$ahari[$hari]:false;
		return $rtrn;
	}
}
