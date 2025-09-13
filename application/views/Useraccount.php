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

<!-- main_content -->

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

<section class="account_section">
	<div class="container">
		<div class="account_section_inner">
				<div class="row">
					<div class="col-md-8 col-lg-8  col-xl-9">
						<div class="account_section_inner_part p-5">
							<h3>الإحصاء</h3>
								<div class="account_section_inner_part_inner  p-4 mt-4">
									<h4 class="mb-4">تبرعاتك</h4>
									<div class="row">
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">المبلغ الإجمالي</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">عدد مرات التبرع</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
									</div>
								</div>
								
								<div class="account_section_inner_part_inner  p-4 mt-4">
									<h4 class="mb-4">مشاركات العشب</h4>
									<div class="row">
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">إجمالي الزيارات</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">نقاط العشب</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
									</div>
								</div>
								
								<div class="account_section_inner_part_inner  p-4 mt-4">
									<h4 class="mb-4">حملة تبرع</h4>
									<div class="row">
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">إجمالي مبلغ الحملة</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="account-blocks">
													<div class="account-blocks-text">
														<h4>1</h4>
														<p class="m-0">العدد الإجمالي للحملات</p>
													</div>
													<div class="account-blocks-image ml-4">
														<img class="rounded-circle" src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
													</div>
												</div>
											</div>
									</div>
								</div>
								
								

						</div>
					</div>
					
					<div class="col-md-4 col-lg-4  col-xl-3">
						
					<?php
					$this->load->view('sidebar'); 
					?>
					

					</div>
					
				</div>
		</div>
	</div>
</section>

<!-- section account page end here   -->