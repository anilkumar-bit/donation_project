<?php

// echo "<pre>";
// print_r($campaign_data);
// echo "</pre>";

?>

<!-- main_content -->
<?php
$user_data = $this->session->userdata('user')[0];
?>
<section class="main_content">
		<div class="container">

			
			<div class="row">
			<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb justify-content-end"> 
						  <li class="breadcrumb-item active" aria-current="page">حملات التبرع</li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">الرئيسية</a></li>
						  </ol>
						</div>
					</div>
				</div>
			</div>

		</div>
</section>

<!-- section account page start here   -->

<section class="admin_user_ctm_section">
	<div class="container">
		<div class="admin_section_inner p-4">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-9">
						<div class="custom_table_section">
							<h3 class="text-center mb-3">جميع تفاصيل دفع الهدية</h3>
						<div class="admin_user_table-section">
					
							<table class="admin_user_table">
								<tbody>
									  <tr class="table_heading">
										<th>Id</th>
										<th>User_id</th>
										<th>Donation area</th>
										<th>Campaign name</th>
										<th>Amount</th>
										<th>Name</th>
										<th>Age</th>
										<th>Nationality</th>
										<th>Image</th>
										<th>Document</th>
										<th>Status</th>
										
									  </tr>
									  <?php 
										if($campaign_data){
										foreach($campaign_data as $campaign_datas) {  ?>
									  <tr>
										<td><?php if($campaign_datas['id']){echo $campaign_datas['id'];}?></td>
										<td><?php if($campaign_datas['user_id']){echo $campaign_datas['user_id'];}?></td>
										<td><?php if($campaign_datas['donation_area']){echo $campaign_datas['donation_area'];}?></td>
										<td><?php if($campaign_datas['campaign_name']){echo $campaign_datas['campaign_name'];}?></td>
										<td><?php if($campaign_datas['amount']){echo $campaign_datas['amount'];}?></td>
										<td><?php if($campaign_datas['name']){echo $campaign_datas['name'];}?></td>
										<td><?php if($campaign_datas['age']){echo $campaign_datas['age'];}?></td>
										<td><?php if($campaign_datas['nationality']){echo $campaign_datas['nationality'];}?></td>
										<td><img width="80px" src="<?php if($campaign_datas['image']){echo $campaign_datas['image'];}?>" class="custom_hover_image" alt="image"/></td>
										<td><img width="80px" src="<?php if($campaign_datas['document']){echo $campaign_datas['document'];}?>" class="custom_hover_image" alt="image"/></td>
										<!--td><?php //echo $campaign_datas['status'];?></td-->
										<td class="text-center table_section_button">
                                                    <?php if ($campaign_datas['status'] == 0) { ?>
                                                        <a class="ctm_round_btn w-100 my-1" href="<?php echo base_url('admin/approveCampaign/' . $campaign_datas['id']); ?>?user_id=<?php echo $campaign_datas['user_id'];?>">Approve</a>
                                                        <a class="ctm_round_btn ctm-round-btn-with-border w-100 my-1" href="<?php echo base_url('admin/rejectCampaign/' . $campaign_datas['id']); ?>?user_id=<?php echo $campaign_datas['user_id'];?>">Reject</a>
                                                    <?php } else if($campaign_datas['status'] == 1) { ?>
                                                        <a class="ctm_round_btn w-100 my-1">Approved</a>
                                                    <?php } else if($campaign_datas['status'] == 2) { ?>
                                                        <a class="ctm_round_btn ctm-round-btn-with-border w-100 my-1">Rejected</a>
                                                    <?php } ?>
                                                </td>
										
									  </tr>
									  <?php
										}
										}
										?>
								</tbody>	  
								
							</table>
							
						</div>
						
						</div>
					</div>
					
						<div class="col-md-4 col-lg-4 col-xl-3">
						<div class="account_section_inner_part p-3">
							<div class="profile-login d-flex align-items-center justify-content-end">
									<div class="profile-name">
										<h5><?php if(!empty($user_data['fname'])){echo $user_data['fname'];} ?> <?php if(!empty($user_data['lname'])){ echo $user_data['lname'];} ?></h5>
									</div>
									<div class="profile-image rounded-circle">
										<img src="<?php echo config_item('asset'); ?>image/profile.png" alt="Profile Image" width="80px">
									</div>
							</div>
							
							<div class="profile-details">
							
								<ul>
									<li class="d-flex align-items-center justify-content-between">
										<span class="profile-check"><i class="fa fa-check" aria-hidden="true"></i></span>
										<p class="m-0"><?php if(!empty($user_data['phone'])){echo $user_data['phone'];} ?><span class="ml-2"><i class="fa fa-phone" aria-hidden="true"></i></span></p>
									</li >
									<li  class="d-flex align-items-center justify-content-between">
										<span class="profile-info"><i class="fa fa-info" aria-hidden="true"></i></span>
										<p class="m-0"><?php if(!empty($user_data['fname'])){echo $user_data['email'];} ?><span class="ml-2"><i class="fa fa-envelope" aria-hidden="true"></i></p>
									</li>
								</ul>
								
							</div>
						</div>
						
						
						<div class="account_section_inner_part mt-3 text-right">
							<ul class="account-navigation">
								<li> <a href="<?php echo base_url() ?>admin">إضافة فرص التبرع<span><i class="fa fa-plus" aria-hidden="true"></i></span></a> </li> 
								<li class=""> <a href="<?php echo base_url() ?>admin/get_users">جميع المستخدمين<span><i class="fa fa-users" aria-hidden="true"></i></span></a> </li>
								<li class=""> <a href="<?php echo base_url() ?>admin/gift_payment">مدفوعات الهدايا<span><i class="fa fa-money" aria-hidden="true"></i></span></a> </li>
								<li class=""> <a href="<?php echo base_url() ?>admin/view_donations">عرض فرص التبرع<span><i class="fa fa-address-card" aria-hidden="true"></i></span></a> </li> 
								<li class=""> <a href="<?php echo base_url() ?>admin/view_campaign">عرض الحملة<span><i class="fa fa-address-card" aria-hidden="true"></i></span></a> </li>
								<li class=""> <a href="<?php echo base_url() ?>admin/add_gifts">أضف الهدايا<span><i class="fa fa-address-card" aria-hidden="true"></i></span></a> </li>
								<li class=""> <a href="<?php echo base_url() ?>admin/cancer_causes">أسباب السرطان<span><i class="fa fa-address-card" aria-hidden="true"></i></span></a> </li>
							</ul>
						</div>
					</div>
					
				</div>
		</div>
	</div>
</section>

<!-- section account page end here   -->




