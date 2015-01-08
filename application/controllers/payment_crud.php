<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Payment_crud extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
                die();
    }
 
    public function application_pay()
	
    {
	    $crud = new grocery_CRUD();
		
        $crud->set_table('payments');
        $crud->columns('receive_date','payment_from','receive_bank','receive_method','receive_amount');
        $crud->fields('receive_date','payment_from','receive_bank','receive_method','receive_amount','receive_description');
		
		$crud->display_as('receive_date','payment_from','receive_bank','receive_method','receive_amount');
        $crud->display_as('receive_date','payment_from','receive_bank','receive_method','receive_amount','receive_description');
        $crud->display_as('receive_date','payment_from','receive_bank','receive_method','receive_amount');
		
         $output = $crud->render();
        $this->_example_output($output);        
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('view_payment.php',$output);    
    }
	
}