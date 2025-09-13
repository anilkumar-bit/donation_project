<?php

Class Primary_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function is_logged_in() {
						if ($this->session->userdata('logged_in') == 1 && $this->session->userdata('user') != "") {
							return true;
						} else {
							return false;
						}
    }
	public function user_dataa($user_id,$result=TRUE){
						$this->db->select('*');
						$this->db->from('user');
						$this->db->where('id',$user_id);
						$query=$this->db->get();
						return $query->result_array();
	}
	function update($table, $data = array(), $where = array()) {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
	}
	function insert($table, $data = array()) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
	public function get_where($table, $where = array(), $result = FALSE) {
        $query = $this->db->get_where($table, $where);
	       
        if ($result == TRUE) {
            return $query->result_array();
        } else {
            return $query->row_array();
        }
    }
	
	
	public function get_where_order_limit($table, $limit, $order = array(), $where = array(), $result = FALSE) {
        $this->db->order_by($order);
        $this->db->limit($limit);
        $query = $this->db->get_where($table, $where);
        if ($result == TRUE) {
            return $query->result_array();
        } else {
            return $query->row_array();
        }
    }
	public function sendEmailDynmic($data = array()){
			$this->load->library('email'); 
   
            $this->email->from($data['from']); 
            $this->email->to($data['to']);
            $this->email->subject($data['subject']); 
            $this->email->message($data['message']); 
            if($this->email->send()){
                return true;
   
            }
   }
	
}
