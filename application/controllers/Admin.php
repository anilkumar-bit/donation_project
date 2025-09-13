<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
		
		
		
		//$status = $this->primary->is_logged_in();
		//if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "") {}
		/* if ($status) {		
			redirect(config_item(base_url()) . 'User/loginSucc');
		}  */
		/* if($this->session->userdata['user']){
			$user_data = $this->session->userdata['user'];
			if($user_data[0]['role']){
				if($user_data[0]['role']){				
					//redirect(config_item(base_url()) .'/login');
				}else{
					redirect(config_item(base_url()) .'/login');
				}
			}
		} */
		$this->load->model('User_model');			
	}

	public function addDonationOpportunities(){	   
	 //$status = $this->primary->is_logged_in();
        if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$data['template'] = "addDonationOpportunities";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	public function donationOpportunities_post(){
		//$user_id = $this->session->userdata('user')[0]['id']; 
		$insert = array(
               // 'user_id' => $user_id,
                'case_no' => $this->input->post('case_no'),
                'category' => $this->input->post('category'),
                'title' => $this->input->post('title'),              
                'description' => $this->input->post('description'),              
               // 'image' => $this->input->post('image'),              
                'image' => $this->input->post('b64'),              
                'target_amount' => $this->input->post('target_amount'),              
                'city' => $this->input->post('city'),              
                'beneficiary_type' => $this->input->post('beneficiary_type'),              
                'number_of_beneficiaries' => $this->input->post('number_of_beneficiaries')            
                            
            );
			
		 $data = $this->primary->insert('add_donation_opportunities', $insert);
          if($data){
			  
			  $this->session->set_flashdata('sucess', 'Data has been sent.');
			  redirect(config_item(base_url()) .'/admin');
			  //$data['template'] = "addDonationOpportunities";
		  }
		//  $this->load->view('common/template', $data); 
		 
	}
	public function get_users(){
		 $get_users = $this->primary->get_where('user', array( ), TRUE);
	    if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$data['get_users'] = $get_users;
			$data['template'] = "get_users";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	public function gift_payment(){
		 $get_payment = $this->primary->get_where('gift_payment', array( ), TRUE);
	    if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$data['get_payment'] = $get_payment;
			$data['template'] = "gift_payment";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	public function view_donations(){
		 $donation_data = $this->primary->get_where('add_donation_opportunities', array( ), TRUE);
	    if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$data['donation_data'] = $donation_data;
			$data['template'] = "view_donations";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	
	public function view_campaign(){
		 $campaign_data = $this->primary->get_where('campaign', array( ), TRUE);
	    if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$data['campaign_data'] = $campaign_data;
			$data['template'] = "view_campaign";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	
	public function add_gifts(){

		if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			
			$data['template'] = "add_gifts";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	
	public function add_gifts_post(){
		//$user_id = $this->session->userdata('user')[0]['id']; 
		$insert = array(
               'gift_title' => $this->input->post('gift_title'),              
               'image' => $this->input->post('b64')              
            );
		  $data = $this->primary->insert('add_gifts', $insert);
          if($data){
			 $this->session->set_flashdata('sucess', 'Data has been sent.');
			  redirect(config_item(base_url()) .'/admin/add_gifts');
	    }
	}
	public function approveCampaign($id) {
	 if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$this->primary->update('campaign', array('status' => 1), array('id' => $id));
			$user_id = $this->input->get('user_id', TRUE);
			$user_info = $this->primary->get_where('user', array('id'=>$user_id), TRUE);
			$emaildata = array(
                'to' => $user_info[0]['email'],                   
                'subject' => "This is information email about status of your campaign",                   
                'message' => "Your campaign has been approved,
				Thanks",                   
                'from' => "info@gulfsocially.tech",                   
            );
			 $get_payment = $this->primary->sendEmailDynmic($emaildata);
		     redirect(config_item(base_url()) . 'admin/view_campaign');
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
	}
	public function rejectCampaign($id) {
	 if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			$this->primary->update('campaign', array('status' => 2), array('id' => $id));
			$user_id = $this->input->get('user_id', TRUE);
			$user_info = $this->primary->get_where('user', array('id'=>$user_id), TRUE);
			$emaildata = array(
                'to' => $user_info[0]['email'],                   
                'subject' => "This is information email about status of your campaign",                   
                'message' => "Your campaign has been Rejected, please contact us for more query 
				Thanks",                   
                'from' => "info@gulfsocially.tech",                   
            );
			 $get_payment = $this->primary->sendEmailDynmic($emaildata);
			
			redirect(config_item(base_url()) . 'admin/view_campaign');
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
	}
	
	//section to add cancer related pateints
	public function cancer_causes(){

		if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "" && $this->session->userdata('user')[0]['role'] == 1) {
			
			$data['template'] = "cancer_causes";
		}else{
			redirect(config_item(base_url()) .'/User/loginSucc');
		}
		 
		$this->load->view('common/template', $data); 
	}
	
	public function cancer_causes_post(){
		//$user_id = $this->session->userdata('user')[0]['id']; 
		$insert = array(
               'title' => $this->input->post('title'),              
               'image' => $this->input->post('b64')              
            );
		  $data = $this->primary->insert('cancer_causes', $insert);
          if($data){
			 $this->session->set_flashdata('sucess', 'Data has been sent.');
			  redirect(config_item(base_url()) .'/admin/cancer_causes');
	    }
	}
	
	
	
	
}



?>