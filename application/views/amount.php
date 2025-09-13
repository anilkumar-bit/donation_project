<?php
	                        
?>


<!-- main_content -->

<section class="main_content">
		<div class="container">

			
			<div class="row">
				<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb justify-content-end"> 
						  <li class="breadcrumb-item active" aria-current="page">تجهيزات المدارس المتضررة</li>
						  <li class="breadcrumb-item"><a href="#" class="color_purple">الإغاثة</a></li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">فرص التبرع</a></li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">الرئيسية</a></li>
						  </ol>
						</div>
					</div>
				</div>
			</div>
			
			<div class="card_full_part_section">
				<div class="row">
				
							<div class="col-md-6">
									<div class="card_first_section">
										<h5 class="mb-3">مبلغ التبرع</h5>
										<div class="card_custom_content">
										<!-- form starts  here --->
											<form class="" action="<?php echo base_url(); ?>User/payment" method="GET" enctype="multipart/form-data">
											
												<div class="d-flex justify-content-end">
													<!-- <div class="form-group mx-1">		
                                     
															 <div class="ctm_input_set">
																	<input  type="text"  class="form-control" value="0" >
																	<span class="ctm_input_span" aria-hidden="true">AED</span>
															</div>
																					
													</div>--->
																				  
												<!--	<div class="form-group mx-1">														
														<div class="ctm_input_set">
																<input  type="text"  class="form-control" value="100"  >
																<span class="ctm_input_span" aria-hidden="true">AED</span>
														</div>
													</div>--->
																				  
												<!--	<div class="form-group mx-1">														
															<div class="ctm_input_set">
																<input  type="text"  class="form-control"  value="50" >
																<span class="ctm_input_span" aria-hidden="true">AED</span>
															</div>
													</div>--->
																				  
													<div class="form-group mx-1">														
															<div class="ctm_input_set">
																<input  type="text" name="amount" class="form-control"  value="<?php if($amt){echo $amt ; } ?>">
																<span class="ctm_input_span" aria-hidden="true">AED</span>
															</div>
													</div>
																				  
												 </div> 
												 
												 <div class="">
													<div class="d-flex justify-content-between align-items-center">
														<img src="<?php echo config_item('asset'); ?>image/icons-gift-purple.png" alt="">
													<div class="form-check">
														<label class="form-check-label mr-4" for="defaultCheck1">
													أريد جعل هذه المساهمة هدية
														</label>
														<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													</div>
													</div>
												 </div>
												 
												 <div class="my-4">
													<input type="text" class="form-control" name="name" placeholder="اسم المرسل" value="" required >
												</div> 
											<!--	hidden fields starts -->
												<div class="my-4">
													<input type="hidden" class="form-control" name="gifttype" value=" " placeholder="اسم المرسل" >
												</div>
												
												<div class="my-4">
													<input type="hidden" class="form-control" name="phone" value=" " placeholder="اسم المرسل" >
												</div>
												
												<div class="my-4">
													<input type="hidden" class="form-control" name="gifted" value=" " placeholder="اسم المرسل">
												</div>
												
												<div class="my-4">
													<input type="hidden" class="form-control" name="donation_area" value=" " placeholder="اسم المرسل">
												</div>
												
												<div class="my-4">
													<input type="hidden" class="form-control" name="user_mobile_number" value=" " placeholder="اسم المرسل">
												</div>
												
												<div  class="my-4">
													<input type="hidden" class="form-control" name="card_type" placeholder="اسم المهدى إليه">
												</div>
												
											 <!--	hidden fields ends -->
												<div  class="my-4">
													<input type="text" class="form-control" name="gifted" value=""  placeholder="اسم المهدى إليه" required>
												</div>
											
											<div class="select_option_content">
														<div class="select_ctm d-flex">
																<select name="country_name" class="mdb-select md-form custom-select form-control"searchable="Search here.." required>
																	<option value="Dubai+971"selected>Dubai +971 </option>
																	<option value="Sudan+249" >Sudan +249</option>
																	<option value="America">America +1</option>
																	<option value="Egypt">Egypt +20</option>
																	<option value="Sudan+211">Sudan +211</option>
																	<option value="Morocco">Morocco +212</option>
																</select>
															<input type="text" name="giveaway_phone" class="form-control" placeholder="جوال المهدى إليه" value="" required>
														</div>
												</div>
												
												<div class="d-flex text-center mt-4 ">
													<div>
														<img src="<?php echo config_item('asset'); ?>image/icon-shopping_cart.png" alt="">
													</div>
													<div class="d-flex justify-content-center w-100">
													<!-- 	<a href="" class="ctm_radius_btn">تبرع الآن</a> --->
														<input type="submit" class="ctm_round_btn" name="submit" value="تبرع الآن">
													 </div>
												</div>
												
										</form>
										<!-- form ends here --->
									</div>
								
								
								<div class="card_items  py-3 my-3">
									<div class="d-flex justify-content-center align-items-center">
										
										<span>آخر عملية تبرع قبل</span>
										<span class="span_card_amt mx-2">1</span>
										<span>دقيقة</span>
										<img src="<?php echo config_item('asset'); ?>image/icon-hand.png" alt="" class="card_icon_shadow">
									</div>
								</div>
								
								<div class="card_items py-3 my-3">
									<div class=" d-flex justify-content-center align-items-center">
										
										<span class="span_card_amt">عدد المستفيدين</span>
										<span class="span_card_amt mx-2">851</span>
										<span>حتى الآن</span>
										<img src="<?php echo config_item('asset'); ?>image/icon-users.png" alt="" class="card_icon_shadow">
									</div>
									
									<div class="d-flex justify-content-center mt-2">
										<span class="span_card_amt">مستفيد</span>
										<span class="span_card_amt mx-2">1600</span>
										<span class="span_card_amt mr-2">العدد المستهدف</span>
									</div>
								</div>
								
							</div>
						</div>		
								<?php if(!empty($single_oppr_data))  {   
								
								?>
								<div class="col-md-6 ">
									
										<div class="card_second_section">
								<h5 class="px-4 pt-2 m-0"><?php if($single_oppr_data[0]['title']){echo $single_oppr_data[0]['title']; } ?></h5>
												<div class="p-3">
													<img src="<?php if($single_oppr_data[0]['image']){echo $single_oppr_data[0]['image']; } ?>" alt="" class="card_second_sec_img">
													<p class="pt-3 m-0"><?php if($single_oppr_data[0]['description']){echo $single_oppr_data[0]['description']; } ?></p>
												</div>
											
										
												
												<div class="card_share_icon d-flex justify-content-between align-items-center mb-3">
													
														<button class="custom_share_icon">
															<i class="fa fa-share-alt mr-1" aria-hidden="true"></i>شارك الرابط
														</button>
													
														<h5 class="span_card_amt mr-2">R02143<span class="ml-2">رقم الحالة</span></h5>
												</div>
												
												<div class="row p-3">
													
													<div class="col-md-6">
															<!--span class="span_card_amt">تم جمع</span>
															<div class="d-flex justify-content-end">	
															<small>AED</small>
															<h5>146,586</h5>
															</div--> 
														
													</div>
													
													<div class="col-md-6">
														
															<span class="span_card_amt ">تم جمع</span>
															<div class="d-flex justify-content-end align-items-center">
																<small>AED</small>
																<h5 class="m-0"><?php if($single_oppr_data[0]['target_amount']){echo $single_oppr_data[0]['target_amount']; }  ?></h5>
															</div>
													</div>
													
												</div>	
													<div class="range_slider_part">	
														<div class="range_slider_content">
															54%
														</div>
													</div>
													
													<div class="border-line"></div>
													
													<div class="second_sec_bottom_part">
																<div class="d-flex align-items-center justify-content-between">
																	<div>
																		<div class="span_card_amt">الشريك المنفذ</div>
																		<div class="">مركز الملك سلمان للإغاثة والأعمال الإنسانية</div>
																	</div>
																	
																	<div class="ctm_card_sec_img ml-1 rounded">
																	<img src="<?php echo config_item('asset'); ?>image/download.png" alt="" width="150px" height="70px" class="rounded">
																	
																	</div>
																</div>
																
																<div class="d-flex flex-column mb-2">
																	<span class="span_card_amt">عدد المستفيدين</span>
																	<span>1600 مستفيد</span>
																</div>
																
																<div class="d-flex flex-column mb-2">
																	<span class="span_card_amt">الدول المستفيدة</span>
																	<span>السودان ,اليمن ,تشاد ,سوريا ,طاجيكستان ,مالي</span>
																</div>
														
													</div>
										
									</div>		
								</div>
								<?php   } 
								
								if(!empty($campaign_data)){
									 ?>
									   	<div class="col-md-6 ">
									
										<div class="card_second_section">
												<h5 class="px-4 pt-2 m-0"><?php if($campaign_data[0]['campaign_name']){echo $campaign_data[0]['campaign_name']; }?></h5>
												<div class="p-3">
													<img src="<?php if($campaign_data[0]['image']){echo $campaign_data[0]['image']; } ?>" alt="" class="card_second_sec_img">
													<p class="pt-3 m-0"><?php if($campaign_data[0]['donation_area']){echo $campaign_data[0]['donation_area']; } ?></p>
												</div>
											
										
												
												<div class="card_share_icon d-flex justify-content-between align-items-center mb-3">
													
														<button class="custom_share_icon">
															<i class="fa fa-share-alt mr-1" aria-hidden="true"></i>شارك الرابط
														</button>
													
														<h5 class="span_card_amt mr-2">R02143<span class="ml-2">رقم الحالة</span></h5>
												</div>
												
												<div class="row p-3">
													
													<div class="col-md-6">
															<!--span class="span_card_amt">تم جمع</span>
															<div class="d-flex justify-content-end">	
															<small>AED</small>
															<h5>146,586</h5>
															</div--> 
														
													</div>
													
													<div class="col-md-6">
														
															<span class="span_card_amt ">تم جمع</span>
															<div class="d-flex justify-content-end align-items-center">
																<small>AED</small>
																<h5 class="m-0"><?php if($campaign_data[0]['amount']){echo $campaign_data[0]['amount']; }  ?></h5>
															</div>
													</div>
													
												</div>	
													<div class="range_slider_part">	
														<div class="range_slider_content">
															54%
														</div>
													</div>
													
													<div class="border-line"></div>
													
													<div class="second_sec_bottom_part">
																<div class="d-flex align-items-center justify-content-between">
																	<div>
																		<div class="span_card_amt">الشريك المنفذ</div>
																		<div class="">مركز الملك سلمان للإغاثة والأعمال الإنسانية</div>
																	</div>
																	
																	<div class="ctm_card_sec_img ml-1 rounded">
																	<img src="<?php echo config_item('asset'); ?>image/download.png" alt="" width="150px" height="70px" class="rounded">
																	
																	</div>
																</div>
																
																<div class="d-flex flex-column mb-2">
																	<span class="span_card_amt">عدد المستفيدين</span>
																	<span>1600 مستفيد</span>
																</div>
																
																<div class="d-flex flex-column mb-2">
																	<span class="span_card_amt">الدول المستفيدة</span>
																	<span>السودان ,اليمن ,تشاد ,سوريا ,طاجيكستان ,مالي</span>
																</div>
														
													</div>
										
									</div>		
								</div>
									   
									   <?php
								}
								
								?>
								
				</div>
			</div>
			
			
		</div>
</section>

<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
$("[data-toggle=popover][data-container=body]").each(function(i, obj) {
$(this).popover({
  html: true,
  content: function() {
    var id = $(this).attr('data-popover-content')
    return $('#popover-content-' + id).html();
  }
});

});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
