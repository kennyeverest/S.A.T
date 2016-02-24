<?php

class c_login extends CI_Controller
{
	public function index()
	{
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->model('login');
		$data = $this->login->formuser();
		$data['aksi']='c_login';
		$data['warn'] = $errMessage = $this->login->cekUser($data['nim']['value'],$data['password']['value']);
		if($data['warn']=='Sukses!')
		{
			redirect('home');
		}
		else{
		$data['judulApp'] = 'Form login: Form Model';
		$this->load->view('form',$data);
	}
		
	} 
}