<?php

class Sat extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('/sat/landing/mysong_nav');
		
		$this->load->view('/sat/landing/song_header');
		
		$this->load->view('/sat/landing/mysong_section');
		
		$this->load->view('/sat/landing/mysong_footer');
	}
	
	
}