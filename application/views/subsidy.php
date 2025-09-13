<?php
// echo "<pre>";
// print_r($shop_data);
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
						  <li class="breadcrumb-item active" aria-current="page">الغالين علينا</li>
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
	<div class="container text-center">
		<div class="relief-navigation d-inline-block px-2 py-3 b-4">
			<a href="<?php echo base_url(); ?>rescue" class="ctm_round_btn ctm-round-btn-with-border mx-3"> هدية رحمة </a>
			<a href="<?php echo base_url(); ?>subsidy" class="ctm_round_btn  mx-3"> الغالين علينا </a>
			<a href="<?php echo base_url(); ?>forijat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> زميل العمل </a>
	<!--		<a href="<?php echo base_url(); ?>tyassarat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> تيسرت </a>
			<a href="<?php echo base_url(); ?>project" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المشاريع </a> -->
			<a href="<?php echo base_url(); ?>all" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الكل </a> 
		</div>
	</div>
<!-- relief navigation-section end here -->



<!-- relief card-section start here -->


<section class="relief-header-card  subsidy-header-card my-5">
	<div class="container">
		<div class="relief-header-card-section">
					<div class="relief-header-card-section-header">
						<h5 class="m-0 p-0">فرص تبرّع فردية للحالات الأشد احتياجاً في مختلف المجالات، تتيح للجميع امكانية دعمها بشكل كامل أو جزئي</h5>
					</div>
		</div>
	</div>
</section>

<!-- relief card-section end here -->

<!-- relief post-card section start here -->
<section class="post-card-section">
	<div class="container">
		<div class="row justify-content-end">

		<!---   test_shop_data   ---->
		<?php 
		foreach($shop_data as $shop_datas)
		{ 
		?>
		<div class="col-md-6 col-lg-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($shop_datas['title']){ echo $shop_datas['title']; } ?></h5>
					</div>
					<div class="post-card-details position-relative">
						<a href="" class="d-block">
							<img src="<?php if($shop_datas['image']){ echo $shop_datas['image']; }   ?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:80%;">
									80%
								</div>
							</div>
						</a>
						
					<!---	<div class="img-subsidy-price d-flex">
								<small>AED</small>
								<span class="mx-2">300.00</span>
								<span>سعر الوحدة</span>
							</div> ---->
							
							<div class="row post-card-details-inner mt-4">
							<!---	<div class="col">
									<span>المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">وحدة</small> 20428 </label>
								</div>---->
								<div class="col">
									<span>وحدة</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php echo   $shop_datas['target_amount'];   ?></label>
								</div>
							</div>
							<form action="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php if($shop_datas['id']){ echo $shop_datas['id']; } ?>" id="subsidy_form" method="GET" enctype="multipart/form-data">
								<div class="d-flex align-items-center justify-content-between mt-3">
									 <div class="ctm-input-set">
											<input  type="text" name="amt" id="amnt" class="form-control" placeholder="المبلغ" >
											<input  type="hidden" name="id" value="<?php echo $shop_datas['id'] ?>" class="form-control" placeholder="" >
											<span class="ctm-input-span" aria-hidden="true">AED</span>
										</div>
										<div class="ctm-qty d-flex align-items-center ml-3">
											<!--<span class="minus"> <i class="fa fa-minus" aria-hidden="true"></i> </span>-->
										<!--	<input type="number" name="amt" id="amnt" class="count form-control ctm-qty-input text-center" name="qty" value="0" min="0">-->
											
											<!--<span class="plus "><i class="fa fa-plus" aria-hidden="true"></i></span>-->
										</div> 
								</div>
								<div class="d-flex mt-3 justify-content-between">
							<!--	<button type="submit" class="btn ctm_round_btn px-3" >
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button> -->
									<button class="btn ctm_round_btn px-3  ml-3 w-100 " type="submit" name="submit" id="subsidy_btn" onclick="">
										تبرع الآن
									</button>
								</div>
							</form>
							 <div class="border-line"></div>
							<div class="text-center">
								<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php if($shop_datas['id']){ echo $shop_datas['id']; } ?>" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div>
			<?php
		    }
			?>
		<!---   test_shop_data   ---->
		
		
		
		
		
		
		
		<!---   1   ---->
		
					<!---   <div class="col-md-4">
				<div class="post-card">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5>كفالة الأيتام</h5>
					</div>
					<div class="post-card-details position-relative">
						<a href="" class="d-block">
							<img src="<?php // echo config_item('asset'); ?>image/P12626.jpg" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:80%;">
									80%
								</div>
							</div>
						</a>
						
						<div class="img-subsidy-price d-flex">
								<small>AED</small>
								<span class="mx-2">300.00</span>
								<span>سعر الوحدة</span>
							</div>
							
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">وحدة</small> 20428 </label>
								</div>
								<div class="col">
									<span>وحدة</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small>79572</label>
								</div>
							</div>
							<form>
								<div class="d-flex align-items-center justify-content-between mt-3">
									 <div class="ctm-input-set">
											<input  type="text"  class="form-control" placeholder="المبلغ" >
											<span class="ctm-input-span" aria-hidden="true">AED</span>
										</div>
										<div class="ctm-qty d-flex align-items-center ml-3">
											<span class="minus"> <i class="fa fa-minus" aria-hidden="true"></i> </span>
											<input type="number" class="count form-control ctm-qty-input text-center" name="qty" value="0" min="0">
											<span class="plus "><i class="fa fa-plus" aria-hidden="true"></i></span>
										</div> 
								</div>
								<div class="d-flex mt-3 justify-content-between">
								<button type="submit" class="btn ctm_round_btn px-3" >
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<button class="btn ctm_round_btn px-3  ml-3 w-100 " type="button" onclick="">
										تبرع الآن
									</button>
								</div>
							</form>
							 <div class="border-line"></div>
							<div class="text-center">
								<a href="" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div>
			
		<!-- <div class="col-md-12 mt-5">
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
		</div>  -->
			
		
		</div>
	</div>
</section>
<!-- relief post-card section end here -->






