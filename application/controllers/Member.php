<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

  function index()
  {
    $this->load->helper('url'); // 'url' ใส่ในไฟล์ autoload.php ใส่ในคำสั่ง  $autoload['helper'] เสร็จแล้วไม่ต้องเรียกใน Controller อีก
    //$this->load->view('welcome_message');
    $this->load->view('back/template/header');
    $this->load->view('back/member');
    $this->load->view('back/template/footer');
  }
	function MemberProfile()
  {
    $this->load->helper('url'); // 'url' ใส่ในไฟล์ autoload.php ใส่ในคำสั่ง  $autoload['helper'] เสร็จแล้วไม่ต้องเรียกใน Controller อีก
    //$this->load->view('welcome_message');
    $this->load->view('back/template/header');
    $this->load->view('back/MemberProfile');
    $this->load->view('back/template/footer');
  }

}
