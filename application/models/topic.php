<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function fetch_topic(){
	$sql = "SELECT
					cat_id,
					cat_name,
					cat_description
				FROM
					categories";
		
		     $query=$this->db->query($sql);
			 $result= $query->result();
			 
		//$result = mysql_query($sql);
		
		/*$this->db->query('CREATE TABLE topics (
topic_id		INT(8) NOT NULL AUTO_INCREMENT,
topic_subject  		VARCHAR(255) NOT NULL,
topic_date		DATETIME NOT NULL,
topic_cat		INT(8) NOT NULL,
topic_by		INT(8) NOT NULL,
PRIMARY KEY (topic_id)
) TYPE=INNODB;);');
$this->db->query('ALTER TABLE topics ADD FOREIGN KEY(topic_by) REFERENCES users(user_id) ON DELETE RESTRICT ON UPDATE CASCADE;
'); */

		}
		}