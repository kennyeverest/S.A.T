<?php

/**
 *
 */
class ViewAngkatan extends CI_Controller
{

  function __construct()
  {
    # code...
    parent::__construct();
    $this->load->model('/tabel/mahasiswamodel');
    $this->load->library('table');
    $this->load->helper('url');
  }

  public function index()
  {
    # code...

    //echo $this->input->post('angkatan');
    $angkatan = $this->input->post('angkatan');
    $this->load->view('/sat/home/homenav');
    $data = $this->tampil_table($angkatan);
    $this->load->view('/sat/output/mhs/mhs_angkatan',$data);


  }

  public function tampil_table($num){
    $hasil = $this->mahasiswamodel->getAngkatan($num);
    $atur = array( 'table_open' => '<table  class="table table-striped table-condensed"  cellpadding="5" cellspacing="0">');
		$this->table->set_heading('NIM', 'Nama Mahasiswa','Angkatan');
		$this->table->set_template($atur);
		$tabel = $this->table->generate($hasil);
    $data['tabel'] = $tabel;
    return $data;
  }
}
