<?php

/**
Class CI_Controller untuk view yang berada di /sat/landing
**/

class Sat extends CI_Controller
{
	/**
	Function untuk looad nav, header, section dan footer dari landing page
	parameter 	: none
	return type	: void
	**/

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('/sat/landing/mysong_nav');

		$this->load->view('/sat/landing/song_header');

		$this->load->view('/sat/landing/mysong_section');

		$this->load->view('/sat/landing/mysong_footer');
	}


}
