<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home');
    }  
    
    public function index()
    {
        
$sql="select * from assets";
$sql2="select sum(asset_value) as total from assets";

$query1=$this->db->query($sql);
$query2=$this->db->query($sql2);
$result['total']=$query2->result_array();
$result['asset']=$query1->result_array();
//$total=0;

	
	
	$this->load->view('user_header');
    $this->load->view('admin_dash',$result);
    $this->load->view('leo_footer');
	







    }
    
    public function data()
    {
	
	  
        $home = $this->home->get_home();
        
        $category = array();
        $category['name'] = 'receive_date';
        
        $series1 = array();
        $series1['name'] = 'receive_amount';
        
       
        
        foreach ($home as $row)
        {
            $category['data'][] =DATE('M',strtotime($row->receive_date)) ;
            $series1['data'][] = $row->receive_amount;
            
        }
        
        $result = array();
        array_push($result,$category);
        array_push($result,$series1);
        
        
        print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
}

/* End of file chart.php */
/* Location: ./application/controllers/chart.php */