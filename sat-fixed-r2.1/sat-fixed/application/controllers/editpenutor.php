<?php

/**
 *
 */
class EditPenutor extends CI_Controller
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
    $this->load->model('/tabel/mahasiswamodel');
    $this->load->model('/tabel/matakuliahmodel');
    $this->load->model('/tabel/mkhaspenutor');
  }

 public function index()
 {
   # code...
    $data['aksi'] = 'editpenutor/tampil';
    $this->load->view('/sat/home/homenav');
    $this->load->view('/sat/edit/editpenutor1',$data);


 }
public function tampil (){
   $puter = 0;
   $puter2 = 0;
   $puter3=0;

   $nim = $this->input->post('nim');
   $this->load->model('/tabel/mahasiswamodel');
   $hasil = $this->mahasiswamodel->getDataMhs($nim); //mencari nim dalam data mahasiswa
   $list_id = array();     
   $list_mk = array();
   $list_ambilmk = array();
   $mk = $this->getDataMk();           //mk yang tersimpan di db
   $ambilMK= $this->getAmbilMk($nim); //mk yang diambil oleh penutor
 foreach ($mk->result_array() as $row) {
   # code...
   $list_mk[$puter++] = $row['nama_mk'];
   $list_id[$puter2++] = $row['id_mk'];
 }
 
 $data['list_mk'] = $list_mk;
 $data['list_id'] = $list_id;

 $this->load->view('/sat/home/homenav');  //cek nimnya ada dalam database?
        $data['dis']="";
        $flag=0;

        if($hasil!=false ){
          foreach ($hasil as $h){
          if($h->is_penutor==0){
            $flag=5;
            $data['dis']="disabled";
          }}
          if ($ambilMK!=false){
          foreach ($ambilMK->result_array() as $row) {
             $list_ambilmk[$puter3++] = $row['Mata_Kuliah_id_mk'];
           }
            $data['ambilMK']= $list_ambilmk;
           }
           else
            $data['ambilMK']= array ();
      $data['aksi'] = 'editpenutor/update';
      $data['hasil'] = $hasil;
      $data['flag'] = $flag;
      $this->load->view('/sat/edit/editpenutor2',$data);
        }
        else{
          $data['hasil'] = array ();
          $data['flag'] = 3;
          $data['aksi'] = '';
           $data['ambilMK']= array ();
          $data['dis']="disabled";
          $this->load->view('/sat/edit/editpenutor2',$data);
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
  $this->load->model('/tabel/mkhaspenutor');
  $hasil = $this->mkhaspenutor->readAmbilMK($nim);
  return $hasil;
}

public function update()
{
  # code...
  $nim = $this->input->post('nimMHS');
  $mk = $this->input->post('mk');
;
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
             $list_ambilmk[$puter++] = $row['Mata_Kuliah_id_mk'];
         }
  $data['Penutor_Mahasiswa_nim'] = $nim;
  foreach($mk as $value){
    $data['Mata_Kuliah_id_mk'] = $value;
    if(in_array($value, $list_ambilmk)==false){
      $insert =  $this->mkhaspenutor->insert($data);
      if($insert!=0)
        $flag=2;
    }
  }
  foreach ($list_ambilmk as $a){
    if(in_array($a, $mk)==false){
      $delete = $this->mkhaspenutor->updateAmbilMK($nim, $a);
      if($delete!=0)
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
          $this->load->view('/sat/edit/editpenutor2',$d);
}
  





}
