<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index(){
       echo "<h1>CodeIgniter Redis Session</h1>";
        $_SESSION['name'] = 'Ahsan';
		$this->session->set_userdata('email', 'ahsan@gmail.com');
		// $this->session->userdata('name');
		print($_SESSION['name']);
		echo "<br>";
		print_r($this->session->userdata('email'));
	}
}
