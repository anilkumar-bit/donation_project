
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
					<div class="col-md-8 col-lg-8 col-xl-9">
						<div class="account_section_inner_part p-5">
							<h3>العنوان التجريبي</h3>
							
							<form class="pt-4 row text-center">
								<div class="form-group col-md-12">
									<img src="<?php echo config_item('asset'); ?>image/Donation.png" alt="image" width="200px">
								</div>
								<div class="col-md-12">						
									<p>هناك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم </p>
								</div>
								 <div class="form-group m-0 col-md-12 ">
									<a href="" class="ctm_round_btn">تبرع الآن</a>
								 </div> 
							</form>
							
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-xl-3">
					<?php
					$this->load->view('sidebar'); 
					?>
					
					</div>
					
				</div>
		</div>
	</div>
</section>

<!-- section account page end here   -->