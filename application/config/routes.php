<?php
defined('BASEPATH') OR exit('No direct script accessssssss allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
 
/*Frontend */
$route['default_controller'] = 'Home';
//these are functions for english only STARTS
$route['eng'] = 'Home/eng';
$route['donationcampaign_eng'] = 'Home/donationcampaign_eng';
$route['gift_eng'] = 'Home/present_eng';
$route['zakat_eng'] = 'Home/zakat_eng'; 
$route['zheras_eng'] = 'Home/zheras_eng'; 
$route['committee_eng'] = 'Home/committee_eng'; 
$route['topdonaters_eng'] = 'Home/topdonaters_eng';
$route['topcompanies_eng'] = 'Home/topcompanies_eng';
$route['createcampaign_eng'] = 'Home/createcampaign_eng';
//$route['demeo'] = 'Home/demeo';
//these are functions for english only Ends
$route['donationcampaign'] = 'Home/donationcampaign';
$route['createcampaign'] = 'Home/createcampaign';
$route['adahi'] = 'Home/adahi';
$route['gift'] = 'Home/present';
$route['giftee'] = 'Home/giftee';
$route['giftsubmit'] = 'Home/giftsubmit';
$route['zakat'] = 'Home/zakat'; 
$route['zheras'] = 'Home/zheras'; 
$route['rescue'] = 'Home/rescue'; 
$route['committee'] = 'Home/committee'; 
$route['subsidy'] = 'Home/subsidy'; 
$route['about'] = 'Home/about'; 
$route['project'] = 'Home/project'; 
$route['all'] = 'Home/all'; 
$route['forijat'] = 'Home/forijat'; 
$route['tyassarat'] = 'Home/tyassarat'; 
$route['demo'] = 'Home/demo'; 
$route['topdonaters'] = 'Home/topdonaters'; 
$route['topcompanies'] = 'Home/topcompanies'; 
$route['about_rehma_association'] = 'Home/about_rehma_association'; 
$route['board_of_directors'] = 'Home/board_of_directors'; 
$route['vision_and_mission'] = 'Home/vision_and_mission'; 
$route['videos'] = 'Home/videos'; 
$route['news'] = 'Home/news'; 
$route['events'] = 'Home/events'; 
$route['terms_conditions'] = 'Home/terms_conditions'; 
$route['privacy_policies'] = 'Home/privacy_policies'; 
$route['delivery_policies'] = 'Home/delivery_policies'; 
$route['refund_policies'] = 'Home/refund_policies'; 
$route['cancellation_policies'] = 'Home/cancellation_policies'; 
$route['gallery'] = 'Home/gallery'; 
/*Admin  Dashboard */
$route['admin']='Admin/addDonationOpportunities';

//$route['admin_dashboard']='Admin/addDonationOpportunities';

/*User Dashboard */
$route['account'] = 'UserDashboard/account';
$route['user_data'] = 'UserDashboard/user_data';
$route['user_edit'] = 'UserDashboard/user_edit';


/*register */
$route['register'] = 'User'; 
/*login */
$route['login'] = 'User/login_view'; 
$route['Post_login'] = 'User/login_user';
$route['donations'] = 'User/donations';
$route['sharedlinks'] = 'User/sharedlinks';
$route['usercard'] = 'User/usercard';
$route['mycampaigns'] = 'User/mycampaigns';
$route['campaign-success'] = 'User/campaignSuccess';
$route['payment'] = 'User/payment';
$route['user_campaigns'] = 'User/user_campaigns';
// This is user section for english language only STARTS
$route['user_campaigns_eng'] = 'User/user_campaigns_eng';
$route['login_eng'] = 'User/login_view_eng';
// This is user section for english language only ENDS



