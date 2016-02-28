<?php

/**
Class CI_Controller untuk view home.php
**/

class Home extends CI_Controller
{

	/**
	No-arg constructor
	fungsi : load helper dan library
	**/

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	Function untuk load view home.php
	parameter 	: none
	return type	: void
	**/

	public function index()
	{

		$this->load->view('/sat/home/home');
	}

}
