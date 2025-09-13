<?php
defined('BASEPATH') OR exit('No direct script accessssssssssss allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$shop_data = $this->primary->get_where_order_limit('campaign', 3, $order = array(), array('donation_area' => 'هدية رحمة'), TRUE);
		$relief_data = $this->primary->get_where_order_limit('campaign', 3, $order = array(), array('donation_area' => 'الغالين علينا'), TRUE);
		$forijat_data = $this->primary->get_where_order_limit('campaign', 3, $order = array(), array('donation_area' => 'زميل العمل'), TRUE);
		
		$data['shop_data'] = $shop_data;
		$data['relief_data'] = $relief_data;
		$data['forijat_data'] = $forijat_data;
		$data['template'] = "home";
        $this->load->view('common/template', $data);
	}
	
	//this is controller to call language  STARTS
	
	public function eng(){
		
		$data['template'] = 'english/home_eng';
        $this->load->view('common_eng/template', $data);
	}
	
	// public function demeo(){
		
		// $data['template'] = 'english/demeo';
		// $this->load->view('common_eng/template', $data);
	// }
	
	public function donationcampaign_eng(){
		
		$data['template'] = 'english/donationcampaign_eng';
		$this->load->view('common_eng/template', $data);
	}
	public function present_eng(){
		$present_data=$this->primary->get_where('add_gifts', array(), TRUE);
		
		$data['present_data'] = $present_data;
		$data['template'] = 'english/present_eng';
		$this->load->view('common_eng/template', $data);
	}
	public function zakat_eng(){
		
		$data['template'] = 'english/zakat_eng';
		$this->load->view('common_eng/template', $data);
	}
	public function zheras_eng() 
	{	    
		$data['template'] = 'english/zheras_eng';
		$this->load->view('common_eng/template', $data);
	}
	public function committee_eng() 
	{	    
		$data['template'] = 'english/committee_eng';
		$this->load->view('common_eng/template', $data);
	}
	public function topDonaters_eng(){
		
	 
	 $data['template'] = 'english/topdonaters_eng';	
	 $this->load->view('common_eng/template', $data);
	}
	public function topcompanies_eng(){
		
	 
	 $data['template'] = 'english/topcompanies_eng';	
	 $this->load->view('common_eng/template', $data);
	}
	public function createcampaign_eng()
	{
		$data['template'] = 'english/createcampaign_eng';	
        $this->load->view('common_eng/template', $data);
	}
	
	//this is controller to call language  ENDS
	
	public function donationcampaign()
	{
         $data['template'] = "donationcampaign";
         $this->load->view('common/template', $data);
	}
	public function createcampaign()
	{
         $data['template'] = "createcampaign";
         $this->load->view('common/template', $data);
	}
	public function adahi()
	{
         $data['template'] = "adahi";
         $this->load->view('common/template', $data);
	}
	public function present()
	{
	    $present_data=$this->primary->get_where('add_gifts', array(), TRUE);
		
		 $data['present_data'] = $present_data;
         $data['template'] = "present";
         $this->load->view('common/template', $data);
	}
	public function giftee()
	{
	    $gifttype=$this->input->get('gift_type',TRUE);
		
		$data['gifttype'] = $gifttype;
		$data['template'] = "giftee";
        $this->load->view('common/template', $data);
	}
	public function giftsubmit()
	{	    
         $data['template'] = "giftsubmit";
         $this->load->view('common/template', $data);
	}
	public function zakat() 
	{	    
		$data['template'] = "zakat";
		$this->load->view('common/template', $data);
	}
	public function zheras() 
	{	    
		$data['template'] = "zheras";
		$this->load->view('common/template', $data);
	}
	public function rescue() 
	{	    
	    $relief_data = $this->primary->get_where('add_donation_opportunities', array('category' => 1 ), TRUE);
		
		$data['relief_data'] = $relief_data;
		$data['template'] = "rescue";
		$this->load->view('common/template', $data);
	}
	public function committee() 
	{	    
		
		$data['template'] = "committee";
		$this->load->view('common/template', $data);
	}
	public function subsidy() 
	{	    		
	   $shop_data = $this->primary->get_where('add_donation_opportunities', array('category' => 2 ), TRUE);
		
		$data['shop_data'] = $shop_data;
		$data['template'] = "subsidy";
		$this->load->view('common/template', $data);
	}
	public function about() 
	{	    		
		$data['template'] = "about";
		$this->load->view('common/template', $data);
	}
	public function donationOperSingleView()
	{
		 $amt=$this->input->get('amt',TRUE);
		 $item_id=$this->input->get('id', TRUE);
		 $single_oppr_data = $this->primary->get_where('add_donation_opportunities', array('id' => $item_id ), TRUE);
		
		 $data['amt'] = $amt;
		 $data['single_oppr_data'] = $single_oppr_data;
		 $data['template'] = "amount";
		 $this->load->view('common/template', $data);
		
	}
	
	public function campaignOperSingleView()
	{
	    $amt=$this->input->get('amt',TRUE);
		 $item_id=$this->input->get('id', TRUE);
		 $campaign_data = $this->primary->get_where('campaign', array('id' => $item_id,), TRUE);
		
         $data['amt'] = $amt;		
		 $data['campaign_data'] = $campaign_data;
		 $data['template'] = "amount";
		 $this->load->view('common/template', $data);
		
	}
	public function project() 
	{	    		
	    $project_data = $this->primary->get_where('add_donation_opportunities', array('category' => 5 ), TRUE);
	 
	    $data['project_data'] = $project_data;
		$data['template'] = "project";
		$this->load->view('common/template', $data);
	}
	
	public function all() 
	{	    		
	  $relif = $this->primary->get_where_order_limit('add_donation_opportunities', 3, $order = array(), array('category' => 1 ), TRUE);
	  $shop = $this->primary->get_where_order_limit('add_donation_opportunities', 3, $order = array(), array('category' => 2 ), TRUE);
	  $relesed = $this->primary->get_where_order_limit('add_donation_opportunities', 3, $order = array(), array('category' => 3 ), TRUE);
	  $facilitated = $this->primary->get_where_order_limit('add_donation_opportunities', 3, $order = array(), array('category' => 4 ), TRUE);
	  $project = $this->primary->get_where_order_limit('add_donation_opportunities', 3, $order = array(), array('category' => 5 ), TRUE);
	 
		 
	   
	   $data['relif'] = $relif;
	   $data['shop'] = $shop;
	   $data['relesed'] = $relesed;
	   $data['facilitated'] = $facilitated;
	   $data['project'] = $project;
	   
	   
		$data['template'] = "all";
		$this->load->view('common/template', $data);
	}
	
	public function forijat() 
	{	    		
	
	   $forijat_data = $this->primary->get_where('add_donation_opportunities', array('category' => 3 ), TRUE);
	   
	    $data['forijat_data'] = $forijat_data;
		$data['template'] = "forijat";
		$this->load->view('common/template', $data);
	}
	public function tyassarat() 
	{	    		
	
	  $tyassarat_data = $this->primary->get_where('add_donation_opportunities', array('category' => 4 ), TRUE);
	 
	  $data['tyassarat_data'] = $tyassarat_data;
	  $data['template'] = "tyassarat";
	  $this->load->view('common/template', $data);
	}
	public function demo(){
		
	 $data['template'] = "demo";	
	 $this->load->view('common/template', $data);
	}
	
	// public function singleViewCampaign(){
	 // $area=$this->input->get('area',TRUE);
	 // $campaign_data = $this->primary->get_where('campaign', array('donation_area' => $area ), TRUE);
	
	 // $data['campaign_data'] = $campaign_data;
	 // $data['template'] = "singleViewCampaign";	
	 // $this->load->view('common/template', $data);
	// }
	
	public function topDonaters(){
		
	 $data['template'] = "topdonaters";	
	 $this->load->view('common/template', $data);
	}
	public function topcompanies(){
		
	 $data['template'] = "topcompanies";	
	 $this->load->view('common/template', $data);
	}
	// new pages layout starts from here
	public function about_rehma_association(){
	 
	 $data['template'] = "about_rehma_association";	
	 $this->load->view('common/template', $data);
	}
	public function board_of_directors(){
	 
	 $data['template'] = "board_of_directors";	
	 $this->load->view('common/template', $data);
	}
	public function vision_and_mission(){
	 
	 $data['template'] = "vision_and_mission";	
	 $this->load->view('common/template', $data);
	}
	public function videos(){
	 
	 $data['template'] = "videos";	
	 $this->load->view('common/template', $data);
	}
	public function news(){
	 
	 $data['template'] = "news";	
	 $this->load->view('common/template', $data);
	}
	public function events(){
	 
	 $data['template'] = "events";	
	 $this->load->view('common/template', $data);
	}
	public function terms_conditions(){
	 
	 $data['template'] = "terms_conditions";	
	 $this->load->view('common/template', $data);
	}
	public function privacy_policies(){
	 
	 $data['template'] = "privacy_policies";	
	 $this->load->view('common/template', $data);
	}
	public function delivery_policies(){
	 
	 $data['template'] = "delivery_policies";	
	 $this->load->view('common/template', $data);
	}
	public function refund_policies(){
	 
	 $data['template'] = "refund_policies";	
	 $this->load->view('common/template', $data);
	}
	public function cancellation_policies(){
	 
	 $data['template'] = "cancellation_policies";	
	 $this->load->view('common/template', $data);
	}
	public function gallery(){
	 
	 $data['template'] = "gallery";	
	 $this->load->view('common/template', $data);
	}
	// new pages layout ends from here
	
}
