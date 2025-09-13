<?php
//die('working on it');
// echo "<pre>";
// print_r($user_campaigns_data);
// echo "</pre>";


?>

<!-- main_content -->

<section class="main_content">
		<div class="container">

			
			<div class="row">
				<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb justify-content-end"> 
						  <li class="breadcrumb-item active" aria-current="page">هدية rahma</li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">فرص التبرع</a></li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">الرئيسية</a></li>
						  </ol>
						</div>
					</div>
				</div>
				</div>
			</div>
			
			
		
			
			
		</div>
</section>



<!-- relief navigation-section start here -->
	<!--<div class="container text-center">
		<div class="relief-navigation d-inline-block px-2 py-3 b-4">
			<a href="<?php// echo base_url(); ?>rescue" class="ctm_round_btn mx-3"> هدية رحمة </a>
			<a href="<?php// echo base_url(); ?>subsidy" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الغالين علينا </a>
			<a href="<?php //echo base_url(); ?>forijat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> زميل العمل </a> -->
	<!--		<a href="<?php// echo base_url(); ?>tyassarat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> تيسرت </a>
			<a href="<?php //echo base_url(); ?>project" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المشاريع </a> -->
			<!--<a href="<?php// echo base_url(); ?>all" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الكل </a> 
		</div>
	</div>-->
<!-- relief navigation-section end here -->



<!-- relief card-section start here -->

<!--
<section class="relief-header-card my-5">

	<div class="container">
	
		<div class="relief-header-card-section">
					<div class="relief-header-card-section-header">
						<h5 class="m-0">.فرص تبرع متنوعة للحالات والمشاريع الإغاثية والإنسانية في شتى دول العالم ومختلف المجالات</h5>
						<img src="<?php //echo config_item('asset'); ?>image/king-salman-egatha.svg" alt="image">
					</div>
		</div>
		<div class="relief-body-card-section text-left">
				<div class="relief-body-card-section-icon d-flex align-items-center">
					<a  class="popover-btn" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" data-popover-content="test" >
						<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
					</a>
					<div id="popover-content-test" class="hide">
						<a href="" class="text-dark">الفرص المكتملة <img src="<?php //echo config_item('asset'); ?>image/popover-icon-completed.svg" alt="icon"></a>
					</div>
					<a  href="" class="ctm_round_btn relief-model-btn position-relative ml-4" data-toggle="modal" data-target="#reliefmodel">
							تصفية
					<i class="fa fa-sliders" aria-hidden="true"></i>
					</a>
				</div>
				
				<div class="relief-body-card-section-model text-right">
				<!-- Button trigger modal -->
						<!-- Modal -->
					<!--	<div class="modal fade" id="reliefmodel" tabindex="-1" role="dialog" aria-labelledby="reliefmodel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header border-0">
								<a  href="" class="ctm_round_btn ctm-round-btn-with-border relief-model-btn position-relative"  data-dismiss="modal" aria-label="Close">
									إغلاق
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
								<h3 class="modal-title" id="exampleModalLongTitle">التصفية</h3>
							  </div>
							  <div class="modal-body">
									<form>
										<div class="form-group">
											<label>المجال</label>
											<div class="d-flex justify-content-end">
												<select class="form-control col-md-4">
												  <option>الكل </option>
												  <option>تعليمي</option>
												  <option>سكني</option>
												  <option>صحي</option>
												  <option>ديني</option>
												  <option>اجتماعي</option>
												  <option>بيئي</option>
												  <option>تقني</option>
												</select>
											</div>
										  </div>
										  <div class="border-line border-dotted"></div>
										  <div class="form-group">
											<input type="submit" id="submitBtn" value="تصفية" class="ctm_round_btn ">
										  </div>
									</form>
							  </div>
							</div>
						  </div>
						</div>
				</div>
		</div>
	</div>
</section> -->
<style>
	.modal-open {
		overflow: visible !important;
		padding: 0 !important;
	}
	.modal-backdrop.show {
		opacity: 0 !important;
	}
	.modal-backdrop {
		position:unset;
	}
</style>
<!-- relief card-section end here -->

<!-- relief post-card section start here -->
<section class="post-card-section">
	<div class="container">
		<div class="row justify-content-end">




        <!---   test data   ---->
      <?php foreach($user_campaigns_data as $user_campaigns_datas){      ?>
<div class="col-md-6 col-lg-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($user_campaigns_datas['campaign_name']){echo $user_campaigns_datas['campaign_name']; }?></h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="<?php if($user_campaigns_datas['campaign_name']){echo $user_campaigns_datas['image']; }?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
							<!--	<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 103,659 </label>
								</div>   -->
								<div class="col">
									<span>تم جمع</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php if($user_campaigns_datas['amount']){echo $user_campaigns_datas['amount']; }?></label>
								</div>
							</div>
							<form action="<?php echo base_url(); ?>Home/campaignOperSingleView?id=<?php if($user_campaigns_datas['id']){ echo $user_campaigns_datas['id']; } ?>" id="user_campaigns_form" method="GET" enctype="multipart/form-data">
								<div class="d-flex mt-3 justify-content-between">
							<!--	<button type="submit" class="btn ctm_round_btn px-3" >
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button> -->
									<button class="btn ctm_round_btn px-3  mx-2 " type="submit" name="submit" id="user_campaigns_btn" onclick="navigateToDonation(this, '/projects/0/11728')">
										تبرع الآن
									</button>
									<div class="ctm-input-set">
										<input  type="text"  name="amt"class="form-control" id="amtt" placeholder="مبلغ التبرع" required>
										<input  type="hidden" name="id" value="<?php echo $user_campaigns_datas['id']; ?>" class="form-control" placeholder="" >
										<span class="ctm-input-span" aria-hidden="true">AED</span>
									</div>
								</div>
							</form>
							 <div class="border-line"></div>
							<div class="text-center">
								<a href="<?php echo base_url(); ?>Home/campaignOperSingleView?id=<?php if($user_campaigns_datas['id']){ echo $user_campaigns_datas['id']; } ?>" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div> 
			
			<?php  
                }
			?>
		
		
		
		
		
		
		<!---   test data   ---->
		
		
		
		
		
		
		
		
		
		
		
		<!---   1   ---->
		
			<!--- <div class="col-md-4">
				<div class="post-card">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5>الحقائب المدرسية للمحتاجين</h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="<?php //echo config_item('asset'); ?>image/R02099.jpg" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 103,659 </label>
								</div>
								<div class="col">
									<span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small>146,341</label>
								</div>
							</div>
							<form>
								<div class="d-flex mt-3 justify-content-between">
								<button type="submit" class="btn ctm_round_btn px-3" >
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<button class="btn ctm_round_btn px-3  mx-2 " type="button" onclick="navigateToDonation(this, '/projects/0/11728')">
										تبرع الآن
									</button>
									<div class="ctm-input-set">
										<input  type="text"  class="form-control" placeholder="مبلغ التبرع" >
										<span class="ctm-input-span" aria-hidden="true">AED</span>
									</div>
								</div>
							</form>
							 <div class="border-line"></div>
							<div class="text-center">
								<a href="" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div> -->
			

			
			
	<!-- 	<div class="col-md-12 mt-5">
			<nav aria-label="Page navigation "class="ctm-pagination text-center">
				<div class="ctm-pagination-inner">
				  <ul class="pagination justify-content-center m-0">
					<li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li> 
				  </ul>
				</div>
			</nav>
		</div>
			-->
		
		</div>
	</div>
</section>
<!-- relief post-card section end here -->








