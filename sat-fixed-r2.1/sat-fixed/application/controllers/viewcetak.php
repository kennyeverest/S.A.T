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
    $this->load->view('/sat/home/homenav');
    $this->load->view('/cetak/viewcetak');

  }

}
