<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member_model extends CI_Model {

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
		->join('province', 'province.province_id = member.province_province_id')
		->join('district', 'district.province_province_id = member.province_province_id and district.district_id = member.district_district_id')
		->join('subdistrict', 'subdistrict.district_district_id = member.district_district_id and subdistrict.subdistrict_id = member.subdistrict_subdistrict_id')
		->join('member_type', 'member_type.member_type_id = member.member_type_member_type_id')
    ->get('member')
		->result();
    return $query;
  }

}
