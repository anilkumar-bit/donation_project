
<?php
/* echo "<pre>";
print_r($relesed);
echo "</pre>";
?>
<?php
echo "<pre>";
print_r($facilitated);
echo "</pre>";
?>
<?php
echo "<pre>";
print_r($project);
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
						  <li class="breadcrumb-item active" aria-current="page">الكل</li>
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
			<a href="<?php echo base_url(); ?>subsidy" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الغالين علينا </a>
			<a href="<?php echo base_url(); ?>forijat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> زميل العمل </a>
	<!--		<a href="<?php echo base_url(); ?>tyassarat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> تيسرت </a>
			<a href="<?php echo base_url(); ?>project" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المشاريع </a> -->
			<a href="<?php echo base_url(); ?>all" class="ctm_round_btn mx-3"> الكل </a> 
		</div>
	</div>
<!-- relief navigation-section end here -->



<!-- relief card-section start here -->


<!-- relief card-section end here -->

<!-- relief post-card section start here -->
<section class="post-card-section">
	<div class="container">
		<div class="row justify-content-end">

		<!---   1   ---->
		
			<div class="col-md-12 mt-5">
				<h4 class="purple_color"> المشاريع </h4>
				<p>
               .فرص تبرع متنوعة تصنع أثراً مستداماً وتحقق أثراً اجتماعياً واسعاً للحالات الأشد احتياجاً
            </p>
			</div>
			<?php
			//if($relif){
			if($project){
				foreach($project as $data){
			?>
			<div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($data['title']){ echo $data['title']; }?></h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
						
							<img src="<?php if($data['image']){ echo $data['image']; }?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<!--span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 103,659 </label-->
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php if($data['target_amount']){ echo $data['target_amount']; }?></label>
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
								<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php echo $data['id']; ?>" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div>
			<?php
			}
			}
			?>
			
			
			
			
			
			<div class="col-md-12 my-4 text-center">
				<a href="<?php echo base_url(); ?>project" class="ctm_round_btn">عرض المزيد من المشاريع</a>
			</div>
			
			<div class="col-md-12 mt-4">
				<h4 class="purple_color">المتجر</h4>
				<p>
                .فرص تبرّع فردية للحالات الأشد احتياجاً في مختلف المجالات، تتيح للجميع إمكانية دعمها بشكل كامل أو جزئي
            </p>
			</div>
			
			
			<?php
			if($shop){
				foreach($shop as $data){
			?>
			<div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($data['title']){ echo $data['title']; }?></h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
						
							<img src="<?php if($data['image']){ echo $data['image']; }?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<!--span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 103,659 </label-->
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php if($data['target_amount']){ echo $data['target_amount']; }?></label>
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
								<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php echo $data['id']; ?>" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div>
			<?php
			}
			}
			?>
		
			<div class="col-md-12 my-4 text-center">
				<a href="<?php echo base_url(); ?>subsidy" class="ctm_round_btn">عرض المزيد من المشاريع</a>
			</div>
			
			
			<div class="col-md-12 mt-5">
				<h4 class="purple_color"> إغاثة</h4>
				<p>
              مساهمة في المشاريع الإغاثية والأعمال الإنسانية في مختلف دول العالم
            </p>
			</div>
			<?php
			//if($relif){
			if($relif){
				foreach($relif as $data){
			?>
			<div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($data['title']){ echo $data['title']; }?></h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
						
							<img src="<?php if($data['image']){ echo $data['image']; }?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<!--span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 103,659 </label-->
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php if($data['target_amount']){ echo $data['target_amount']; }?></label>
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
								<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php echo $data['id']; ?>" class="text-dark">تفاصيل الحالة</a>
							</div>
					</div>
				</div>
			</div>
			<?php
			}
			}
			?>
			
			
			
			
			
			<div class="col-md-12 my-4 text-center">
				<a href="<?php echo base_url(); ?>rescue" class="ctm_round_btn">عرض المزيد من المشاريع</a>
			</div>
			
			
			
			
			
			
			<div class="col-md-12 mt-4">
				<h4 class="purple_color">فرجت</h4>
				<p>فُرجت هي خدمة لمساعدة سجناء الحقوق المالية للتعجيل من عودتهم إلى منازلهم</p>
			</div>
			
				<!---   7  ---->
			
			<!---  <div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5>الأطراف الصناعية للمتضررين</h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="image/R12457.jpg" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:45%;">
									45%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 258,894 </label>
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 209,856 </label>
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
			</div> ---->
			
			
			
			
			
			<!---   8  ---->
			
			<!---  <div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5>عمليات القلب الجراحية للأطفال</h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="image/R12663.jpg" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:32%;">
									32%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 342,215 </label>
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 157,785 </label>
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
			</div> --->
			
			
			
			
			<!---   9   ---->
			
			<!---  <div class="col-md-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5>جلسات غسيل الكلى للمحتاجين</h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="image/R12371.jpg" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:47%;">
									47%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>تم جمع</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 148,862 </label>
								</div>
								<div class="col">
									<span>المبلغ المتبقي</span>
									<label class="d-flex justify-content-end m-0"> <small class="mr-2 text-nowrap">AED</small> 130,138 </label>
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
			
			
			
			 <!-- <div class="col-md-12 mt-4 text-center">
				<a href="" class="ctm_round_btn">عرض المزيد من المشاريع</a>
			</div> -->
			
			


			
		
		</div>
	</div>
</section>
<!-- relief post-card section end here -->

