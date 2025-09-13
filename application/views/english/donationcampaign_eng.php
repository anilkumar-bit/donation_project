<?php 

//echo "this is view part ";


?>


<!-- main_content -->

<section class="main_content">
		<div class="container">

			
			<div class="row">
			<div class="col-12">
					<div class="content">
						<div aria-label="breadcrumb" >
						  <ol class="breadcrumb p-0"> 
							<li class="breadcrumb-item"><a href="#" class="color_purple">Main</a></li>
							<li class="breadcrumb-item active" aria-current="page">Donation Campaigns</li>
						  </ol>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="heading_with_text">
						
						<h3>Donation campaigns</h3>
						<p>This service gives you the opportunity to participate with the Rahma platform in collecting donations for its various charitable fields, to participate in achieving cooperation and solidarity, and to leave a positive impact on the lives of others.</p>
							
					</div>
				</div>
			</div>
			
			
		
			
			
		</div>
</section>


<section class="donationcampaign-section">
	<div class="container">
			<div class="row text-align-center">
			
				<div class="col-md-6 col-lg-4">
					<div class="icon_with_text">
						<img src="<?php echo config_item('asset_eng'); ?>image/Gift_icon.png" alt="" width="60px" >
						<h5>A Gift Of Mercy</h5>
						<p>Contribute to providing the necessary health care for needy patients and facilitating medical services for them in various regions of the Kingdom</p>
						
						<div class="ctm_radius_btn">
							<a href="<?php echo base_url();?>createcampaign_eng?d_area=هدية رحمة" class="w-100">A Gift Of Mercy</a>
						</div>
					</div>
				</div>
		
				<div class="col-md-6 col-lg-4">
					<div class="icon_with_text">
						<img src="<?php echo config_item('asset_eng'); ?>image/soul_icon.png" alt="" width="60px" >
						<h5>Who Are Dear To Us</h5>
						<p>Be helpful in providing irrigation and fresh water in the regions and villages that need the most water in the various regions of the Kingdom</p>
			
						<div class="ctm_radius_btn">
							<a href="<?php echo base_url();?>createcampaign_eng?d_area=الغالين علينا" class="w-100">Who Are Dear To Us</a>
						</div>
					</div>
				</div>
		
				<div class="col-md-6 col-lg-4">
					<div class="icon_with_text">
						<img src="<?php echo config_item('asset_eng'); ?>image/colleague_icon.png" alt="" width="60px" >
						<h5>Work Colleague</h5>
						<p>Contribute to supporting orphans' projects and providing them with a decent life that inspires peace and stability in the various regions of the Kingdom</p>
						
						<div class="ctm_radius_btn">
							<a href="<?php echo base_url();?>createcampaign_eng?d_area=زميل العمل" class="w-100">Work Colleague</a>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>
