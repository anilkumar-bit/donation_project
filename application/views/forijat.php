<?php   

// echo "<pre>";
// print_r($forijat_data);
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
						  <li class="breadcrumb-item active" aria-current="page">زميل العمل</li>
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
			<a href="<?php echo base_url(); ?>forijat" class="ctm_round_btn mx-3"> زميل العمل </a>
	<!--		<a href="<?php echo base_url(); ?>tyassarat" class="ctm_round_btn ctm-round-btn-with-border mx-3"> تيسرت </a>
			<a href="<?php echo base_url(); ?>project" class="ctm_round_btn ctm-round-btn-with-border mx-3"> المشاريع </a> -->
			<a href="<?php echo base_url(); ?>all" class="ctm_round_btn ctm-round-btn-with-border mx-3"> الكل </a> 
		</div>
	</div>
<!-- relief navigation-section end here -->



<!-- relief card-section start here -->


<section class="relief-header-card my-5">

	<div class="container">
	
		<div class="relief-header-card-section">
					<div class="relief-header-card-section-header">
						<h5 class="m-0">فرص التبرع الخاصة بسجناء الحقوق المالية، للمساهمة في تعجيل عودتهم إلى أهاليهم.</h5>
						<img src="<?php echo config_item('asset'); ?>image/forijat-logo.svg?<?php
echo(rand());?>" alt="image">
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
												<select class="selectpicker form-control"  data-size="5" title="الجنس">
													  <option>الكل</option>
													  <option>ذكر</option>
													  <option>أنثى</option>
													</select>
										  </div>
										  
										  
										  <div class="form-group col-md-4">
											<select class="selectpicker form-control" data-live-search="true" data-size="5" title="الجنسية">
											  <option data-tokens="ketchup mustard">الكل</option>
											  <option data-tokens="mustard">اثيوبيا</option>
											  <option data-tokens="frosting">اذربيجان</option>
											  <option data-tokens="frosting">ارتيريا</option>
											  <option data-tokens="frosting">ارمينيا</option>
											  <option data-tokens="frosting">ازبكستان</option>
											  <option data-tokens="frosting">اسبانيا</option>
											  <option data-tokens="frosting">استراليا</option>
											  <option data-tokens="frosting">استونيا</option>
											  <option data-tokens="frosting">افريقيا الوسطى</option>
											  <option data-tokens="frosting">افغانستان</option>
											  <option data-tokens="frosting">اكوادور</option>
											  <option data-tokens="frosting">الارجنتين</option>
											  <option data-tokens="frosting">الاردن</option>
											  <option data-tokens="frosting">الامارات العربية</option>
											  <option data-tokens="frosting">البانيا</option>
											  <option data-tokens="frosting">البحرين</option>
											  <option data-tokens="frosting">البرازيل</option>
											  <option data-tokens="frosting">البرتغال</option>
											  <option data-tokens="frosting">البوسنة والهرسك</option>
											  <option data-tokens="frosting">الجزائر</option>
											  <option data-tokens="frosting">الدانمارك</option>
											  <option data-tokens="frosting">السعودية</option>
											  <option data-tokens="frosting">السلفادور</option>
											  <option data-tokens="frosting">السنغال</option>
											  <option data-tokens="frosting">السودان</option>
											  <option data-tokens="frosting">السويد</option>
											  <option data-tokens="frosting">الشاشان</option>
											  <option data-tokens="frosting">الصومال</option>
											  <option data-tokens="frosting">الصين الشعبية</option>
											  <option data-tokens="frosting">الصين الوطنية</option>
											  <option data-tokens="frosting">العراق</option>
											  <option data-tokens="frosting">الفلبين</option>
											  <option data-tokens="frosting">الكاميرون</option>
											  <option data-tokens="frosting">الكونغو</option>
											  <option data-tokens="frosting">الكويت</option>
											  <option data-tokens="frosting">المانيا</option>
											  <option data-tokens="frosting">المغرب</option>
											  <option data-tokens="frosting">المكسيك</option>
											  <option data-tokens="frosting">المملكة المتحدة</option>
											  <option data-tokens="frosting">النرويج</option>
											  <option data-tokens="frosting">النمسا</option>
											  <option data-tokens="frosting">النيجر</option>
											  <option data-tokens="frosting">الهند</option>
											  <option data-tokens="frosting">الولايات المتحدة</option>
											  <option data-tokens="frosting">اليابان</option>
											  <option data-tokens="frosting">اليمن</option>
											  <option data-tokens="frosting">اليونان</option>
											  <option data-tokens="frosting">انتاركتيكا</option>
											  <option data-tokens="frosting">انجولا</option>
											  <option data-tokens="frosting">انجويلا</option>
											  <option data-tokens="frosting">اندورا</option>
											  <option data-tokens="frosting">اندونيسيا</option>
											  <option data-tokens="frosting">اوراجواي</option>
											  <option data-tokens="frosting">اوغندة</option>
											  <option data-tokens="frosting">اوكرانيا</option>
											  <option data-tokens="frosting">ايران</option>
											  <option data-tokens="frosting">ايرلندا</option>
											  <option data-tokens="frosting">ايسلندا</option>
											  <option data-tokens="frosting">ايطاليا</option>
											  <option data-tokens="frosting">بابوا نيوغينا</option>
											  <option data-tokens="frosting">باراجواي</option>
											  <option data-tokens="frosting">باربودا</option>
											  <option data-tokens="frosting">باكستان</option>
											  <option data-tokens="frosting">بربادوس</option>
											  <option data-tokens="frosting">بروني</option>
											  <option data-tokens="frosting">بلجيكا</option>
											  <option data-tokens="frosting">بلغاريا</option>
											  <option data-tokens="frosting">بنجلاديش</option>
											  <option data-tokens="frosting">بنما</option>
											  <option data-tokens="frosting">بنين</option>
											  <option data-tokens="frosting">بهوتان</option>
											  <option data-tokens="frosting">بوتسوانا</option>
											  <option data-tokens="frosting">بورتوريكو</option>
											  <option data-tokens="frosting">بوركينافاسو</option>
											  <option data-tokens="frosting">بورندي</option>
											  <option data-tokens="frosting">بوفثاتسوانا</option>
											  <option data-tokens="frosting">بوفثاتسوانا</option>
											  <option data-tokens="frosting">بولندا</option>
											  <option data-tokens="frosting">بوليفيا</option>
											  <option data-tokens="frosting">بولينيسياالفرنسية</option>
											  <option data-tokens="frosting">بيرمودا</option>
											  <option data-tokens="frosting">بيرو</option>
											  <option data-tokens="frosting">بيلو</option>
											  <option data-tokens="frosting">بيليز</option>
											  <option data-tokens="frosting">تايلند</option>
											  <option data-tokens="frosting">تركمانستان</option>
											  <option data-tokens="frosting">تركيا</option>
											  <option data-tokens="frosting">ترينداد وتوباجو</option>
											  <option data-tokens="frosting">تشاد</option>
											  <option data-tokens="frosting">تشيك</option>
											  <option data-tokens="frosting">تنزانيا</option>
											  <option data-tokens="frosting">توجو</option>
											  <option data-tokens="frosting">توفالو</option>
											  <option data-tokens="frosting">توكيلاو</option>
											  <option data-tokens="frosting">تونجا</option>
											  <option data-tokens="frosting">تونس</option>
											  <option data-tokens="frosting">تيمور الشرقية</option>
											  <option data-tokens="frosting">ج الترك والقوقاز</option>
											  <option data-tokens="frosting">ج فيرجن الامريكية</option>
											  <option data-tokens="frosting">ج فيرجن البريطانية</option>
											  <option data-tokens="frosting">جابون</option>
											  <option data-tokens="frosting">جامايكا</option>
											  <option data-tokens="frosting">جبل طارق</option>
											  <option data-tokens="frosting">جرانادا</option>
											  <option data-tokens="frosting">جرينلاند</option>
											  <option data-tokens="frosting">جزر البهاما</option>
											  <option data-tokens="frosting">جزر القمر</option>
											  <option data-tokens="frosting">جزر سليمان</option>
											  <option data-tokens="frosting">جزر سيشل</option>
											  <option data-tokens="frosting">جزر فاكلاند</option>
											  <option data-tokens="frosting">جزر فيجي</option>
											  <option data-tokens="frosting">جزر فيرو</option>
											  <option data-tokens="frosting">جزر كايمون</option>
											  <option data-tokens="frosting">جزر كوك</option>
											  <option data-tokens="frosting">جزر ماريانا</option>
											  <option data-tokens="frosting">جزر ماريشال</option>
											  <option data-tokens="frosting">جزر ملاديف</option>
											  <option data-tokens="frosting">جزر نورفولك</option>
											  <option data-tokens="frosting">جزر والس وفوتونا</option>
											  <option data-tokens="frosting">جزيرةكريسماس</option>
											  <option data-tokens="frosting">جزيرةمايوت</option>
											  <option data-tokens="frosting">جمهورية جنوب السودان</option>
											  <option data-tokens="frosting">جمهورية دمينكان</option>
											  <option data-tokens="frosting">جنوب افريقيا</option>
											  <option data-tokens="frosting">جواتيمالا</option>
											  <option data-tokens="frosting">جوام</option>
											  <option data-tokens="frosting">جوانا</option>
											  <option data-tokens="frosting">جورجيا</option>
											  <option data-tokens="frosting">جيانا الفرنسية</option>
											  <option data-tokens="frosting">جيبوتى</option>
											  <option data-tokens="frosting">جيودي لوب</option>
											  <option data-tokens="frosting">دومينيكا</option>
											  <option data-tokens="frosting">رواندا</option>
											  <option data-tokens="frosting">روسيا الاتحادية</option>
											  <option data-tokens="frosting">روسيا البيضاء</option>
											  <option data-tokens="frosting">رومانيا</option>
											  <option data-tokens="frosting">رينيون</option>
											  <option data-tokens="frosting">زامبيا</option>
											  <option data-tokens="frosting">زائير</option>
											  <option data-tokens="frosting">زمبابوي</option>
											  <option data-tokens="frosting">س بييري وميكويلن</option>
											  <option data-tokens="frosting">ساحل العاج</option>
											  <option data-tokens="frosting">ساموا الامريكية</option>
											  <option data-tokens="frosting">ساموا الغربية</option>
											  <option data-tokens="frosting">سان فينسنت</option>
											  <option data-tokens="frosting">سان مورينو</option>
											  <option data-tokens="frosting">سانت لوسيا</option>
											  <option data-tokens="frosting">سانت هيلانة</option>
											  <option data-tokens="frosting">ساوتومي/برنسبى</option>
											  <option data-tokens="frosting">سري لنكا</option>
											  <option data-tokens="frosting">سلوفاكيا</option>
											  <option data-tokens="frosting">سلوفينيا</option>
											  <option data-tokens="frosting">سنغافورة</option>
											  <option data-tokens="frosting">سوريا</option>
											  <option data-tokens="frosting">سورينام</option>
											  <option data-tokens="frosting">سوزيلاند</option>
											  <option data-tokens="frosting">سويسرا</option>
											  <option data-tokens="frosting">سيراليون</option>
											  <option data-tokens="frosting">شيلي</option>
											  <option data-tokens="frosting">صربيا والجبل الأسود</option>
											  <option data-tokens="frosting">طاجكستان</option>
											  <option data-tokens="frosting">عروبا</option>
											  <option data-tokens="frosting">عمان</option>
											  <option data-tokens="frosting">غامبيا</option>
											  <option data-tokens="frosting">غانا</option>
											  <option data-tokens="frosting">غينيا</option>
											  <option data-tokens="frosting">غينيا الاستوائية</option>
											  <option data-tokens="frosting">غينيابيساو</option>
											  <option data-tokens="frosting">فانيوتو</option>
											  <option data-tokens="frosting">فرنسا</option>
											  <option data-tokens="frosting">فلسطين</option>
											  <option data-tokens="frosting">فلسطيني بوثيقة سورية</option>
											  <option data-tokens="frosting">فلسطيني بوثيقة مصرية</option>
											  <option data-tokens="frosting">فلسطيني بوثيقةاردنية</option>
											  <option data-tokens="frosting">فلسطيني بوثيقةعراقية</option>
											  <option data-tokens="frosting">فلسطيني بوثيقةلبناني</option>
											  <option data-tokens="frosting">فنزويلا</option>
											  <option data-tokens="frosting">فنلندا</option>
											  <option data-tokens="frosting">فيتنام</option>
											  <option data-tokens="frosting">قبرص</option>
											  <option data-tokens="frosting">قرغيزستان</option>
											  <option data-tokens="frosting">قطر</option>
											  <option data-tokens="frosting">كازاخستان</option>
											  <option data-tokens="frosting">كاليدونيا الجديد</option>
											  <option data-tokens="frosting">كرواتيا</option>
											  <option data-tokens="frosting">كمبوديا</option>
											  <option data-tokens="frosting">كندا</option>
											  <option data-tokens="frosting">كوبا</option>
											  <option data-tokens="frosting">كوريا الجنوبية</option>
											  <option data-tokens="frosting">كوريا الشمالية</option>
											  <option data-tokens="frosting">كوستاريكا</option>
											  <option data-tokens="frosting">كوسوفوا</option>
											  <option data-tokens="frosting">كولمبيا</option>
											  <option data-tokens="frosting">كيريباتي</option>
											  <option data-tokens="frosting">كينيا</option>
											  <option data-tokens="frosting">لاتفيا</option>
											  <option data-tokens="frosting">لاوس</option>
											  <option data-tokens="frosting">لبنان</option>
											  <option data-tokens="frosting">لوكسمبورغ</option>
											  <option data-tokens="frosting">ليبيا</option>
											  <option data-tokens="frosting">ليبيريا</option>
											  <option data-tokens="frosting">ليتوانيا</option>
											  <option data-tokens="frosting">ليختنشتين</option>
											  <option data-tokens="frosting">ليسوتو</option>
											  <option data-tokens="frosting">مارتينيكو</option>
											  <option data-tokens="frosting">ماكاو</option>
											  <option data-tokens="frosting">مالطا</option>
											  <option data-tokens="frosting">مالي</option>
											  <option data-tokens="frosting">ماليزيا</option>
											  <option data-tokens="frosting">مدغشقر</option>
											  <option data-tokens="frosting">مدينة الفاتيكان</option>
											  <option data-tokens="frosting">مصر</option>
											  <option data-tokens="frosting">مقدونيا</option>
											  <option data-tokens="frosting">ملاوي</option>
											  <option data-tokens="frosting">منغوليا</option>
											  <option data-tokens="frosting">موريتانيا</option>
											  <option data-tokens="frosting">موريشيوس</option>
											  <option data-tokens="frosting">موزمبيق</option>
											  <option data-tokens="frosting">مولدافيا</option>
											  <option data-tokens="frosting">موناكو</option>
											  <option data-tokens="frosting">مونت سيرات</option>
											  <option data-tokens="frosting">ميانمار</option>
											  <option data-tokens="frosting">ميكرونيسيا</option>
											  <option data-tokens="frosting">ناميبيا</option>
											  <option data-tokens="frosting">نورو</option>
											  <option data-tokens="frosting">نيبال</option>
											  <option data-tokens="frosting">نيجيريا</option>
											  <option data-tokens="frosting">نيكاراجوا</option>
											  <option data-tokens="frosting">نيو</option>
											  <option data-tokens="frosting">نيوزيلندا</option>
											  <option data-tokens="frosting">هايتي</option>
											  <option data-tokens="frosting">هنغاريا</option>
											  <option data-tokens="frosting">هولندا</option>
											  <option data-tokens="frosting">هونج كونج</option>
											  <option data-tokens="frosting">هوندوراس</option>
											  <option data-tokens="frosting">يوغسلافيا</option>
											</select>
										  </div>
										  
										  
										  <div class="form-group col-md-4">
													<select class="selectpicker form-control"  data-size="5" title="منطقة السجن">
														<option>everyone</option>
														<option>patio</option>
														<option>Hollow</option>
														<option>Northern borders</option>
														<option>Riyadh</option>
														<option>Eastern</option>
														<option>Al-Qassim</option>
														<option>Medina</option>	
														<option>Tabuk</option>	
														<option>jazan</option>	
														<option>Hail</option>	
														<option>difficult</option>	
														<option>Makkah</option>	
														<option>Najran</option>	
													</select>
										  </div>
										  
										  
										  
										  <div class="form-group col-md-4">
												<select class="selectpicker form-control"  data-size="5" title="عدد القضايا">
													 <option>everyone</option>
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>or more 5</option>
												</select>
										  </div>
										  
										  
										  
										  <div class="form-group col-md-4">
												<select class="selectpicker form-control"  data-size="5" title="نوع التبرع">
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
												</select>
										  </div>
										  
										  
										  
										 
										  
										  
										  
										  <div class="form-group col-md-4">
												<select class="selectpicker form-control"  data-size="5" title="الكل">
													  <option>الكل</option>
													  <option>أعزب</option>
													  <option>متزوج</option>
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
		<?php  foreach($forijat_data as $forijat_datas){ ?>
			<div class="col-md-4">
				<div class="custom_post_card  mt-4">
					<div class="custom_post_card_box">
						<div class="custom_card_txt_icon">
							<small><span class="custom_copy_icon"><i class="fa fa-clone" aria-hidden="true"></span></i>
								<?php if($forijat_datas['case_no']){ echo $forijat_datas['case_no']; } ?>
								رقم الفاتورة: 
							</small>
						</div>
						
						<div class="custom_forijat_text">
							<p><?php if($forijat_datas['description']){ echo substr($forijat_datas['description'],'0',70); }?></p>
						</div>
					</div>
					
					<div class="d-flex justify-content-between mt-5 mx-3">	
						<div>
							<p class="forijat_ctm_txt">الجنسية</p>
							<span>القصيم                        </span>
						</div>
						
						<div>
							<p class="forijat_ctm_txt">منطقة السجن</p>
							<span>سعودي</span>
						</div>
					</div>
					
					
					
					<div class="d-flex justify-content-between m-3">	
						
						<div class="d-flex align-items-center">
								<div class="donut_chart active">
                                     <svg viewBox="0 0 32 32">
                                         <circle r="16" cx="16" cy="16" style="stroke-dasharray: 5.3 100;"></circle>
                                     </svg>
                                     <div class="donut_center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6%</font></font></div>
                                </div>
							<small class="forijat_ctm_txt">نسبة<br>الاكتمال</small>
							<div>
							
							</div>
						</div>
						
						<div>
							<p class="forijat_ctm_txt">المبلغ المتبقي</p>
							<h5>
								<small>AED</small>
								<?php if($forijat_datas['target_amount']){ echo $forijat_datas['target_amount']; } ?>
							</h5>		
						</div>
						
						
						
					</div>
					
					<div class="border-line"></div>
					
					<div class="d-flex justify-content-between mx-2">
						
							
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						
						<a href="<?php echo base_url(); ?>Home/donationOperSingleView?id=<?php if($forijat_datas['id']){ echo $forijat_datas['id']; } ?>" class="ctm_round_btn">استعرض الحالة</a>
					</div>
					
				</div>
			</div>
<?php
}
?>

<!---   test data  ENDS ---->










		<!---   1   ---->
		
			<!---  <div class="col-md-4">
				<div class="custom_post_card mt-3">
					<div class="custom_post_card_box">
						<div class="custom_card_txt_icon">
							<small><span class="custom_copy_icon"><i class="fa fa-clone" aria-hidden="true"></span></i>
								2111839413
								رقم الفاتورة: 
							</small>
						</div>
						
						<div class="custom_forijat_text">
							<p>سجين عمره 38 عاما أعزب  مسجون منذ عامين  و 8 اشهر متبقى عليه مبلغ 57171.00 ريال </p>
						</div>
					</div>
					
					<div class="d-flex justify-content-between mt-5 mx-3">	
						<div>
							<p class="forijat_ctm_txt">الجنسية</p>
							<span>القصيم                        </span>
						</div>
						
						<div>
							<p class="forijat_ctm_txt">منطقة السجن</p>
							<span>سعودي</span>
						</div>
					</div>
					
					
					
					<div class="d-flex justify-content-between m-3">	
						
						<div class="d-flex align-items-center">
								<div class="donut_chart active">
                                     <svg viewBox="0 0 32 32">
                                         <circle r="16" cx="16" cy="16" style="stroke-dasharray: 5.3 100;"></circle>
                                     </svg>
                                     <div class="donut_center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6%</font></font></div>
                                </div>
							<small class="forijat_ctm_txt">نسبة<br>الاكتمال</small>
							<div>
							
							</div>
						</div>
						
						<div>
							<p class="forijat_ctm_txt">المبلغ المتبقي</p>
							<h5>
								<small>AED</small>
								57,171
							</h5>		
						</div>
						
						
						
					</div>
					
					<div class="border-line"></div>
					
					<div class="d-flex justify-content-between mx-2">
						
							
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="شارك التبرع عبر وسائل التواصل الاجتماعي">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						
						<a href="" class="ctm_round_btn">استعرض الحالة</a>
					</div>
					
				</div>
			</div>
			
			---->
			
		<div class="col-md-12 mt-5">
			<nav aria-label="Page navigation "class="ctm-pagination text-center">
				<div class="ctm-pagination-inner left_chvron_btn">
				  <ul class="pagination justify-content-center m-0">
					<li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
					
				  </ul>
				</div>
			</nav>
		</div>
			
		
		</div>
	</div>
</section>
<!-- relief post-card section end here -->
