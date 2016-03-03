<?php

/**
 *
 */
class ViewInputAmbilMk extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('html');
    $this->load->helper('text');
  }

 public function index()
 {
   # code...
   $list_mhs = array();
   $puter = 0;
   $puter2 = 0;
   $list_mk = array();
   $hasil = $this->getDataMhs();
   $mk = $this->getDataMk();
   foreach ($hasil->result_array() as $row) {
     # code...
     $list_mhs[$puter++] = $row['nama'];
   }
   $data['list_mhs'] = $list_mhs;



 foreach ($mk->result_array() as $row) {
   # code...
   $list_mk[$puter2++] = $row['nama_mk'];
 }
 $data['list_mk'] = $list_mk;
 $this->load->view('/sat/home/homenav');
 $this->load->view('/sat/input/inputambilmk',$data);

 }

 public function getDataMhs()
 {
   $this->load->model('/tabel/mahasiswamodel');
   $hasil = $this->mahasiswamodel->getAll();
   return $hasil;
 }

public function getDataMk()
{
  # code...
  $this->load->model('/tabel/matakuliahmodel');
  $hasil = $this->matakuliahmodel->getAll();
  return $hasil;
}

}
