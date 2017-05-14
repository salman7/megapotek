<?php
class Mlogin extends CI_Model{
	function form_login()
	{
		$log = form_open('login/cek');
		$log .= form_label('Username', 'username');
		$log .= form_input('username', ''). "<br>";
		$log .= form_label('Password', 'Password');
		$log .= form_password('password'). "<br>";
		$log .= form_submit('login', 'Login');
		$log .= form_close();
		return $log;		
	}
}
?>