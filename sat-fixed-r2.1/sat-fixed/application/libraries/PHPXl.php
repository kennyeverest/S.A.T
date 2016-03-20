<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/** PHP Excel */
/**
*
*/

class Phpxl
{
	
	function __construct()
	{
		require_once APPPATH.'/libraries/PHPXl/PHPExcel.php';
		require_once APPPATH.'/libraries/PHPXl/PHPExcel/IOFactory.php';	
	}
}

?>