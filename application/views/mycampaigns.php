<?php 

?>

<!-- section account page start here   -->


<section class="admin_user_ctm_section">
	<div class="container">
		<div class="admin_section_inner p-4">
				<div class="row">
					<div class="col-md-8 col-lg-8 col-xl-9">
						<div class="custom_table_section">
							<h3 class="text-center mb-3">جميع المستخدمين</h3>
								<div class="admin_user_table-section">

									<table class="admin_user_table">
										<tbody>
											  <tr class="table_heading">
												<th>Donation</th>
												<th>Campaign name</th>
												<th>Amount</th>
												<th>Nationality</th>
												<th>Status</th>
											  </tr>
											  <?php 
												if($UserCampaign_data){
												foreach($UserCampaign_data as $Campaign_data) {  ?>
											  <tr>
												<td><?php if($Campaign_data['donation_area']){echo $Campaign_data['donation_area'];}?></td>
												<td><?php if($Campaign_data['campaign_name']){echo $Campaign_data['campaign_name'];}?></td>
												<td><?php if($Campaign_data['amount']){echo $Campaign_data['amount'];}?></td>
												<td><?php if($Campaign_data['nationality']){echo $Campaign_data['nationality'];}?></td>
												<td><?php if($Campaign_data['status']==0){echo "unapproved";}
												elseif($Campaign_data['status']==1){
													echo "approved";
												}
												else{
													echo "Rejected";
												}
												?></td>
											  </tr>
											  <?php
												}
												}
												?>
										</tbody>	  
										
									</table>
						</div>
					</div>
				</div>
				
				
				<div class="col-md-4 col-lg-4 col-xl-3">
				
					<?php
						// Load sidebar_view
						$this->load->view('sidebar');
					?>
			   </div>
            </div>
		</div>
	</div>
</section>

<!-- section account page end here   -->


