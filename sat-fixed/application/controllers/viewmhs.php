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
		$hasil = $this->mahasiswamodel->getAll();
		$atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM', 'Nama Mahasiswa');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
		$data['tabel'] = $tabel;
		$data['hari']= $this->hari(date('w'));
		$data['tanggal']= $this->tanggal();
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/output/viewmhs',$data);
	}
	public function hari ($hari=-1)
	{
		$ahari= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$rtrn=(($hari>=0)&&($hari<=6))?$ahari[$hari]:false;
		return $rtrn;
	}
	public function tanggal (){
		$tgl=array(
                "01"=>"Januari",
                "02"=>"Februari",
                "03"=>"Maret",
                "04"=>"April",
                "05"=>"Mei",
                "06"=>"Juni",
                "07"=>"Juli",
                "08"=>"Agustus",
                "09"=>"September",
                "10"=>"Oktober",
                "11"=>"November",
                "12"=>"Desember"
			);
		$tanggal=date('d-m-Y');
		$arrayTanggal= explode("-",$tanggal);
		$arrayTanggal[1]=$tgl[$arrayTanggal[1]];
        $tanggal=implode ("  ",$arrayTanggal);
        return $tanggal;
	}
}