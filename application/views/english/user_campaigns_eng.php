<?php 

//echo "this is user campaign in english language";


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
							<li class="breadcrumb-item"><a href="#" class="color_purple">Donation Opportunities</a></li>
							 <li class="breadcrumb-item active" aria-current="page">A Gift Of Mercy</li>
						  </ol>
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


<!-- relief post-card section start here -->
<section class="post-card-section">
	<div class="container">
		<div class="row">




        <!---   test data   ---->
      <?php foreach($user_campaigns_data as $user_campaigns_datas){      ?>
<div class="col-md-6 col-lg-4">
				<div class="post-card mt-4">
					<div class="post-card-header d-flex justify-content-between align-items-center mb-3">
						<button type="button" class="post-share-btn" data-toggle="tooltip" data-placement="top" title="Share the donation on social media">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</button>
						<h5><?php if($user_campaigns_datas['campaign_name']){echo $user_campaigns_datas['campaign_name']; }?></h5>
					</div>
					<div class="post-card-details">
						<a href="" class="d-block">
							<img src="<?php if($user_campaigns_datas['campaign_name']){echo $user_campaigns_datas['image']; }?>" alt="image" class="w-100">
							<div class="range-slider">	
								<div class="d-inline-block range-slider-bg" style="width:41%;">
									41%
								</div>
							</div>
						</a>
							<div class="row post-card-details-inner mt-4">
								<div class="col">
									<span>collected</span>
									<label class="d-flex justify-content-end align-items-center m-0"> <small class="mr-2 text-nowrap">AED</small><?php if($user_campaigns_datas['amount']){echo $user_campaigns_datas['amount']; }?></label>
								</div>
							</div>
							<form action="<?php echo base_url(); ?>Home/campaignOperSingleView?id=<?php if($user_campaigns_datas['id']){ echo $user_campaigns_datas['id']; } ?>" id="user_campaigns_form" method="GET" enctype="multipart/form-data">
								<div class="d-flex mt-3 justify-content-between">
							
									<button class="btn ctm_round_btn px-3  mx-2 " type="submit" name="submit" id="user_campaigns_btn" onclick="navigateToDonation(this, '/projects/0/11728')">
										Donate now
									</button>
									<div class="ctm-input-set">
										<input  type="text"  name="amt"class="form-control" id="amtt" placeholder="Donation amount" required>
										<input  type="hidden" name="id" value="<?php echo $user_campaigns_datas['id']; ?>" class="form-control" placeholder="" >
										<span class="ctm-input-span" aria-hidden="true">AED</span>
									</div>
								</div>
							</form>
							 <div class="border-line"></div>
							<div class="text-center">
								<a href="<?php echo base_url(); ?>Home/campaignOperSingleView?id=<?php if($user_campaigns_datas['id']){ echo $user_campaigns_datas['id']; } ?>" class="text-dark">Case details</a>
							</div>
					</div>
				</div>
			</div> 
			
			<?php  
                }
			?>
		
		
		
<!---   test data   ---->		
	
		</div>
	</div>
</section>
<!-- relief post-card section end here -->





