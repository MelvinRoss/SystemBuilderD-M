<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');  
		$this->load->view('home_page');
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */