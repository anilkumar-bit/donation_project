<?php 
//echo "this is view";
?>

<!-- main_content -->

<section class="main_content">
		<div class="container">

			
			<div class="row">
			<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb justify-content-end"> 
						  <li class="breadcrumb-item active" aria-current="page">تيسرت`</li>
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
			<a href="" class="ctm_round_btn ctm-round-btn-with-border  mx-3"> الإغاثة </a>
			<a href="" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المتجر </a>
			<a href="" class="ctm_round_btn ctm-round-btn-with-border mx-3"> فُرجت </a>
			<a href="" class="ctm_round_btn mx-3"> تيسرت </a>
			<a href="" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المشاريع </a>
			<a href="" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الكل </a>
		</div>
	</div>
<!-- relief navigation-section end here -->



<!-- relief card-section start here -->


<section class="relief-header-card my-5">

	<div class="container">
	
		<div class="relief-header-card-section">
					<div class="relief-header-card-section-header d-flex align-items-center justify-content-between">
						<!-- <a href="" class=""></a> -->
						
						
						
						
						<!-- Button trigger modal -->
						<button type="button" class="ctm_round_btn ctm-round-btn-with-border exlamation_ctm_button" data-toggle="modal" data-target="#exampleModal">
						  شروط الاستحقاق  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
						</button>


						
						<h5 class="m-0 p-0">فرص التبرع للمواطنين المعسرين ممن أثقلت كواهلهم الديون وصدر بحقهم أمر تنفيذ قضائي من المحكمة.</h5>
					</div>
		</div>
		<div class="relief-body-card-section text-left">
				<div class="relief-body-card-section-icon d-flex align-items-center justify-content-between">
					<!-- 
					<a  class="popover-btn" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" data-popover-content="test" >
						<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
					</a>

					<div id="popover-content-test" class="hide">
						<a href="" class="text-dark">الفرص المكتملة <img src="image/popover-icon-completed.svg" alt="icon"></a>
					</div>
					-->
					
					<a  href="" class="ctm_round_btn relief-model-btn position-relative" data-toggle="modal" data-target="#reliefmodel">
							تصفية
					<i class="fa fa-sliders" aria-hidden="true"></i>
					</a>
					
					
					<div class="ctm-input-set research-input-btn">
							<input  type="text"  class="form-control" placeholder="رقم الفاتورة" >
							<input type="submit" value="بحث" class="ctm-input-span ctm_round_btn">
					</div>
					
				</div>
				
				<div class="relief-body-card-section-model text-right">
				<!-- Button trigger modal -->
						<!-- Modal -->
						<div class="modal fade" id="reliefmodel" tabindex="-1" role="dialog" aria-labelledby="reliefmodel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header border-0">
								<a  href="" class="ctm_round_btn ctm-round-btn-with-border relief-model-btn position-relative"  data-dismiss="modal" aria-label="Close">
									إغلاق
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
								<h3 class="modal-title" id="exampleModalLongTitle">التصفية</h3>
							  </div>
							  <div class="modal-body  forijat-page-form">
							  
							  
									<form class="row">				
										
										<div class="form-group col-md-4">
												<label>الحالة الاجتماعية</label>
												<select class="form-control">
													  <option>كل واحد</option>
													  <option>متزوج</option>
													  <option>أعزب</option>
													</select>
										  </div>
										  
										  
										  <div class="form-group col-md-4">
											<label>الجنس</label>
											<select class="form-control">
											  <option>الكل</option>
											  <option>ذكر</option>
											  <option>أنثى</option>
											</select>
										  </div>
										  
										  
										  <div class="form-group col-md-4">
													<label>العمر</label>
													<select class="form-control">
														<option>الكل</option>
														<option>أقل من 30</option>
														<option>35 - 30</option>
														<option>40 - 36</option>
														<option>45 - 41</option>
														<option>50 - 46</option>
														<option>55 - 51</option>
														<option>60 - 56</option>	
														<option>أكثر من 60</option>	
													</select>
										  </div>
										  
										  
										  
										  <div class="form-group col-md-4">
												<label>المدة منذ صدور الفاتورة</label>
												<select class="form-control">
													 <option>الكل</option>
													  <option>سنة</option>
													  <option>سنتين فأكثر</option>
												</select>
										  </div>
										  
										  
										  
										  <div class="form-group col-md-4">
												<label>المبلغ المتبقي</label>
												<select class="form-control">
													  <option>الكل</option>
													  <option>أقل من 20,000 ر.س</option>
													  <option>20,000رس - 40,000رس</option>
													  <option>40,000رس - 60,000رس</option>
													  <option>60,000رس - 80,000رس</option>
													  <option>أكثر من 80,000رس</option>
												</select>
										  </div>
										  
										  
										  
										 
										  
										  
										  
										  <div class="form-group col-md-4">
												<label>عدد الأبناء</label>
												<select class="form-control">
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													<option>5 فأكثر</option>
													<option>لا يوجد أبناء</option>
												</select>	
											</div>
										  </div>
										  
										  <h3 class="modal-title mr-3" id="exampleModalLongTitle">ترتيب</h3>
										  
										 <div class="d-flex justify-content-end">
												<div class="form-group col-md-4">
														
														<label>ترتيب حسب</label>
														<select class="form-control">
															  <option>الكل</option>
															  <option>التاريخ: من الأحدث إلى الأقدم</option>
															  <option>التاريخ: من الأقدم إلى الأحدث</option>
															  <option>المبلغ المتبقي: من الأكثر إلى الأقل</option>
															<option>المبلغ المتبقي : من الأقل إلى الأكثر</option>
														</select>	
												
												</div>
										</div>
										  
										 <div class="border-line border-dotted"></div>
										  
										<div class="col-md-12 d-flex justify-content-end">
											  <div class="form-group mr-4">
												<input type="submit" id="submitBtn" value="مسح الكل" class="ctm_round_btn ctm-round-btn-with-border">
											  </div>
											  
											  <div class="form-group">
												<input type="submit" id="submitBtn" value="تصفية" class="ctm_round_btn ">
											  </div>
											  
											  
										</div>
											  
									</form>
							  </div>
							</div>
						  </div>
						</div>
				</div>
		</div>
	</div>
</section>
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


<!---   test data  STARTS ---->

<?php  foreach($tyassarat_data as $tyassarat_datas){ ?>

<div class="col-md-4">
				<div class="custom_post_card mt-4">
					<div class="custom_post_card_box ctm_post_card1">
						
						
						<div class="custom_forijat_text">
							<?php if($tyassarat_datas['description']){ echo substr($tyassarat_datas['description'],'0',70);} ?> </p>
							<div class="custom_card_txt_icon">
								<small><span class="custom_copy_icon ctm_copy_no_icon">
									<?php if($tyassarat_datas['case_no']){ echo $tyassarat_datas['case_no'];} ?>
									رقم الفاتورة: 
								</small>
							</div>
						</div>
					</div>
					
			
	
					<div class="d-flex justify-content-between m-4">	
						<div class="d-flex align-items-center">
								<div class="donut_chart active">
                                     <svg viewBox="0 0 32 32">
                                         <circle r="16" cx="16" cy="16" style="stroke-dasharray: 29 100;"></circle>
                                     </svg>
                                     <div class="donut_center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29%</font></font></div>
                                </div>
						</div>
						<!--
						<div>
							<p class="forijat_ctm_txt">المبلغ المتبقي</p>
							<h5 class="d-flex">
								<small>ر.س</small>
								<span>8,664</span>
								
							</h5>		
						</div>
						-->
						
						<div>
							<p class="forijat_ctm_txt">المبلغ المتبقي</p>
							<h5 class="d-flex">
								<small>ر.س</small>
								<span> <?php if($tyassarat_datas['target_amount']){ echo $tyassarat_datas['target_amount'];} ?></span>
							</h5>		
						</div>
					</div>
					
					<div class="border_dotted"></div>
					
					<div class="d-flex justify-content-between mx-2">
						
							
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						
						<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php if($tyassarat_datas['id']){ echo $tyassarat_datas['id']; } ?>" class="ctm_round_btn">تبرع الآن</a>
					</div>
					
				</div>
			</div>


<?php
}
?>



<!---   test data  ENDS ---->


			
		
			
			
	<!---	<div class="col-md-12 mt-5">
			<nav aria-label="Page navigation "class="ctm-pagination text-center">
				<div class="ctm-pagination-inner">
				  <ul class="pagination justify-content-center m-0">
					<li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
				  </ul>
				</div>
			</nav>
		</div>
		---->
			
		
		</div>
	</div>
</section>
<!-- relief post-card section end here -->













<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header popup_mdl_header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div class="modal-body text-center pb-4">
                       <img  src="<?php echo config_item('asset'); ?>image/imgpsh_fullsize_anim.png" alt="" class="modal-title">
						<h4 class="purple_color mt-5">شروط الاستحقاق المعتمدة من اللجنة الإشرافية</h4>
			
	  
			<div class="popup_ul_li_txt " dir="rtl">
				<ul>
					<li>.أن يكون من مستفيدي الضمان الاجتماعي</li>
					<li>.مبلغ المطالبة أقل من  100 ألف ريال</li>
					<li>.وجود أمر صادر من محكمة التنفيذ</li>
					<li>.عدم وجود أوامر تنفيذية قضائية أخرى</li>
					<li>.مضي سنة كاملة على أمر التنفيذ</li>
				</ul>
			</div>
			
			<div class="popup_ctm_button text-center">
				<a href="" class="ctm_round_btn ">إغلاق</a>
			</div>
			
		</div>
		
    </div>
  </div>
</div>

