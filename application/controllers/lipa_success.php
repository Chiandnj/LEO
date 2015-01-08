<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lipa_success extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		
		include_once('OAuth.php');
		
        
    } 



function load_success(){
$this->load->view('user_header');
$this->load->view('success');
$this->load->view('leo_footer');

}
}
?>