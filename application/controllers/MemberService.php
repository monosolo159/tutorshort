<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';
class MemberService extends REST_Controller{
	function __construct(){
		parent::__construct();
		//set config for test
			$this->config->load('rest');
			$this->config->set_item('rest_auth', 'none');//turn on rest auth
			$this->config->set_item('auth_source', '');//use config array for authentication
			$this->config->set_item('auth_override_class_method', array('wildcard_test_cases' => array('*' => 'basic')));
			$this->load->helper('url');
		}

		function GetMember_get()
		{
			$GetMember = $this->MemberModel->GetMember();
			$this->response($GetMember);
		}
		function GetMemberProfile_post()
		{
			$id = $this->post('id');
			// echo $id;
			$GetMemberProfile = $this->MemberModel->GetMemberProfile($id);
			// print_r($GetMemberProfile);

			$this->response($GetMemberProfile);
		}
	}
