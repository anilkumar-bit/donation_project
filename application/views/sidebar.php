<?php
 $status = $this->primary->is_logged_in();
		/*  echo "<pre>";
		print_r($status);
		echo "</pre>";  */
        if (!$status) {
            redirect(config_item(base_url()) . 'login');
        } 
		$user_data = $this->session->userdata('user')[0];
		
		/* echo "<pre>";
					print_r($user_data);
					echo "</pre>"; */
?>

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
								<li> <a href="">لوحة تحكم المستخدم<span><i class="fa fa-bar-chart" aria-hidden="true"></i></span></a> </li>
								<li> <a href="<?php echo base_url();?>User/user_data">تحرير العضو<span><i class="fa fa-user" aria-hidden="true"></i></span></a> </li>
								<!--li> <a href="">نص تجريبي <span><i class="fa fa-phone" aria-hidden="true"></i></span></a> </li-->
								<li> <a href="<?php echo base_url();?>donations"> سجل التبرعات<span><i class="fa fa-folder-open" aria-hidden="true"></i></span></a> </li>
								<li> <a href="<?php echo base_url();?>sharedlinks">الروابط المشتركة <span><i class="fa fa-share-alt" aria-hidden="true"></i></span></a> </li>
								<li> <a href="<?php echo base_url();?>usercard">البطاقات <span><i class="fa fa-credit-card" aria-hidden="true"></i></span></a> </li>
								<li> <a href="<?php echo base_url();?>mycampaigns">حملتي<span><i class="fa fa-volume-up" aria-hidden="true"></i></span></a> </li>
								<!--li> <a href="<?php //echo base_url();?>"> نص تجريبي<span><i class="fa fa-credit-card" aria-hidden="true"></i></span></a> </li-->
								<li class="logout"> <a href="<?php echo base_url();?>Logout"> تسجيل خروج<span><i class="fa fa-sign-out" aria-hidden="true"></i></span></a> </li>
							</ul>
						</div>