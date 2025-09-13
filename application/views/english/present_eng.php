<?php 

// echo "<pre>";
// print_r($present_data);
// echo "</pre>";

?>

<!-- gift section start here -->
<section class="main_content">
		<div class="container">

			
			<div class="row">
					<div class="col-12">
						<div class="content">
							<div aria-label="breadcrumb" >
							  <ol class="breadcrumb p-0"> 
								 <li class="breadcrumb-item"><a href="#">Main</a></li>
								<li class="breadcrumb-item"><a href="#">Our programs</a></li>
								<li class="breadcrumb-item active" aria-current="page">A Gift Of Mercy</li>
							  </ol>
							</div>
						</div>
					</div>
				<div class="col-md-12">
					<div class="heading_with_text_cnt">
						<h3>A Gift Of Mercy</h3>
						<p>A service for making donations on behalf of others as a gift to family and friends, in various social events</p>
					</div>
				</div>
			</div>
			
			
		
			
			
		</div>
</section>

<div class="wizard_section">
	<div class="container">
		<div class="wizard_custom_content d-flex justify-content-around my-2">
			
			<div class="wizard_item order_3 d-flex align-items-center">
				<p class="m-0">Choose The Type Of Gift</p>
					<div class="count_txt">
						<h3>1</h3>
					</div>
			</div>
			
			<div class="wizard_item order_2 d-flex align-items-center">
				<p class="m-0">Enter Data</p>
					<div class="count_txt">
						<h3>2</h3>
					</div>
			</div>
			
			
			<div class="wizard_item order_1 d-flex align-items-center">
				<p class="m-0">Enter Data</p>
					<div class="count_txt">
						<h3>3</h3>
					</div>
			</div>
			
		</div>
	</div>
</div>

<div class="img_link_section">
		<div class="container">
			<div class="img_link_section_inner_part">
					<div class="img_link_heading py-3">
							<h3> Choose The Type Of Gift:</h3>
					
					</div>
					<div class="row my-4">
						
						<!--block data dynamic starts-->
						<?php 
						if($present_data){
							foreach($present_data as $present_datas){
						
						?>
						<div class="col-md-6 col-lg-4">
							<div class="img_link_content">
								<div class="img_box">
										<a href="<?php echo base_url();?>giftee?gift_type=<?php if($present_datas['gift_title']){  echo $present_datas['gift_title']; } ?>" class="img_part"><img src="<?php if($present_datas['image']){ echo $present_datas['image']; } ?>" alt="" class="rounded-left" width="100%" ></a>
											<div class="text_part">
											<a href="<?php echo base_url();?>giftee?gift_type=<?php if($present_datas['gift_title']){  echo $present_datas['gift_title']; } ?>"><h3><?php if($present_datas['gift_title']){  echo $present_datas['gift_title']; } ?></h3></a>
											</div>
								</div>	
							</div>
							</div>
							<!--block data dynamic ends-->
							<?php 
							}
						}
						?>
						
					</div>
					
					
					
					
			</div>		
		</div>
</div>


<!-- gift section end here -->
