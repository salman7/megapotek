<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('obat.php',$output);
	}

	public function index()
	{
		$crud = new grocery_CRUD();

			$crud->set_table('obat');
		
			$crud->set_subject('Obat');

			$crud->required_fields('nama_obat','deskripsi','harga','kategori');

			$crud->set_field_upload('gambar','assets/uploads/files');

			$output = $crud->render();
			$this->_example_output($output);	
	}

	
}