<?php

class EditMhs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('text');
		$this->load->helper('form');
		$this->load->library('table');
	}

	public function index()
	{
		$data['aksi'] = 'editmhs/tampil';
       
		$this->load->view('/sat/home/homenav');
		$this->load->view('/sat/edit/editmhs',$data);
	}


	public function tampil()
	{
		# code...
		$nim = $this->input->post('nim');
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->getDataMhs($nim);
        

        //cek nimnya ada dalam database?
        if($hasil!=false){
        	$this->load->view('/sat/home/homenav');
			$data['aksi'] = 'editmhs/update';
			 $data['flag'] = 0;
			 $data['hasil']=$hasil;
			 $data['dis']="";
			$this->load->view('/sat/edit/editmhs2',$data);
        }
        else{
        	$this->load->view('/sat/home/homenav');
        	$data['flag'] = 3;
        	$data['hasil']=array ();
        	$data['aksi'] = '';
        	$data['dis']="disabled";
        	$this->load->view('/sat/edit/editmhs2',$data);
        }
}
     
	public function update(){
		$tmp['nim'] = $this->input->post('nim2');
		$tmp['nama'] = $this->input->post('nama');
		$tmp['angkatan'] = $this->input->post('angkatan');
		$tmp['no_hp'] = $this->input->post('hp');
		$tmp['email'] = $this->input->post('email');
		$nim = $this->input->post('nim3');
		$this->load->model('/tabel/mahasiswamodel');
		$hasil = $this->mahasiswamodel->updateMhs($tmp,$nim);

		if(($hasil==1)&&($nim!="")){
			
			 $data['flag'] = 2;
        }
        else{
        	$data['flag'] = 1;
	    }
	    $data['hasil']=array ();
        $data['aksi'] = '';
       	$data['dis']="";
	    $data['aksi'] = 'editmhs/update';
	    $this->load->view('/sat/home/homenav');
	    $this->load->view('/sat/edit/editmhs2',$data);
        

}
}
