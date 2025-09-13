<?php 

?>
<!-- main_content start here -->
<section class="main_content">
		<div class="container">

			
			<div class="row">
					<div class="col-12">
						<div class="content">
							<div aria-label="breadcrumb" >
							  <ol class="breadcrumb justify-content-end"> 
							  <li class="breadcrumb-item active" aria-current="page">اللجنة الشرعية</li>
								 <li class="breadcrumb-item"><a href="#">عن rahma</a></li>
								<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
							  </ol>
							</div>
						</div>
					</div>
				<div class="col-md-12">
					<div class="heading_with_text_cnt text-right">
						
						<h3>هدية rahma</h3>
						<p>خدمة لتقديم التبرعات عن الغير كهدية للأهل والأصدقاء، في مختلف المناسبات الاجتماعية</p>
							
					</div>
				</div>
			</div>
			
			
		
			
			
		</div>
</section>


<!-- main_content end here -->


<!-- wizard_section start here -->

<div class="wizard_section">
	<div class="container">
		<div class="wizard_custom_content d-flex justify-content-around my-2">
			
			<div class="wizard_item order_1 d-flex align-items-center">
				<p class="m-0">أدخل البيانات</p>
					<div class="count_txt">
						<h3>3</h3>
					</div>
			</div>
			
			<div class="wizard_item order_2 d-flex align-items-center">
				<p class="m-0">أدخل البيانات</p>
					<div class="count_txt">
						<h3>2</h3>
					</div>
			</div>
			
			<div class="wizard_item order_3 d-flex align-items-center">
				<p class="m-0">اختر نوع الهدية</p>
					<div class="count_txt">
						<h3>1</h3>
					</div>
			</div>

		</div>
	</div>
</div>

	<!-- wizard_section end here -->
	
	<!-- form_fill_section start here -->

	<div class="form_fill_section">
		<div class="container">
		
			<div class="form_full_sec">
			<form   action= "<?php echo base_url(); ?>User/giftsubmit" method="GET" enctype="multipart/form-data">
				<div class="row form_fill_row">
				
					<div class="col-md-6 img_padding_set pr-5">
							<div class="form_img">
								<img src="<?php echo config_item('asset'); ?>image/99.png" alt="" class="custom_form_img w-100 rounded">
							</div>
					</div>
				
					<div class="col-md-6 pl-5 form_custom_content">
						<div class="input_form_content">
						
						        
								<div class="row justify-content-end"   >
								
								
									<div class="form-group text-right col-md-12">
										<label for="text" >نوع الهدية</label><br>
										<input type="text" name="gifttype" class="form-control" value="<?php if(!empty($gifttype)){ echo $gifttype; }?>" required>
									</div>
									
									<div  class="form-group text-right  col-md-12"> 
										<label>مجال التبرع</label>
										<select class="custom-select form-control" name="donation_area" required>
												<!--<option value="0">--اختر--</option>	 --> 
											<option value="رعاية الأيتام" selected >رعاية الأيتام</option>
											<option value="الرعاية الصحية">الرعاية الصحية</option>
											<option value="السقيا والآبار">السقيا والآبار</option>
										</select>
									</div>
									
									<div  class="form-group text-right  col-md-12"> 
										<label>اختر البطاقة</label><br>
							
											<div class="check_box_div d-flex justify-content-end">
													<div class="form-check custom_radio_btn image_radio_btn">
														
														<input class="form-check-input" type="radio" name="card_type" value="purplecard" id="flexRadioDefault1"  required>
														<label class="form-check-label" for="flexRadioDefault1"><img src="<?php echo config_item('asset'); ?>image/99.png" alt="" width="76px"></label>
													</div>
													
													<!--<div class="form-check custom_radio_btn">
														<label class="form-check-label" for="flexRadioDefault2"><img src="<?php //echo config_item('asset'); ?>image/99.png" alt="" width="76px"></label>
														<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
													</div>
													
													<div class="form-check custom_radio_btn">
														<label class="form-check-label" for="flexRadioDefault3"><img src="<?php //echo config_item('asset'); ?>image/99.png" alt="" width="76px"></label>
														<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
													
													</div>
													 --> 
											</div>	
									</div>
									
									<div  class="form-group text-right  col-md-12"> 
										<label>المبلغ</label><br>
										
											<div class="check_box_div d-flex justify-content-end mb-2">
													<div class="form-check custom_radio_btn ctm_price_btn">
														<label class="form-check-label" for="value200">200</label>
														<input class="form-check-input" type="radio" name="price_btn" id="value200">
													</div>
													
													<div class="form-check custom_radio_btn ctm_price_btn">
														<label class="form-check-label" for="value100">100</label>
														<input class="form-check-input" type="radio" name="price_btn" id="value100" checked>
													</div>
													
													<div class="form-check custom_radio_btn ctm_price_btn">
														<label class="form-check-label" for="value50">50</label>
														<input class="form-check-input" type="radio" name="price_btn" id="value50" checked>
													 
													</div>
											
											</div>	
											
											<div class="check_box_div d-flex justify-content-end">
												
											<div class="input-group input-group-md mb-3">
													<div class="input-group-prepend">
														<span class="input_text" id="inputGroup-sizing-sm">AED</span>
													</div> 
													<input type="" class="form-control price_custom_control" name="amount" placeholder="مبلغ آخر" aria-label="Small" aria-describedby=	"inputGroup-sizing-sm" required>
												</div>
											</div>	
											
											<div class="hide_amt_lable">
												<label>إخفاء المبلغ</label>
												<input class="" type="checkbox" name="hide_btn" id="valuehide">
											</div>
										
									</div>
									
									<div  class="form-group text-right  col-md-6"> 
										<div class="form-group text-right ">
											<label for="phone" >رقم جوالك</label><br>
											
											<div class="input-group mb-3 text-right">
											  <div class="input-group-prepend">
													<span class="input-group-text">+966</span>
												</div>
												<input type="text" name="user_mobile_number" class="form-control" placeholder="5XXXXXXXX"required>
												<small  class="text-danger w-100">رقم جوالك مطلوب </small>
											</div>
											
											
										</div>
									</div>
									
									<div  class="form-group text-right  col-md-6"> 
										<div class="form-group text-right ">
											<label for="name" >اسمك</label><br>
											<input type="text" name="name" class="form-control" placeholder="اسمك" required>
										</div>
										
										<div class="hide_amt_lable">
												<label class="label_color">إرسال نسخة إلى جوالي</label>
												<input class="" type="checkbox" name="hide_btn" id="valuehide" >
											</div>
									</div>
									
										<div  class="form-group text-right  col-md-6"> 
											<div class="form-group text-right ">
												<label for="gift" >اسم المهدى إليه</label><br>
												<input type="text" name="gifted" class="form-control" placeholder="اسم المهدى إليه" required>
											</div>
										</div>
										
										<div  class="form-group text-right  col-md-12"> 
											<div class="form-group text-right ">
												<label for="mobile" >رقم جوال المهدى إليه</label><br>
												<div class="select_option_content">
													<div class="select_ctm d-flex">
															<select class="mdb-select md-form custom-select form-control"  searchable="Search here.." name="country_name" required>
											                    <option value="0">--اختر--</option>>
																<option value="USA" selected>USA</option>
																<option value="Germany">Germany</option>
																<option value="France">France</option>
																<option value="Poland">Poland</option>
																<option value="Japan">Japan</option>
															</select>
														<input type="text" name= "giveaway_phone" class="form-control" placeholder="رقم جوال المهدى إليه" required>
													</div>
												</div>
											</div>
										</div>
									
								</div>
								<!--
								Form ends here 
								--> 
						</div>
					</div>
					
				</div>
				<div class="border-line"></div>
				
				<div class="d-flex justify-content-between">
					<div class="gift_bottom_button">
						<a href="" class="ctm_round_btn ctm-round-btn-with-border" >السابق</a>
					</div>
					
					<div class="gift_bottom_button">
						<button type="submit" name= "submit" href="<?php echo base_url('giftsubmit'); ?>" class="ctm_round_btn" >التالي</button>
					</div>
				</div>
				
			</form>
			
			</div>
		</div>
	</div>
	
	
		
		
	<!-- form_fill_section end here -->