<?php

class login extends CI_Model
{
	function formUser()
	{
		$nim = array( 'name' => 'nim',
		       'id' => 'nim',
		       'maxlength' => '15',
		      	'size' => '10',
		      	'style' => 'background:cyan;',
		      	'value' => $this->input->post('nim'),
		      	
		      );
		
		$password = array( 'name' => 'password',
		       'id' => 'password',
		       'maxlength' => '15',
		       'size' => '10',
		       'style' => 'background:red;',
		       'value' => $this->input->post('password')
		      );
		 
		 $auser = array();
		 $auser['nim'] = $nim;
		 $auser['password'] = $password;
		 
		 return $auser;
	}
	
	public function cekUser($username, $pass)
	{
		$errMessage = "";
		
		if(!empty($username) && !empty($pass))
		{
			if($username=='kenny' && $pass == '12')
			$errMessage = 'Sukses!';
			
			else
			$errMessage = 'Maaf, username atau password salah!';
		}
		
		else
		$errMessage = 'firstTime';
		
		return $errMessage;
	}
	
}