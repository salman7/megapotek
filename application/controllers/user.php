<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('user.php',$output);
	}

	public function index()
	{
		$crud = new grocery_CRUD();

			$crud->set_table('user');
		
			$crud->set_subject('User');

			$crud->required_fields('nama');

			$output = $crud->render();

			$this->_example_output($output);
	}

	
}