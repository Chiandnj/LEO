<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('dash_chart');
       
    }  
    
    public function index()
    {
        $this->load->view('admin_header');
        $this->load->view('dash');
        $this->load->view('leo_footer');
    }
    
    public function data()
    {
	
	  
        $dash_chart = $this->dash_chart->get_dash();
        
        $category = array();
        $category['name'] = 'deposit_date';
        
        $series1 = array();
        $series1['name'] = 'deposit_amount';
        
       
        
        foreach ($dash_chart as $row)
        {
            $category['data'][]= DATE('M',strtotime($row->deposit_date));
            //$category['data'][] = $row->deposit_date;
            $series1['data'][] = $row->deposit_amount;
            
        }
        
        $result = array();
        array_push($result,$category);
        array_push($result,$series1);
		
        
        
        print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
}

/* End of file chart.php */
/* Location: ./application/controllers/chart.php */