<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash_chart extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_dash()
    {
        $this->db->select('deposit_date,deposit_amount');
    $this->db->from('deposits');
	$this->db->group_by('deposit_date');
    $query = $this->db->get();
        return $query->result();
    }

}