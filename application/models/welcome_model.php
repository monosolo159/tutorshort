<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function GetAll()
	{
		$query = $this->db->get('province')->result();
    return $query;
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
