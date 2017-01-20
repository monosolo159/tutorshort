<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
  public function Authen($data)
  {
    $query = $this->db
    ->get_where('admin', $data)
    ->result_array();
    return $query;
  }
}
