<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function all()
	{
		$text = array('hello world');

		return $text;
	}
}