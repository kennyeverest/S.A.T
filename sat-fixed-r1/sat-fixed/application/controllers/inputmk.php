<?php

class InputMK extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
	}

	public function index()
	{


		$namamk = $this->input->post('mk');
		$data['aksi'] = 'inputmk';
		$data['flag'] = 0;
		if(empty($namamk))

		{
			$this->load->view('/sat/home/homenav');
			$this->load->view('/sat/input/inputmk',$data);
		}

		else
		{
			$this->load->model('/tabel/matakuliahmodel');
			$start = $this->matakuliahmodel->getNumRows();
			$tmp['id_mk'] = $start+1;
			$tmp['nama_mk'] = $namamk;
			$tmp['is_deleted'] = 0;

			$this->insertTo_MK($tmp);
		}

	}

	public function insertTo_MK($data)
	{
		//echo $data['pesan'];
		$this->load->model('/tabel/matakuliahmodel');
		$isSuccess = $this->matakuliahmodel->insert($data);
		if($isSuccess<1)
		{
			$flag = 1;
		}
		else
			$flag = 2;

		$data['aksi'] = 'inputmk';
		$data['flag'] = $flag;
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/input/inputmk',$data);
	}
}
