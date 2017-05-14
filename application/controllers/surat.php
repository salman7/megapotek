<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
	}

	public function index ()
	{
	$header['judul'] ='Surat';
	$this->load->view('vheader.php', $header);
	$menu['aktif'] = '<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="login/cek">Login</a>
						</li>';
		$this->load->view('vmenu.php', $menu);
		$this->load->view('vcontent.php');
		$this->load->view('vfooter.php');
	}
	
	public function login ()
	{
		$username = $this->input->post('username', TRUE);
		$password = md5 ($this->input->post('password', TRUE));
		
		$this->load->database();
		$query = $this->db->query("SELECT * FROM user WHERE username='$username'");
		$jml = $query->num_rows();
		$this->load->helper('url');
		if($jml > 0) redirect('user/suratmasuk');
		else redirect('login');
	}
	
}