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
					<div class="col-md-8 col-lg-8 col-xl-9">
					<?php
					$success_msg= $this->session->flashdata('success_msg');
						$error_msg= $this->session->flashdata('error_msg');

						if($success_msg){
							?>
							<div class="alert alert-success">
							<?php echo $success_msg; ?>
							</div>
							<?php
							}
							if($error_msg){
							?>
							<div class="alert alert-danger">
							<?php echo $error_msg; ?>
							</div>
							<?php
						}
					?>
						<div class="account_section_inner_part p-5">
							<h3>العنوان التجريبي</h3>
							
							<form class="pt-4 row justify-content-end" method="post" action="<?php echo base_url(); ?>User/user_update"  enctype="multipart/form-data">
								
								  <div class="form-group col-md-9">
									<label>الاسم الأول</label>
									<input type="text" class="form-control" name="fname" id=""  placeholder="" value="<?php  if(!empty($editinfo[0]['fname'] )) {echo $editinfo[0]['fname'] ; } ?>">
								  </div>
								  
								  <div class="form-group col-md-9">
									<label>الكنية</label>
									<input type="text" class="form-control" name="lname" id=""  placeholder="" value="<?php  if(!empty($editinfo[0]['lname'] )) {echo $editinfo[0]['lname'] ; } ?>">
								  </div>
								  
								  <div class="form-group col-md-9">
									<label>بريد الالكتروني</label>
									<input type="email" class="form-control" name="email" id="" placeholder="" value="<?php  if(!empty($editinfo[0]['email'] )) {echo $editinfo[0]['email'] ; } ?>">
								  </div>
								  
								  <div class="form-group col-md-9">
									<label>هاتف</label>
									<input type="text" class="form-control" name="phone" id="" placeholder="" value="<?php  if(!empty($editinfo[0]['phone'] )) {echo $editinfo[0]['phone'] ; } ?>">
								  </div>
								  
								  <div class="form-check ctm-check-box col-md-9">
									  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									  <label class="form-check-label" for="defaultCheck1">
										نص تجريبي
									  </label>
								</div>
									
								<div class="form-group m-0 col-md-12">
									<div class="border-line"></div>
								</div> 
								 
								<div class="form-group m-0 col-md-12">
									<input type="submit" class="ctm_round_btn" name="update" value="تحديث">
								 </div> 
								 
  
							</form>

						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-xl-3">
					
					<?php
								// Load sidebar_view
								$this->load->view('sidebar');
					?>
					
					</div>
					
				</div>
		</div>
	</div>
</section>

<!-- section account page end here   --