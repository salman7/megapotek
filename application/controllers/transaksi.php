<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('transaksi.php',$output);
	}

	public function index()
	{
		$crud = new grocery_CRUD();

			$crud->set_table('transaksi');
		
			$crud->set_subject('Transaksi');

			$crud->required_fields('no_order');


			$output = $crud->render();
			$this->_example_output($output);	
	}

	
}