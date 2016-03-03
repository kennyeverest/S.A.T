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
		$angkatan = $this->input->post('angkatan');
		$no_hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$data['aksi'] = 'inputpenutor';
		$data['flag'] = 0;
		if(empty($nim) || empty($nama))

		{
			$this->load->view('/sat/home/homenav');
			$this->load->view('/sat/input/inputpenutor',$data);
		}

		else
		{
			$tmp['nim'] = $nim;
			$tmp['nama'] = $nama;
			$tmp['angkatan'] = $angkatan;
			$tmp['no_hp'] = $no_hp;
			$tmp['email'] = $email;
			$tmp['is_penutor'] = 1;
			$tmp['is_admin'] = 0;
			$tmp['is_deleted_mhs'] = 0;


			$this->insertTo_Penutor($tmp);


		}

	}

	public function insertTo_Penutor($data)
	{
		$this->load->model('/tabel/mahasiswamodel');
		$isSuccess = $this->mahasiswamodel->insert($data);

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
