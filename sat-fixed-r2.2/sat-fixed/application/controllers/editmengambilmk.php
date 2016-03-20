<?php

/**
 *
 */
class EditMengambilMk extends CI_Controller
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
    $data['aksi'] = 'editmengambilmk/tampil';
    $this->load->view('/sat/home/homenav');
    $this->load->view('/sat/edit/editmengambilmk1',$data);


 }
public function tampil (){
   $puter = 0;
   $puter2 = 0;
   $puter3=0;

   $nim = $this->input->post('nim');
   $this->load->model('/tabel/mahasiswamodel');
   $hasil = $this->mahasiswamodel->getDataMhs($nim);
   $list_id = array();     
   $list_mk = array();
   $list_ambilmk = array();
   $mk = $this->getDataMk();           //mk yang tersimpan di db
   $ambilMK= $this->getAmbilMk($nim); //mk yang diambil oleh mhs
 foreach ($mk->result_array() as $row) {
   # code...
   $list_mk[$puter++] = $row['nama_mk'];
   $list_id[$puter2++] = $row['id_mk'];
 }
 
 $data['list_mk'] = $list_mk;
 $data['list_id'] = $list_id;

 $this->load->view('/sat/home/homenav');  //cek nimnya ada dalam database?
        if($hasil!=false && $ambilMK!=false){
          foreach ($ambilMK->result_array() as $row) {
            if($row['is_over']==0)
             $list_ambilmk[$puter3++] = $row['Mata_Kuliah_id_mk'];
 }
      $data['aksi'] = 'editmengambilmk/update';
      $data['hasil'] = $hasil;
      $data['flag'] = 0;
      $data['dis']="";
       $data['ambilMK']= $list_ambilmk;
      $this->load->view('/sat/edit/editmengambilmk2',$data);
        }
        else{
          $data['hasil'] = array ();;
          $data['flag'] = 3;
          $data['aksi'] = '';
           $data['ambilMK']= array ();;
          $data['dis']="disabled";
          $this->load->view('/sat/edit/editmengambilmk2',$data);
        }

}

public function getDataMk()
{
  # code...
  $this->load->model('/tabel/matakuliahmodel');
  $hasil = $this->matakuliahmodel->getAll();
  return $hasil;
}
public function getAmbilMk($nim){
  $this->load->model('/tabel/mengambilmodel');
  $hasil = $this->mengambilmodel->readAmbilMK($nim);
  return $hasil;
}

public function update()
{
  # code...
  $nim = $this->input->post('nimMHS');
  $mk = $this->input->post('mk');
  $datestring = '%Y-%m-%d %h:%i:%s';
  $time = time();
  $tgl_register = mdate($datestring,$time);
//echo $tgl_register."</br>";
if(empty($mk)){
  $flag=4;
}else{
  $ambilMK= $this->getAmbilMk($nim);
  $list_ambilmk=array();
  $list_over= array();
  $puter=0;
  $puter2=0;
  $flag=1;
  foreach ($ambilMK->result_array() as $row) {
             if($row['is_over']==0)
             $list_ambilmk[$puter++] = $row['Mata_Kuliah_id_mk'];
         }
  $data['mahasiswa_nim'] = $nim;
  $data['tgl_register'] = $tgl_register;
  $data['is_over'] = 0;
  foreach($mk as $value){
    $data['mata_kuliah_id_mk'] = $value;
    if(in_array($value, $list_ambilmk)==false){
      $insert =  $this->mengambilmodel->insert($data);
      if($insert!=0)
        $flag=2;
    }
  }
  foreach ($list_ambilmk as $a){
    if(in_array($a, $mk)==false){
      $update = $this->mengambilmodel->updateAmbilMK($nim, $a);
      if($update!=0)
        $flag=2;
    }
  }
  }
  $puter2=0;
  $puter3=0;  
  $list_id = array();     
  $list_mk = array();     
  $mk = $this->getDataMk(); 
  foreach ($mk->result_array() as $row) {
   # code...
   $list_mk[$puter2++] = $row['nama_mk'];
   $list_id[$puter3++] = $row['id_mk'];
 }
 
          $d['list_mk'] = $list_mk;
          $d['list_id'] = $list_id;
          $d['hasil'] = array ();
          $d['flag'] = $flag;
          $d['aksi'] = '';
          $d['ambilMK']= array ();
          $d['dis']="disabled";
          $this->load->view('/sat/home/homenav');
          $this->load->view('/sat/edit/editmengambilmk2',$d);
}
  





}
