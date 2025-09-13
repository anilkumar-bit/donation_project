<?php
$user_data = $this->session->userdata('user')[0];

$sucess= $this->session->flashdata('sucess');
if($sucess){
?>
<div class="alert alert-success text-center">
<?php echo $sucess; ?>
</div>
<?php
}
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
							<h3>أضف فرص التبرع</h3>
							
							<form class="pt-4 row justify-content-end" action="<?php echo base_url(); ?>Admin/donationOpportunities_post" method="POST" enctype="multipart/form-data">
								
								  <div class="form-group col-md-9">
									<label class="mb-0">القضية رقم</label>
									<input type="text" name="case_no" id="case_no" class="form-control" required>
								  </div>
								  
								  <div class="form-group col-md-9">
									<label class="mb-0">فئة</label>
									<select name="category" id="category" class="mdb-select md-form custom-select form-control" searchable="Search here..">
										<option value="0" class="" disabled="" selected="">فئة</option>
											<option value="1" selected>الإغاثة</option>
											<option value="2"> المتجر</option>
											<option value="3">فرجت</option>               
											<option value="4">  تيسرت </option>      
											<option value="5">المشاريع</option>
									</select>		
								  </div>
								  
								  <div class="form-group col-md-9">
									<label class="mb-0">لقب</label>
									<input type="text" name="title" id="title" class="form-control" required>
								  </div>
								  
								  <div class="form-group col-md-9">
									  <div class="form-check ctm-check-box p-0">
										  <label class="m-0">وصف</label>
										<textarea rows="4" name="description" id="description"  class="form-control" required></textarea>
									</div>
								</div>
									
								<div class="form-group col-md-9">
									<label class="mb-0">صورة</label>
									<input type="file" name="image" id="image" class="form-control" required>
									<input type="text" name="b64" id="b64" class="form-control" >
								 </div>
								 
								 <div class="form-group col-md-9">
									<label class="mb-0">صورة</label>
								<img id="img" height="150">
								 </div>
								 
								 <div class="form-group col-md-9">
									<label class="mb-0">المبلغ المستهدف</label>
									<input type="text" name="target_amount" id="target_amount" class="form-control" required >
								 </div>
								 
								  <div class="form-group col-md-9">
									<label class="mb-0">مدينة</label>
									<input type="text" name="city" id="city" class="form-control" required>
								 </div>
								 
								 <div class="form-group col-md-9">
									<label class="mb-0">نوع المستفيد</label>
									<input type="text" name="beneficiary_type" id="beneficiary_type" class="form-control" required>
								 </div>
									
								<div class="form-group col-md-9">
									<label class="mb-0">عدد المستفيدين</label>
									<input type="text" name="number_of_beneficiaries" id="number_of_beneficiaries" class="form-control" required>
								 </div>
									
									
									
									
								<div class="form-group m-0 col-md-12">
									<div class="border-line"></div>
								</div> 
								 
								<div class="form-group m-0 col-md-12">
									<input type="submit" class="ctm_round_btn" name="submit" value="يضيف">
								 </div> 
								 
  
							</form>

						</div>
					</div>
					
					<div class="col-md-4 col-lg-4  col-xl-3">
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
								<li class="active_li"> <a href="<?php echo base_url() ?>admin">إضافة فرص التبرع <span><i class="fa fa-plus" aria-hidden="true"></i></span></a> </li> 
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
<script>
function readFile() {
				if (this.files && this.files[0]) {
				var FR= new FileReader();
				FR.addEventListener("load", function(e) {
					//inputF.setAttribute('value', 'defaultValue');
				 document.getElementById("img").src       = e.target.result;
				document.getElementById("b64").setAttribute('value', e.target.result);
				}); 
				FR.readAsDataURL( this.files[0] );
				}
				}
				document.getElementById("image").addEventListener("change", readFile);
</script>

