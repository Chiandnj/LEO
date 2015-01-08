<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Model {
function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function display_category()
	{
	
	$sql = "SELECT
			categories.cat_id,
			categories.cat_name,
			categories.cat_description,
			COUNT(topics.topic_id) AS topics
		FROM
			categories
		LEFT JOIN
			topics
		ON
			topics.topic_id = categories.cat_id
		GROUP BY
			categories.cat_name, categories.cat_description, categories.cat_name";
			$query=$this->db->query($sql);
			$result= $query->result();
			return $result;

	
	}
	
	
	}
	?>