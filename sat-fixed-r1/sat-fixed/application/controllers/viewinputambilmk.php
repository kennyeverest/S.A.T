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
    $this->load->helper('date');
    $this->load->model('/tabel/mengambilmodel');
  }

 public function index()
 {
   # code...
   $list_mhs = array();
   $puter = 0;
   $puter2 = 0;
   $puter3 = 0;
   $puter4 = 0;
   $list_mk = array();
   $list_nim = array();
   $hasil = $this->getDataMhs();
   $mk = $this->getDataMk();
   foreach ($hasil->result_array() as $row) {
     # code...
     $list_mhs[$puter++] = $row['nama'];
     $list_nim[$puter4++] = $row['nim'];
   }
   $data['list_mhs'] = $list_mhs;
   $data['list_nim'] = $list_nim;
   $list_id = array();

 foreach ($mk->result_array() as $row) {
   # code...
   $list_mk[$puter2++] = $row['nama_mk'];
   $list_nim[$puter3++] = $row['id_mk'];
 }
 $data['list_mk'] = $list_mk;
 $data['list_id'] = $list_nim;
 $data['aksi'] = 'viewinputambilmk/tampil';
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

public function tampil()
{
  # code...
  $mhs = $this->input->post('mhs');
  $mk = $this->input->post('mk');
  $datestring = '%Y-%m-%d %h:%i:%s';
  $time = time();
  $tgl_register = mdate($datestring,$time);
//echo $tgl_register."</br>";
  foreach($mk as $value){
    $data['mahasiswa_nim'] = $mhs;
    $data['mata_kuliah_id_mk'] = $value;
    $data['tgl_register'] = $tgl_register;
    //echo $value."</br>";
    //echo $mhs."</br>";
    $data['is_over'] = 0;

    echo $this->mengambilmodel->insert($data)."</br>";

  }



  }

}
