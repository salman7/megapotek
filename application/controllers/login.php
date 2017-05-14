<?php

class Login extends CI_Controller{
	function index()
	{
		$this->load->helper('form');
		$this->load->model('Mlogin');
		$hasil = $this->Mlogin->form_login();
		
		$data['konten'] = $hasil;
		$this->load->view('vlogin', $data);	
	}
	function cek()
	{
		$username = $this->input->post('username', TRUE);
		$password = md5 ($this->input->post('password', TRUE));
		
		$this->load->database();
		$query = $this->db->query("SELECT * FROM user WHERE username='$username'");
		$jml = $query->num_rows();
		$this->load->helper('url');
		if($jml > 0) redirect('user/suratmasuk');
		else redirect('login');
		echo "Username: " .$username ." Password: " . $password;
		echo "<br>" . md5($password);
		
		function logout(){
		// menghapus session dan mengembalikan ke login_form
		$this->session->sess_destroy();
		redirect('login/login_form');
		}
	}
}
?>