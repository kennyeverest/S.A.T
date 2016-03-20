<?php

class ViewMk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('text');
		$this->load->library('table');
	}

	public function index()
	{
		$this->load->model('/tabel/matakuliahmodel');
		$hasil = $this->matakuliahmodel->getTet();
		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">',
		'cell_start' => '<td style="width:10%">' );
		$this->table->set_heading('Id Mata Kuliah', 'Nama Mata Kuliah');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
		$data['tabel'] = $tabel;
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/output/viewmk',$data);
	}
}
