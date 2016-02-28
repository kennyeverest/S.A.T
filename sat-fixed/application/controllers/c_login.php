<?php

/**
Class CI_Controller untuk view form2.php
**/

class c_login extends CI_Controller
{
	/**
	No-arg constructor
	fungsi : load helper dan library
	**/

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->library('table');
	}

	/**
	Function untuk memanggil function tampilForm
	parameter 	: none
	return type	: void
	**/

	public function index()
	{
		$this->tampilForm();
	}

	/**
	Function untuk menampilkan form dan menampilkan home jika login sukses
	parameter 	: none
	return type	: void
	**/

	private function tampilForm()
		{

			  	$this->load->model('/login/login_baru');
			  	$this->load->model('/tabel/Penutor');
			  	$hasil = $this->Penutor->getLogin_Info();
			  	$data = $this->login_baru->formUser();
			  	$data['aksi']='c_login';
			  	$username = $data['nim']['value'];
			  	$password = $data['password']['value'];
			  	$data['judul'] = 'Login';
			  	if(empty($username) && empty($password))
			  	{
			 				$warn = 'firstTime';
			 				$data['warn'] = $warn;
			 				$this->load->view('/sat/login/form2',$data);
			  	}

			  	else
			  	{
			  		$isValid = $this->cekUser($username,$password,$hasil);

			  		if(!$isValid)
			  		{
			  		$salah = 'Maaf, username atau password salah';
			  		$warn = 'salah';
			  		$data['warn'] = $warn;
			  		$data['salah']=$salah;
			  		$this->load->view('/sat/login/form2',$data);
			  		}

			  		else
			  		{
			  			redirect('home');

			  		}



			  	}


		}

		/**
		function untuk melakukan proses autentikasi login
		parameter : $username : string, $password:string, $hasil : sql object type
		return : boolean (true : login sukses, false : login gagal)
		**/
		private function cekUser($username, $password, $hasil)
		{
			foreach ($hasil->result_array() as $row) {
			 	 // loop through values
			 	 if(strcmp($row['nim_penutor'],$username)==0&&strcmp($row['password'],$password)==0)
			 	{
			 		return true;
			 	}
			}

			return false;
		}

}
