<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pay_success extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		
		include_once('OAuth.php');
		
        
    } 



function load_success(){
$this->load->view('admin_header');
$this->load->view('success');
$this->load->view('leo_footer');

}
}
?>