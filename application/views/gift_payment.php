<?php 
// echo "<pre>";
// print_r($get_payment);
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
										<th>Gift type</th>
										<th>Donation area</th>
										<th>Card type</th>
										<th>Amount</th>
										<th>User Mobile number</th>
										<th>Name</th>
										<th>Gifted</th>
										<th>Country name</th>
										<th>Giveaway Phone</th>
									  </tr>
									  <?php 
										if($get_payment){
										foreach($get_payment as $get_payments) {  ?>
									  <tr>
										<td><?php if($get_payments['id']){echo $get_payments['id'];}?></td>
										<td><?php if($get_payments['user_id']){echo $get_payments['user_id'];}?></td>
										<td><?php if($get_payments['gifttype']){echo $get_payments['gifttype'];}?></td>
										<td><?php if($get_payments['donation_area']){echo $get_payments['donation_area'];}?></td>
										<td><?php if($get_payments['card_type']){echo $get_payments['card_type'];}?></td>
										<td><?php if($get_payments['amount']){echo $get_payments['amount'];}?></td>
										<td><?php if($get_payments['user_mobile_number']){echo $get_payments['user_mobile_number'];}?></td>
										<td><?php if($get_payments['name']){echo $get_payments['name'];}?></td>
										<td><?php if($get_payments['gifted']){echo $get_payments['gifted'];}?></td>
										<td><?php if($get_payments['country_name']){echo $get_payments['country_name'];}?></td>
										<td><?php if($get_payments['giveaway_phone']){echo $get_payments['giveaway_phone'];}?></td>
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
						
						
						<div class="account_section_inner_part mt-3">
							<ul class="account-navigation">
								<li> <a href="<?php echo base_url() ?>admin">إضافة فرص التبرع<span><i class="fa fa-plus" aria-hidden="true"></i></span></a> </li> 
								<li class=""> <a href="<?php echo base_url() ?>admin/get_users"> تسجيل خروج<span><i class="fa fa-users" aria-hidden="true"></i></span></a> </li>
								<li class="active_li"> <a href="<?php echo base_url() ?>admin/gift_payment">مدفوعات الهدايا<span><i class="fa fa-money" aria-hidden="true"></i></span></a> </li>
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




