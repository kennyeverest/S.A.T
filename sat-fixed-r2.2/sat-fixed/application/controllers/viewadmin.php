<?php


 /**
  *
  */
 class ClassName extends AnotherClass
 {

   function __construct()
   {
     # code...
     parent::__construct();
     $this->load->helper('form');
     $this->load->helper('html');
     $this->load->helper('text');
     $this->load->helper('url');
     $this->load->library('table');
   }

   public function index()
   {
     # code...
     this->load->model('/tabel/mahasiswamodel');
 		$hasil = $this->mahasiswamodel->getAdmin();
 		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
 		$this->table->set_heading('NIM', 'Nama Mahasiswa','Angkatan');
 		$this->table->set_template($atur);
 		$tabel = $this->table->generate($hasil);
 		$data['tabel'] = $tabel;
 		$data['hari']= $this->hari(date('w'));
     $this->load->view('/sat/output/viewadmin',$data);
   }

   public function hari ($hari=-1)
 	{
 		$ahari= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
 		$rtrn=(($hari>=0)&&($hari<=6))?$ahari[$hari]:false;
 		return $rtrn;
 	}

 }
