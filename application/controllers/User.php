<?php
class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		
        $status = $this->primary->is_logged_in();
		/* echo "<pre>";
		print_r($status);
		echo "</pre>"; */
        /* if (!$status) {
            redirect(config_item(base_url()) . 'login');
        } */
        $this->load->helper(array('form','url'));
		$this->load->helper('cookie');
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('user_model');
    }
    
    function index()
    {
       //  echo "fdslfjds";
        $this->register();
    }

    function register()
    {
      
        //set validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('phone', 'phone');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $data['template'] = "user_registration_view";
            $this->load->view('common/template', $data);  
          //  $this->load->view('user_registration_view');
        }
        else
        {
           
            //insert the user registration details into database
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->user_model->insertUser($data))
            {
                // send email
               // $sent = ;
                if ($this->user_model->sendEmail($this->input->post('email')))
                {
                   
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">لقد تم تسجيلك بنجاح! يرجى تأكيد البريد المرسل إلى معرف البريد الإلكتروني الخاص بك!!!</div>');
                    redirect('register');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">وجه الفتاة! خطأ. الرجاء معاودة المحاولة في وقت لاحق!!!</div>');
                    redirect('errr');
                    var_dump($data['msg']);
                }
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">وجه الفتاة! خطأ. الرجاء معاودة المحاولة في وقت لاحق!!!</div>');
                redirect('endsess');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">تم التحقق من عنوان بريدك الإلكتروني بنجاح! الرجاء تسجيل الدخول للوصول إلى حسابك!</div>');
            redirect('/login');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">آسف! هناك خطأ في التحقق من عنوان البريد الإلكتروني الخاص بك!</div>');
            redirect('user/register');
        }
    }

    public function login_view(){	   
		$data['template'] = "login"; 
		$this->load->view('common/template', $data);  
	}
        
	function login_user(){
		$user_login=$this->input->post('email');
		$user_password=md5($this->input->post('password'));
		$user_data[ ]=$this->user_model->email_check($user_login,$user_password);
	    if($user_data[0]){
			if($user_data[0]['password']==$user_password){
				  if($user_data[0]['status']==1){
					    if($user_data[0]['role']==1){
							$dataa = array(
							'user' => $user_data,
							'logged_in' => true,
							'role' => 'admin'
							);
							$this->session->set_userdata($dataa);
							$this->session->set_flashdata('admin_success_msg', 'admin Login.');
							$data['template'] = "addDonationOpportunities"; 
		                    $this->load->view('common/template', $data);
						//	echo "welcome to admin dashboard";
						}
						else{
							$dataa = array(
							'user' => $user_data,
							'logged_in' => true
							);
							$this->session->set_userdata($dataa);
							$this->session->set_flashdata('success_msg', 'Sucess Login.');
							
							if(!empty($_COOKIE['last_page_url'])) 
							{
								redirect($_COOKIE['last_page_url']);							     
							}	
							else if(!empty($_COOKIE['last_page_url_new']))
							{
								redirect($_COOKIE['last_page_url_new']);
							}
							else if(!empty($_COOKIE['last_page_url_gift']))
							{
								redirect($_COOKIE['last_page_url_gift']);
							}	
							$data['template'] = "Useraccount";
						    $this->load->view('common/template', $data);
											
							//echo "welcome to user dasboard";
						}
				  }
				  else{
					  
					  $this->session->set_flashdata('error_email', 'يرجى التحقق من البريد الإلكتروني المسجل');
					  $data['template'] = "login";
			          $this->load->view('common/template', $data);
					//  echo "please verify from registered email";
				  }
			}
			else{
				$this->session->set_flashdata('error_password', 'الرجاء إدخال كلمة مرور صالحة !');
				$data['template'] = "login";
			    $this->load->view('common/template', $data);
				//echo "Please enter valid password !";
			}
			
		}
		else{
			
			$this->session->set_flashdata('error_registeration', 'أنت غير مسجل ، الرجاء التسجيل أولاً !');
			$data['template'] = "login";
			$this->load->view('common/template', $data);
			//echo "You are not registered, Please register first !";
		}
		
	    
	}
	
	
	function loginSucc(){
																		
									$data['template'] = "Useraccount";
								    $this->load->view('common/template', $data);  
	}
	public function user_data(){
		$status = $this->primary->is_logged_in();
		
        if (!$status) {
            redirect(config_item(base_url()) . 'login');
        }
		$user_id=$this->session->userdata('user')['0']['id'];
		$user_info=$this->primary->user_dataa($user_id);
									
		$data['editinfo'] = $user_info;
		$data['template'] = "edituserinfo";
		$this->load->view('common/template', $data);
	}
	public function user_update(){
		$status = $this->primary->is_logged_in();
		
        if (!$status) {
            redirect(config_item(base_url()) . 'login');
        }
		$user_id=$this->session->userdata('user')['0']['id'];
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$insert=array(
			'fname' => $fname,
			'lname' => $lname,
			'email' => $email,
			'phone' => $phone
		); 
	    // $result = $this->primary->update('user', $insert, array('id' =>$user_id));
		
	     // redirect('User/user_data');
	if($result = $this->primary->update('user', $insert, array('id' =>$user_id)))
	    {
		    $this->session->set_flashdata('success_msg', 'تم تحديث بيانات ملفك الشخصي بنجاح');
			 redirect('User/user_data');  
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'لم تتأثر أي بيانات ، يبدو أنه ليس لديك شيء لتغييره');
			redirect('User/user_data');  
		}
	
     }
	public function donations(){	   
	//echo "fdffd";
		 $data['template'] = "donations"; 
		$this->load->view('common/template', $data); 
	}
	public function sharedlinks(){	   
	//echo "fdffd";
		 $data['template'] = "sharedlinks"; 
		$this->load->view('common/template', $data); 
	}
	public function usercard(){	   
	//echo "fdffd";
		 $data['template'] = "usercard"; 
		$this->load->view('common/template', $data); 
	}
	public function mycampaigns(){	   
	$status = $this->primary->is_logged_in();
		if (!$status) {
            redirect(config_item(base_url()) . 'login');
        }
		$user_id=$this->session->userdata('user')[0]['id'];
		$UserCampaign_data = $this->primary->get_where('campaign', array('user_id'=>$user_id), TRUE);
        
		
        $data['UserCampaign_data'] = $UserCampaign_data;
		$data['template'] = "mycampaigns"; 
		$this->load->view('common/template', $data); 
	}
	public function insertCategory(){
	    // $status = $this->primary->is_logged_in();
		
        // if (!$status) {
            // redirect(config_item(base_url()) . 'login');
        // } 
		   
		    $user_id = $this->session->userdata('user')[0]['id'];
		    $insert = array(
                'user_id' => $user_id,
                'donation_area' => $this->input->post('donation_area'),
                'campaign_name' => $this->input->post('campaign_name'),
				'amount' => $this->input->post('amount'),  
				'name'=>$this->input->post('name'),
				'age'=>$this->input->post('age'),
				'nationality'=>$this->input->post('nationality'),
				'image'=>$this->input->post('b64'),
				'document'=>$this->input->post('docs_b64')
				            
            );
			$data = $this->primary->insert('campaign', $insert); 
		   if($data){
			   echo "1";
		   }
		   
	}
	
	public function campaignSuccess(){	   
	    $data['template'] = "campaign_success"; 
		$this->load->view('common/template', $data); 
	}
	
    public function giftsubmit(){
		// $status = $this->primary->is_logged_in();
		
        // if (!$status) {
            // redirect(config_item(base_url()) . 'login');
        // } 
		
		 $status = $this->primary->is_logged_in();
		 if (!$status) {
			$currentURL = current_url();
			$params   = $_SERVER['QUERY_STRING'];
			$fullURL = $currentURL . '?' . $params;
			$cookie_name="last_page_url_gift";
			 setcookie($cookie_name, $fullURL, time() + (86400 * 30), "/"); // 86400 = 1 day
				 redirect(base_url().'login');
	    } 
		
		
		
		
		$form_data = $this->input->get();
	 
		$data['form_data'] = $form_data;
		$data['template'] = "giftsubmit";
		$this->load->view('common/template', $data);
		
	}	 
	public function payment(){	 
        $status = $this->primary->is_logged_in();
		 if (!$status) {
			$currentURL = current_url();
			$params   = $_SERVER['QUERY_STRING'];
			$fullURL = $currentURL . '?' . $params;
			$cookie_name="last_page_url";
			 setcookie($cookie_name, $fullURL, time() + (86400 * 30), "/"); // 86400 = 1 day
				 redirect(base_url().'login');
	    } 
		
        $q_data=$this->input->get();
	    $data['q_data'] = $q_data;
		$data['template'] = "payment"; 
		$this->load->view('common/template', $data); 
	}

   
	public function paymentSubmit(){
		$status = $this->primary->is_logged_in();
		
        if (!$status) {
            redirect(config_item(base_url()) . 'login');
        }
		 $user_id = $this->session->userdata('user')[0]['id'];
		 $insert = array(
                'user_id' => $user_id,
                'gifttype' => $this->input->post('gifttype'),
                'donation_area' => $this->input->post('donation_area'),
                'card_type' => $this->input->post('card_type'),
               // 'category'	=> $this->input->post('category'),			
                'amount' => $this->input->post('amount'),              
                'user_mobile_number' => $this->input->post('user_mobile_number'),              
                'name' => $this->input->post('name'),              
                'gifted' => $this->input->post('gifted'),              
                'country_name' => $this->input->post('country_name'),              
                'giveaway_phone' => $this->input->post('giveaway_phone')            
                            
            );
		$data = $this->primary->insert('gift_payment', $insert);
		 if(!$data){
			 echo "data inserted";
		 }
		echo "Data has been inserted on this page..................";
	}
	
	public function user_campaigns(){
		  $area=$this->input->get('area',TRUE);
		  $user_campaigns_data = $this->primary->get_where('campaign', array('donation_area' => $area,'status' => 1), TRUE);
		  
		  $data['user_campaigns_data'] = $user_campaigns_data;
		  $data['template'] = "user_campaigns"; 
		  $this->load->view('common/template', $data); 
	 }


// This is controller section for ENGLISH language STARTS
    public function user_campaigns_eng(){
		  $area=$this->input->get('area',TRUE);
		  $user_campaigns_data = $this->primary->get_where('campaign', array('donation_area' => $area,'status' => 1), TRUE);
		  
		  $data['user_campaigns_data'] = $user_campaigns_data;
		  $data['template'] = 'english/user_campaigns_eng';	
		  $this->load->view('common_eng/template', $data);
	 }
}

// This is controller section for ENGLISH language STARTS


?>