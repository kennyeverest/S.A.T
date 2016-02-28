<?php

class InputPenutor extends CI_Controller
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
		$password = $this->input->post('password');
		$data['aksi'] = 'inputpenutor';
		$data['flag'] = 0;
		if(empty($nim) || empty($nama)||empty($password))

		{
			$this->load->view('/sat/home/homenav');
			$this->load->view('/sat/input/inputpenutor',$data);	
		}
		
		else
		{
			$tmp['nim_penutor'] = $nim;
			$tmp['nama_penutor'] = $nama;
			$tmp['password'] = $password;
			$this->insertTo_Penutor($tmp);
		}
		
	}
	
	public function insertTo_Penutor($data)
	{
		$this->load->model('/tabel/Penutor');
		$isSuccess = $this->Penutor->insert($data);
		
		if($isSuccess<1)
		{
			$flag = 1;
		}
		else
			$flag = 2;
			
		$data['aksi'] = 'inputpenutor';
		$data['flag'] = $flag;
		$this->load->view('/sat/home/homenav');	
		$this->load->view('/sat/input/inputpenutor',$data);
	}
	
}