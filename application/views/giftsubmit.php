<?php




$qs = http_build_query($form_data);
// echo "<pre>";
// print_r($qs);
// echo "</pre>";
// $new_qs = explode(' ', $qs);
// echo "hello";
// echo "<pre>";
// print_r($new_qs);
// echo "</pre>";
 $status = $this->primary->is_logged_in();
		 if (!$status) {
		   $currentURL = current_url();
			$params   = $_SERVER['QUERY_STRING'];
			$fullURL = $currentURL . '?' . $params;
			$cookie_name="last_page_url_gift";
			 setcookie($cookie_name, $fullURL, time() + (86400 * 30), "/");
				 redirect(base_url().'login');
	} 
if(!empty($_COOKIE['last_page_url_gift'])){
	unset($_COOKIE['last_page_url_gift']);
	setcookie('last_page_url_gift', '', time() - 3600, '/');
}






?>



<!-- main_content start here -->
<section class="main_content">
		<div class="container">
               <div class="row">
					<div class="col-12">
						<div class="content">
							<div aria-label="breadcrumb" >
							  <ol class="breadcrumb justify-content-end"> 
							  <li class="breadcrumb-item active" aria-current="page">إرسال الهدية</li>
								<li class="breadcrumb-item"><a href="#">هدية رحمة</a></li>
								<li class="breadcrumb-item"><a href="#">برامجنا</a></li>
								<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
							  </ol>
							</div>
						</div>
					</div>
				<div class="col-md-12">
					<div class="heading_with_text_cnt ">
						
						<h3>هدية رحمة</h3>
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
				<div class="row form_fill_row">
				
					<div class="col-md-6 img_padding_set pr-4 ">
							<div class="form_img">
								<img src="<?php echo config_item('asset'); ?>image/99.png" alt="" class="custom_form_img w-100 rounded">
							</div>
					</div>
				
					<div class="col-md-6 pl-4 mt-3">
						<div class="summary_section">
							<div class="summary_sec_heading my-5">
								<h3>ملخص الإهداء</h3>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center my-4">
								<span class="w-100 text-left"><?php if(!empty($form_data['gifttype'])){ echo $form_data['gifttype']; }  ?></span>
								<div class="border-dotted "></div>
								<span class="w-100 text-right">نوع الهدية</span>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center mt-2">
								<span class="w-100 text-left"><?php if(!empty($form_data['donation_area'])){ echo $form_data['donation_area']; }  ?></span>
								<div class="border-dotted"></div>
								<span class="w-100 text-right">مجال التبرع</span>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center mt-4">
								<span class="w-100 d-flex text-left" ><p><?php if(!empty($form_data['amount'])){ echo $form_data['amount']; }        ?></p></span>
								<div class="border-dotted"></div>
								<span class="w-100 text-right">المبلغ</span>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center mt-4">
								<span class="w-100 text-left"><?php if(!empty($form_data['name'])){ echo $form_data['name']; }  ?></span>
								<div class="border-dotted"></div>
								<span class="w-100 text-right">اسمك</span>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center mt-4">
								<span class="w-100 text-left" ><?php if(!empty($form_data['gifted'])){ echo $form_data['gifted']; }  ?></span>
								<div class="border-dotted"></div>
								<span class="w-100 text-right">اسم المهدى إليه</span>
							</div>
							
							<div class="d-flex justify-content-between align-items-center text-center my-3">
								<span class="w-100 text-left"><?php if(!empty($form_data['giveaway_phone'])){ echo $form_data['giveaway_phone']; }  ?></span>
								<div class="border-dotted"></div>
								<span class="w-100 text-right">رقم جوال المهدى إليه</span>
							</div>
								
						</div>
					</div>
					
				</div>
				<div class="border-line my-5"></div>
				
				<div class="d-flex justify-content-between">
					<div class="gift_bottom_button">
						<a href="" class="ctm_round_btn ctm-round-btn-with-border" >السابق</a>
					</div>
					
					<div class="gift_bottom_button">
						<a href="<?php echo base_url(); ?>User/payment?<?php echo $qs ; ?>" class="ctm_round_btn" >المتابعة للدفع</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
			
	<!-- form_fill_section end here -->
