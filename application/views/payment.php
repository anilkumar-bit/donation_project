<?php 
if(!empty($_COOKIE['last_page_url'])){
	unset($_COOKIE['last_page_url']);
	setcookie('last_page_url', '', time() - 3600, '/');
}
//print_r($_COOKIE);		
?>

<!--main_content start here-->

<section class="main_content">
		<div class="container">
			<div class="row">
					<div class="col-12 pt-5">
						<div class="content pt-2">
							<h3>الدفع</h3>
						</div>
					</div>
			</div>
		</div>
</section>


<!--main_content end here-->


<!--payment_section_content start here-->


<div class="payment_section">
	<div class="container">
		<div class="payment_sec_content">
			<div class="row payment_row_flex">
				<div class="col-md-6 pt-2">
					<div class="payment_first_sec">
					
					<!--form starts here-->
						<form class="p-4" method="POST" action="<?php echo base_url(); ?>User/paymentSubmit" enctype="multipart/form-data">
							<div class="form_group my-2">
								<label>الاسم المسجل على البطاقة</label>
								<input type="text" class="form-control" >
								<small class="text-danger">الرجاء إدخال الاسم بالكامل</small>
							</div>
							
							<div class="form_group mt-4">
								<label>رقم البطاقة</label>
								<div class="form_type">
									<input type="text" class="form-control input_ctm_img" >
									<div class="card_icon">
										<img src="<?php echo base_url(); ?>./image/visa dimmed.svg" class="w-30px ml-1" alt="">
									</div>
											<small class="text-danger">الرجاء إدخال الاسم بالكامل</small>
								</div>
							</div>
								<div class="debit_card_details d-flex">
									<div class="form_group mt-4 col-md-5">
										<label>رمز الأمان - CVV</label>
										<div class="card_validity">
												<input type="text" class="form-control"  placeholder="CVV">
												<small class="text-danger">الرجاء إدخال رمز أمان صحيح</small>
										</div>
										
									</div>
									
									<div class="form_group mt-4 col-md-7">
										<label>رقم البطاقة</label>
										<div class="card_validity d-flex">
												<input type="text" class="form-control"  placeholder="YY">
												<input type="text" class="form-control"  placeholder="MM">
										</div>
										<small class="text-danger">الرجاء إدخال تاريخ صحيح</small>
										
									</div>
								</div>
								
							<div class="border-line"></div>
							
							<div class="payment_image_with_text d-flex justify-content-around align-items-center text-center mt-5">
								<img src="./image/rounded-applepay.svg" alt="" class="mx-1">
								<img src="./image/rounded-mada.svg" alt="" class="mx-1">
								<img src="./image/rounded-visa.svg" alt="" class="mx-1">
								<img src="./image/rounded-mastercard.svg" alt="" class="mx-1">
								<span>خيارات الدفع المتاحة:</span>
							</div>
							
							<div class="mt-3 ">
								<small  class="text-dark">
										<span>قم</span>
										<a href="" class="purple_color_txt">بتسجيل الدخول</a>
										<span> لتتمكن من حفظ البطاقة</span>
								</small>
							</div>
							
							<div class="mt-3 text-center">
								<span>بإتمام التبرع أنت توافق على</span>
								<a href="" class="purple_color_txt">سياسات التبرع</a>
							</div>
							<!--form  hidden fields  start here-->
							<input type="hidden" id="custId" name="gifttype" value="<?php echo $q_data['gifttype'] ; ?>">
							<input type="hidden" id="custId" name="donation_area" value="<?php echo $q_data['donation_area'] ; ?>">
							<input type="hidden" id="custId" name="card_type" value="<?php echo $q_data['card_type'] ; ?>">
							<input type="hidden" id="custId" name="amount" value="<?php echo $q_data['amount'] ; ?>">
							<input type="hidden" id="custId" name="user_mobile_number" value="<?php echo $q_data['user_mobile_number'] ; ?>">
							<input type="hidden" id="custId" name="name" value="<?php echo $q_data['name'] ; ?>">
							<input type="hidden" id="custId" name="gifted" value="<?php echo $q_data['gifted'] ; ?>">
							<input type="hidden" id="custId" name="country_name" value="<?php echo $q_data['country_name'] ; ?>">
							<input type="hidden" id="custId" name="giveaway_phone" value="<?php echo $q_data['giveaway_phone'] ; ?>">
							<!--payment hidden fields ends here-->
							
							
							
							
							<!--payment button start here-->
							<div class="ctm_radius_btn mt-4">
									<button type="submit" name="submit" class="w-100" value="submit">إتمام عملية التبرع</button>
							</div>
							
							
							
						</form>	
							<!--form ends here-->
					</div>
				</div>
				
				<div class="col-md-6 mb-3 pt-2">
					<div class="payment_second_sec">
						<div class="payment_info_content p-3">
								<p>المبلغ الإجمالي</p>
							<div class="d-flex justify-content-end align-items-center">
								<span class="mr-2">AED</span>
								<h3 class="m-0"><?php if(!empty($q_data)){ echo $q_data['amount'];} ?></h3>
							</div>
						</div>
						
						<div class="custom_gift_part p-3">
							<div class="gift_text d-flex align-items-center">
									<span>AED</span>
									<h3 class="m-0"><?php if(!empty($q_data)){ echo $q_data['amount'];} ?></h3>
							
								<div class="gift_price d-flex justify-content-end d-block w-100 align-self-center text-dark">
									<p>الهدية</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--payment_section_content end here-->
