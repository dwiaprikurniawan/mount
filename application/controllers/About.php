<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'Beranda',
						'active'	=> 'about',
						'isi'		=> 'user/home/about' );
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */