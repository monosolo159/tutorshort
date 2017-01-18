<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashBoardMain extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('url');
		//$this->load->view('welcome_message');
		$this->load->view('back/template/header');
		$this->load->view('back/default');
		$this->load->view('back/template/footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
