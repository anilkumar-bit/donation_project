<?php
class User_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       // echo "hello";
    }
      // echo "hello";
    // insert into user table
    function insertUser($data)
    {
	  return $this->db->insert('user', $data);
    }
    
    //send verification email to user's email id
    // function sendEmail($to_email)
    // {
    //     $from_email = 'shubam.iiisol@gmail.com'; //change this to yours
    //     $subject = 'Verify Your Email Address';
    //     $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.mydomain.com/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';
        
    //     //configure email settings
    //     $config['protocol'] = 'smtp';
    //     $config['smtp_host'] = 'ssl://smtp.mydomain.com'; //smtp host name
    //     $config['smtp_port'] = '465'; //smtp port number
    //     $config['smtp_user'] = $from_email;
    //     $config['smtp_pass'] = '********'; //$from_email password
    //     $config['mailtype'] = 'html';
    //     $config['charset'] = 'iso-8859-1';
    //     $config['wordwrap'] = TRUE;
    //     $config['newline'] = "\r\n"; //use double quotes
    //     $this->email->initialize($config);
        
    //     //send mail
    //     $this->email->from($from_email, 'Mydomain');
    //     $this->email->to($to_email);
    //     $this->email->subject($subject);
    //     $this->email->message($message);
    //     return $this->email->send();
    // }


    function sendEmail($to_email){
            // echo $email;
            $from_email = "info@gulfsocially.tech"; 
            $to_email = $this->input->post('email'); 
           
            //Load email library 
            $this->load->library('email'); 
   
            $this->email->from($from_email, 'gulfsocially'); 
            $this->email->to($to_email);
            $this->email->subject('Verify Your Email Address'); 
            $this->email->message('Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> https://rahma.gulfsocially.tech/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team'); 
   
            //Send mail 
            if($this->email->send()){
                return true;
            // $this->session->set_flashdata("email_sent","Email sent successfully."); 
            // else 
            // $this->session->set_flashdata("email_sent","Error in sending Email."); 
            // $this->load->view('user_registration_view.php'); 
            }
   }

    
    
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }

    public function login_user($data){
        $email = $data['email'];
        $pass = $data['password'];
        $this->db->where('email', $email);  
        $this->db->where('password', $pass);
        $this->db->where('status',1);
        $query = $this->db->get('user'); 
	
  
        if($query->num_rows() == 1)  
        {  
          return $query->result_array();	
        } else 
        {  
           return false;  
        } 
        
        
        // //$email,$pass
        //  $this->db->select('*');
        //  $this->db->from('user');
        //  $this->db->where('email',$email);
        //  $this->db->where('password',$pass);
        // $query=$this->db->get();
        //  if($query)
        //  {
        //      echo "truevcv";
        //     // return $query->result_array();
        //  }
        //  else{
        //      echo "falsvcve";
        //   // return false;
        //  }
        
        
       }
	   
    public function email_check($user_login,$user_password){
	     $this->db->select('*');
         $this->db->from('user');
         $this->db->where('email',$user_login);
         $query=$this->db->get();
        if($query->num_rows()>0){
			 $row=$query->row_array();
			  return $row;
		}
		else{
			return false;
		}
	}
		     // $password=$row['password'];
			 // $status=$row['status'];
			 // $role=$row['role'];
			 // if($password==$user_password ){
				  // if($status == '1'){
					  // return $row;
					   // if($role=='1'){
						  //"admin dashboard";
						 // return $row;
					  // }
					  // else
					  // {
					      // echo "user dashboard";	
						// return $row;						  
					  // } 
				  // }
				  // else{
					  // echo "please verify from registered email";
				  // }
			 // }
			 // else{
				 // echo "Please enter valid password ! ";
			// }
		 // }
		  // else
		  // {
          // echo "You are not registered, Please register first !";
          // }
        
    
	   
	public function get_where($table, $where = array(), $result = FALSE) {
        $query = $this->db->get_where($table, $where);
	       
        if ($result == TRUE) {
            return $query->result_array();
        } else {
            return $query->row_array();
        }
    }
	
	 public function check(){
		echo "hello";
	
	}
    
	
	
		 
}
?>