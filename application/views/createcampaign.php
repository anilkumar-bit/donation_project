<?php

//print_r($_COOKIE);		


// $status = $this->primary->is_logged_in();
		
        // if (!$status) {
            // redirect(config_item(base_url()) . 'login');
        // } 
		// $user_data = $this->session->userdata('user')[0];
   $status = $this->primary->is_logged_in();
		 if (!$status) {
		   $currentURL = current_url();
			$params   = $_SERVER['QUERY_STRING'];
			$fullURL = $currentURL . '?' . $params;
			$cookie_name="last_page_url_new";
			 setcookie($cookie_name, $fullURL, time() + (86400 * 30), "/");
				 redirect(base_url().'login');
	} 
if(!empty($_COOKIE['last_page_url_new'])){
	unset($_COOKIE['last_page_url_new']);
	setcookie('last_page_url_new', '', time() - 3600, '/');
}

//print_r($_COOKIE);



?>


<!-- main_content -->

<section class="main_content">
		<div class="container">

			
			<div class="row">
			<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb justify-content-end"> 
						  <li class="breadcrumb-item active" aria-current="page">أنشئ حملة</li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">حملات التبرع</a></li>
							<li class="breadcrumb-item"><a href="#" class="color_purple">الأساسية</a></li>
						  </ol>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="heading_with_text">
						
						<h3>أنشئ حملة</h3>
						<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
							
					</div>
				</div>
			</div>
			
			
		
			
			
		</div>
</section>



<!-- creat a campaign section start here -->

<section class="create-campaign-section">
	<div class="container">
		<div class="create-campaign-inner-sec">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center justify-content-center">
					<div class="create-campaign-inner-sec-part">
						<img src="<?php echo config_item('asset'); ?>image/create-camping.png" alt="Image" width="250px"> 
					</div>
				</div>
				<div class="col-md-6">
					<div class="create-campaign-inner-sec-part">
						<form>
						
						<div class="first_form_section">
							<div class="form-group">
								<label><b>منطقة التبرع</b></label>
								<input type="text" name="donation_area" id="donation_area" class="form-control" value="<?php if(!empty($_GET['d_area'])){  echo $_GET['d_area']; }?>" placeholder="" readonly="readonly">
							</div>
							
							<div class="form-group">
								<div class="d-flex align-items-center justify-content-between">
									<span>يمكنك إدخال 50 حرفًا بحد أقصى</span>
									<label> <b>اسم الحملة</b></label>
								</div>
								<input type="text" name="campaign_name" id="campaign_name" class="form-control" placeholder="" required>
								<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
								<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
							</div>
							
							
							<div class="form-group">
								<div class="d-flex align-items-center justify-content-between">
									<span>سيتم قبول التبرعات حتى بعد الوصول إلى الهدف</span>
									<label> <b>المبلغ المستهدف</b></label>
								</div>
								<input type="text" name="amount" id="amount" class="form-control" placeholder="" required>
								
							</div>
							
							<div class="form-group custom-check">
								<div class="form-check">
									<label class="form-check-label" for="defaultCheck1">
										هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
									</label>
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked required>
								</div>
							</div>
							
							
							
							
							<div class="form-group">
								<!--a href="" class="ctm_round_btn" data-toggle="modal" data-target="#exampleModalCenter">الأتى</a-->
								
								<a href="#" id="nxt_button" class="ctm_round_btn" >Next</a>
								
								<!--input type="button" name="submit" class="ctm_round_btn" data-toggle="modal" data-target="#exampleModalCenter" /-->
							</div>
							
							
							</div>
							
							<div class="second_form_section d-none">
							
							
							<div class="form-group">
								<label> <b>اسم</b></label>
								<input type="text" name="name" id="name" class="form-control" placeholder="" required>
							</div>
							
							<div class="form-group">
								<label> <b>سن</b></label>
								<input type="text" name="age"  id="age" class="form-control" placeholder="" required>
							</div>
							
							
							<div class="form-group">
								<label> <b>جنسية</b></label>
									<select name="nationality" id="nationality" class="form-control" required>
											  <option value="">-- select one --</option>
											  <option value="afghan">Afghan</option>
											  <option value="albanian">Albanian</option>
											  <option value="algerian">Algerian</option>
											  <option value="american">American</option>
											  <option value="andorran">Andorran</option>
											  <option value="angolan">Angolan</option>
											  <option value="antiguans">Antiguans</option>
											  <option value="argentinean">Argentinean</option>
											  <option value="armenian">Armenian</option>
											  <option value="australian">Australian</option>
											  <option value="austrian">Austrian</option>
											  <option value="azerbaijani">Azerbaijani</option>
											  <option value="bahamian">Bahamian</option>
											  <option value="bahraini">Bahraini</option>
											  <option value="bangladeshi">Bangladeshi</option>
											  <option value="barbadian">Barbadian</option>
											  <option value="barbudans">Barbudans</option>
											  <option value="batswana">Batswana</option>
											  <option value="belarusian">Belarusian</option>
											  <option value="belgian">Belgian</option>
											  <option value="belizean">Belizean</option>
											  <option value="beninese">Beninese</option>
											  <option value="bhutanese">Bhutanese</option>
											  <option value="bolivian">Bolivian</option>
											  <option value="bosnian">Bosnian</option>
											  <option value="brazilian">Brazilian</option>
											  <option value="british">British</option>
											  <option value="bruneian">Bruneian</option>
											  <option value="bulgarian">Bulgarian</option>
											  <option value="burkinabe">Burkinabe</option>
											  <option value="burmese">Burmese</option>
											  <option value="burundian">Burundian</option>
											  <option value="cambodian">Cambodian</option>
											  <option value="cameroonian">Cameroonian</option>
											  <option value="canadian">Canadian</option>
											  <option value="cape verdean">Cape Verdean</option>
											  <option value="central african">Central African</option>
											  <option value="chadian">Chadian</option>
											  <option value="chilean">Chilean</option>
											  <option value="chinese">Chinese</option>
											  <option value="colombian">Colombian</option>
											  <option value="comoran">Comoran</option>
											  <option value="congolese">Congolese</option>
											  <option value="costa rican">Costa Rican</option>
											  <option value="croatian">Croatian</option>
											  <option value="cuban">Cuban</option>
											  <option value="cypriot">Cypriot</option>
											  <option value="czech">Czech</option>
											  <option value="danish">Danish</option>
											  <option value="djibouti">Djibouti</option>
											  <option value="dominican">Dominican</option>
											  <option value="dutch">Dutch</option>
											  <option value="east timorese">East Timorese</option>
											  <option value="ecuadorean">Ecuadorean</option>
											  <option value="egyptian">Egyptian</option>
											  <option value="emirian">Emirian</option>
											  <option value="equatorial guinean">Equatorial Guinean</option>
											  <option value="eritrean">Eritrean</option>
											  <option value="estonian">Estonian</option>
											  <option value="ethiopian">Ethiopian</option>
											  <option value="fijian">Fijian</option>
											  <option value="filipino">Filipino</option>
											  <option value="finnish">Finnish</option>
											  <option value="french">French</option>
											  <option value="gabonese">Gabonese</option>
											  <option value="gambian">Gambian</option>
											  <option value="georgian">Georgian</option>
											  <option value="german">German</option>
											  <option value="ghanaian">Ghanaian</option>
											  <option value="greek">Greek</option>
											  <option value="grenadian">Grenadian</option>
											  <option value="guatemalan">Guatemalan</option>
											  <option value="guinea-bissauan">Guinea-Bissauan</option>
											  <option value="guinean">Guinean</option>
											  <option value="guyanese">Guyanese</option>
											  <option value="haitian">Haitian</option>
											  <option value="herzegovinian">Herzegovinian</option>
											  <option value="honduran">Honduran</option>
											  <option value="hungarian">Hungarian</option>
											  <option value="icelander">Icelander</option>
											  <option value="indian">Indian</option>
											  <option value="indonesian">Indonesian</option>
											  <option value="iranian">Iranian</option>
											  <option value="iraqi">Iraqi</option>
											  <option value="irish">Irish</option>
											  <option value="israeli">Israeli</option>
											  <option value="italian">Italian</option>
											  <option value="ivorian">Ivorian</option>
											  <option value="jamaican">Jamaican</option>
											  <option value="japanese">Japanese</option>
											  <option value="jordanian">Jordanian</option>
											  <option value="kazakhstani">Kazakhstani</option>
											  <option value="kenyan">Kenyan</option>
											  <option value="kittian and nevisian">Kittian and Nevisian</option>
											  <option value="kuwaiti">Kuwaiti</option>
											  <option value="kyrgyz">Kyrgyz</option>
											  <option value="laotian">Laotian</option>
											  <option value="latvian">Latvian</option>
											  <option value="lebanese">Lebanese</option>
											  <option value="liberian">Liberian</option>
											  <option value="libyan">Libyan</option>
											  <option value="liechtensteiner">Liechtensteiner</option>
											  <option value="lithuanian">Lithuanian</option>
											  <option value="luxembourger">Luxembourger</option>
											  <option value="macedonian">Macedonian</option>
											  <option value="malagasy">Malagasy</option>
											  <option value="malawian">Malawian</option>
											  <option value="malaysian">Malaysian</option>
											  <option value="maldivan">Maldivan</option>
											  <option value="malian">Malian</option>
											  <option value="maltese">Maltese</option>
											  <option value="marshallese">Marshallese</option>
											  <option value="mauritanian">Mauritanian</option>
											  <option value="mauritian">Mauritian</option>
											  <option value="mexican">Mexican</option>
											  <option value="micronesian">Micronesian</option>
											  <option value="moldovan">Moldovan</option>
											  <option value="monacan">Monacan</option>
											  <option value="mongolian">Mongolian</option>
											  <option value="moroccan">Moroccan</option>
											  <option value="mosotho">Mosotho</option>
											  <option value="motswana">Motswana</option>
											  <option value="mozambican">Mozambican</option>
											  <option value="namibian">Namibian</option>
											  <option value="nauruan">Nauruan</option>
											  <option value="nepalese">Nepalese</option>
											  <option value="new zealander">New Zealander</option>
											  <option value="ni-vanuatu">Ni-Vanuatu</option>
											  <option value="nicaraguan">Nicaraguan</option>
											  <option value="nigerien">Nigerien</option>
											  <option value="north korean">North Korean</option>
											  <option value="northern irish">Northern Irish</option>
											  <option value="norwegian">Norwegian</option>
											  <option value="omani">Omani</option>
											  <option value="pakistani">Pakistani</option>
											  <option value="palauan">Palauan</option>
											  <option value="panamanian">Panamanian</option>
											  <option value="papua new guinean">Papua New Guinean</option>
											  <option value="paraguayan">Paraguayan</option>
											  <option value="peruvian">Peruvian</option>
											  <option value="polish">Polish</option>
											  <option value="portuguese">Portuguese</option>
											  <option value="qatari">Qatari</option>
											  <option value="romanian">Romanian</option>
											  <option value="russian">Russian</option>
											  <option value="rwandan">Rwandan</option>
											  <option value="saint lucian">Saint Lucian</option>
											  <option value="salvadoran">Salvadoran</option>
											  <option value="samoan">Samoan</option>
											  <option value="san marinese">San Marinese</option>
											  <option value="sao tomean">Sao Tomean</option>
											  <option value="saudi">Saudi</option>
											  <option value="scottish">Scottish</option>
											  <option value="senegalese">Senegalese</option>
											  <option value="serbian">Serbian</option>
											  <option value="seychellois">Seychellois</option>
											  <option value="sierra leonean">Sierra Leonean</option>
											  <option value="singaporean">Singaporean</option>
											  <option value="slovakian">Slovakian</option>
											  <option value="slovenian">Slovenian</option>
											  <option value="solomon islander">Solomon Islander</option>
											  <option value="somali">Somali</option>
											  <option value="south african">South African</option>
											  <option value="south korean">South Korean</option>
											  <option value="spanish">Spanish</option>
											  <option value="sri lankan">Sri Lankan</option>
											  <option value="sudanese">Sudanese</option>
											  <option value="surinamer">Surinamer</option>
											  <option value="swazi">Swazi</option>
											  <option value="swedish">Swedish</option>
											  <option value="swiss">Swiss</option>
											  <option value="syrian">Syrian</option>
											  <option value="taiwanese">Taiwanese</option>
											  <option value="tajik">Tajik</option>
											  <option value="tanzanian">Tanzanian</option>
											  <option value="thai">Thai</option>
											  <option value="togolese">Togolese</option>
											  <option value="tongan">Tongan</option>
											  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
											  <option value="tunisian">Tunisian</option>
											  <option value="turkish">Turkish</option>
											  <option value="tuvaluan">Tuvaluan</option>
											  <option value="ugandan">Ugandan</option>
											  <option value="ukrainian">Ukrainian</option>
											  <option value="uruguayan">Uruguayan</option>
											  <option value="uzbekistani">Uzbekistani</option>
											  <option value="venezuelan">Venezuelan</option>
											  <option value="vietnamese">Vietnamese</option>
											  <option value="welsh">Welsh</option>
											  <option value="yemenite">Yemenite</option>
											  <option value="zambian">Zambian</option>
											  <option value="zimbabwean">Zimbabwean</option>
											</select>
									</div>
									
									<!-- for image -->
							<div class="form-group">
									<label><b>صورة</b></label>
									<input type="file" name="image" id="image" class="form-control" >
									<input type="hidden" name="b64" id="b64" class="form-control" >
								 </div>
								 
								 <div class="form-group">
									<label class="d-block">صورة</label>
									
								<img id="img" width="150">
								 </div>
								 
								 
								 <!-- for docs -->
							<div class="form-group">
									<label><b>مستندات</b></label>
									<input type="file" name="images" id="images" class="form-control" >
									<input type="hidden" name="docs_b64" id="docs_b64" class="form-control" >
								 </div>
								 
								 <div class="form-group">
									<label class="d-block">مستندات</label>
								<img id="imag" width="150">
								 </div>
								 
								 
								 
								 
							
							
							
						<div class="form-group">
								<!--a href="" class="ctm_round_btn" data-toggle="modal" data-target="#exampleModalCenter">الأتى</a-->
								
								<a href="#" onclick="
                                checkValidation()" data-toggle="modal"  type="button" id="sub_button" class="ctm_round_btn" data-target="#exampleModalCenter">الأتى</a>
								
								<!--input type="button" name="submit" class="ctm_round_btn" data-toggle="modal" data-target="#exampleModalCenter" /-->
							</div>
							
							</div>
							
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- creat a campaign section end here -->


<!-- Modal start here -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ctm-model-set">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			
				<div class="text-center ">
						<img src="<?php echo config_item('asset'); ?>image/create-camping.png" alt="Image" width="150px"> 
				</div>
				<div class="model-inner-part px-4 py-4  my-4">
					<div class="d-flex justify-content-between ">
						<div class="w-50 p-2">
							<p class="m-0" id="camp_name"></p>
						</div>
						<div class="w-50 p-2">
							<h6>:اسم الحملة</h6>
						</div>
						</div>
					<div class="d-flex justify-content-between">
					<div class="w-50 p-2">
						<p class="m-0" id="donation_area_data"></p>
					</div>
					<div class="w-50 p-2">
						<h6>:مجال التبرع</h6>
					</div>
					</div>
					<div class="d-flex justify-content-between">
					
					
					<div class="w-50 p-2">
						<p class="m-0" id="donation_amount"></p>
					</div>
					<div class="w-50 p-2">
						<h6>:المبلغ المستهدف</h6>
					</div>
				</div>
			</div>
			
			<p class="text-center"><small class="custom-small">هناك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></small></p>
			
			<h5 class="text-center">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</h5>
			
			<div class="border-line"></div>
			
			<div class="d-flex align-items-center justify-content-between">
				<a href="" class="ctm_round_btn ctm-round-btn-with-border" data-toggle="modal" data-target="#exampleModalCenter">تعديل</a>
				<a href="#" class="ctm_round_btn" data-toggle="modal" data-target="#exampleModalCenter" onclick="confirm();" >أنشئ الحملة</a>
			</div>
			
		
      </div>
    </div>
  </div>
</div>


<!-- Modal end here -->

<script>
function checkValidation()
{
    var campaign_name = "";
    var amount = "";
	var campaign_name = $("#campaign_name").val();
	 $('#camp_name').text(campaign_name);
    if($("#donation_area").val()){
         donation_area = $("#donation_area").val();
		 $('#donation_area_data').text(donation_area);
    }
	if($("#amount").val()){
         amount = $("#amount").val();
		 $('#donation_amount').text(amount);
    }
	
   
}

function confirm()
{
	var data = $('form').serialize();
    var url  = "<?php echo base_url(); ?>User/insertCategory";
	 $.ajax({
        type:'post',
        url:url,
        data:$('form').serialize(),
        success: function(response){
         if(response){
			 window.location.href = "<?php echo base_url(); ?>campaign-success";
		 }
		}
	});
}


function readFile() {
	
	if (this.files && this.files[0]) {
		var FR= new FileReader();
		FR.addEventListener("load", function(e) {
			
		//inputF.setAttribute('value', 'defaultValue');
			document.getElementById("img").src       = e.target.result;
			document.getElementById("b64").setAttribute('value', e.target.result);
		}); 
		FR.readAsDataURL( this.files[0] );
	}
}
document.getElementById("image").addEventListener("change", readFile);

function readdocs() {
				if (this.files && this.files[0]) {
				var FR= new FileReader();
				FR.addEventListener("load", function(e) {
				//inputF.setAttribute('value', 'defaultValue');
				 document.getElementById("imag").src       = e.target.result;
				document.getElementById("docs_b64").setAttribute('value', e.target.result);
				}); 
				FR.readAsDataURL( this.files[0] );
				}
				}
				document.getElementById("images").addEventListener("change", readdocs);









</script>
