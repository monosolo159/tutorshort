<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    if(!isset($_SESSION))
    {
      session_start();
    }
  }

  // public function index() {
  //   if(isset($_SESSION['ADMIN_USERNAME'])){
  //     // redirect('/DashBoardMain');
  //   }else{
  //     $this->load->view('back/login');
  //   }
  //
  // }
  public function Authen()
  {
    $input = $this->input->post();
    $input['admin_password'] = md5($input['admin_password']);

    $Admin = $this->AdminModel->Authen($input);

    if (count($Admin)>0) {

      $_SESSION['ADMIN_USERNAME'] = $Admin[0]['admin_username'];

      redirect('/DashBoardMain');
    } else {
      redirect('/Admin');
    }
  }
  public function Logout() {
    session_destroy();
    redirect('/Admin');
  }
}
