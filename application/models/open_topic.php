<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Open_topic extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function show_topic(){
	
			$sql = "SELECT
			topic_id,
			topic_subject
		FROM
			topics
		WHERE
			topics.topic_id = " . mysql_real_escape_string($_GET['id']);
			$query=$this->db->query($sql);
			$result= $query->result();
	        return $result;


	}
	/*function view_topic(){
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
					
	}*/
	}
	?>