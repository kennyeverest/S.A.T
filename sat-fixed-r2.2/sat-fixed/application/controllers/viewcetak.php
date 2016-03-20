<?php

class ViewCetak extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('text');
		$this->load->helper('form');
  }

  public function index()
  {
    # code...
    $tmp = $this->getMK();
    $data['aksi'] = 'c_php_excel_class';
    $data['kode_mk'] = $tmp['kode_mk'];
    $data['nama_mk'] = $tmp['nama_mk'];
    $this->load->view('/sat/home/homenav');
    $this->load->view('/cetak/viewcetak',$data);

  }

  public function tampil()
  {
    # code...
    $something = $this->input->post('mk');
    print_r($something);
  }

  public function getMK(){
    $this->load->model('tabel/matakuliahmodel');
    $query = $this->matakuliahmodel->getAll();
    $kode_mk = array();
    $nama_mk = array();
    $puter = 0;
    foreach ($query->result_array() as $row) {
      # code...
      $kode_mk[$puter++] = $row['id_mk'];
      $nama_mk[$puter++] = $row['nama_mk'];
    }
    $data['kode_mk'] = $kode_mk;
    $data['nama_mk']  = $nama_mk;

    return $data;
  }

}
