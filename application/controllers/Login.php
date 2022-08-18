<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'Beranda',
						'active'	=> '',
						'isi'		=> 'user/login' );
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */