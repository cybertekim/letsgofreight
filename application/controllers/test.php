<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->spark('friendly-template/1.1.4');
	}
		
	function index()
	{

		// $this->template->title = 'Lets Go Freight Transportation';
		// $this->template->stylesheet->add('/css/app.css', 'all');
		// $this->template->javascript->add('/script.js');
		// $this->template->copyright = '&copy; Let\'s Go Freight 2012'; 

		//$this->template->content->view('news');

		$data['heading'] = 'Login';

		$this->template->stylesheet->add('/css/app.css');

		$this->template->body->view('templates/admin/body', $data);

		$this->template->head->view('templates/admin/head');

		$this->template->publish('admin');
	}
}