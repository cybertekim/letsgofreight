<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		echo "This is a test controller"; 
	}
}