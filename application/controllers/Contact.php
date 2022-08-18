<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'Beranda',
						'active'	=> 'contact',
						'isi'		=> 'user/home/contact' );
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */