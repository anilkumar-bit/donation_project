<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller {

	public function __construct() {
		
        parent::__construct();
		//$this->primary_model->get_data( );
		// $this->load->primary->user_dataa();
    }
	public function index()
	{
      echo "in user dashboard";
	}
	
	public function account()
	{ 	
		$data['template'] = "user_account";
		$this->load->view('common/template', $data);
       
	}
	


}
