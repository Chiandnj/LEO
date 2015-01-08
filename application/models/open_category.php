<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Open_category extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function view_category(){
	$sql = "SELECT
			cat_id,
			cat_name,
			cat_description
		FROM
			categories
		WHERE
			cat_id = " . mysql_real_escape_string($_GET['id']);

            $query=$this->db->query($sql);
			$result= $query->result();
			return $result;
			//$result = mysql_query($sql);


	}
	function view_topics(){
	$topicsql = "SELECT
									topic_id,
									topic_subject,
									topic_date,
									topic_cat
								FROM
									topics
								WHERE
									topic_cat = " . mysql_real_escape_string($_GET['id']) . "
								ORDER BY
									topic_date
								DESC
								LIMIT
									1";
								
					$query=$this->db->query($topicsql);
			         $result= $query->result();
                       return $result;
					
	}
	}
	?>