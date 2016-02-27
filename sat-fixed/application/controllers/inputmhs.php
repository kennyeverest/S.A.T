<?php

class InputMhs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('text');
	}
	
	public function index()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$data['aksi'] = 'inputmhs';
		$data['flag'] = 0;
		if(empty($nim) || empty($nama))

		{
			$this->load->view('/sat/home/homenav');
			$this->load->view('/sat/input/inputmhs',$data);	
		}
		
		else
		{
			$tmp['nim'] = $nim;
			$tmp['nama_mhs'] = $nama;
			$this->insertTo_Mhs($tmp);
		}
	}
	
	public function insertTo_Mhs($data)
	{
		//echo $data['pesan'];
		$this->load->model('/tabel/mahasiswamodel');
		$isSuccess = $this->mahasiswamodel->insert($data);
		if($isSuccess<1)
		{
			$flag = 1;
		}
		else
			$flag = 2;
			
		$data['aksi'] = 'inputmhs';
		$data['flag'] = $flag;
		$this->load->view('/sat/home/homenav');	
		$this->load->view('/sat/input/inputmhs',$data);
	}
	
	
}