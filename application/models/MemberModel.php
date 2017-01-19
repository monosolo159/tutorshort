<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MemberModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

  public function GetMember()
  {
    $query = $this->db->get('member')->result();
    return $query;
  }
	public function GetMemberProfile($id)
  {
		$query = $this->db
    ->where('member_id' , $id)
    ->get('member')
		->result();
    return $query;
  }

}
