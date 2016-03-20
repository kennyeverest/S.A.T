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
		$this->load->helper('form');
		$this->load->library('table');
	}

	public function index()
	{
				$data['hari']= $this->hari(date('w'));
		$data['aksi'] = 'viewmhs/tampil';

		$this->load->view('/sat/home/homenav');
		$this->load->view('sat/output/mhs/viewmhs',$data);
		//$this->load->view('/sat/output/viewmhs',$data);
	}
	public function hari ($hari=-1)
	{
		$ahari= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$rtrn=(($hari>=0)&&($hari<=6))?$ahari[$hari]:false;
		return $rtrn;
	}


	public function tampil()
	{
		# code...
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->getSimpleTabel();
		$hasil2 = $this->mahasiswamodel->getAdmin();
		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM', 'Nama Mahasiswa','Angkatan');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
		$data['tabel'] = $tabel;
		$data['hari']= $this->hari(date('w'));


		$pilihan = $this->input->post('kategori');
		$this->load->view('/sat/home/homenav');
		if(strcmp($pilihan,"nochoice")==0){
					$this->load->view('/sat/output/viewmhs',$data);
		}
		else if(strcmp($pilihan,"admin")==0)
		{
			$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		 $this->table->set_heading('NIM', 'Nama Mahasiswa','Angkatan');
		 $this->table->set_template($atur);
		 $tabel = $this->table->generate($hasil2);
		 $data['tabel'] = $tabel;
			$this->load->view('/sat/output/viewadmin',$data);
		}
		else if(strcmp($pilihan,'angkatan')==0){
			$data['aksi'] = 'viewangkatan';
			$this->load->view('/sat/output/mhs/viewangkatan',$data);
		}
	}

}
