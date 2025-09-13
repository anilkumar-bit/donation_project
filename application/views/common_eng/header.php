<!DOCTYPE html>
<html>

	<head>
		<link rel="icon" type="image/png" href="<?php echo config_item('asset_eng'); ?>image/site_logo.png"> 
		<title>Rahma Gulfsocially</title>
	   <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo config_item('asset_eng'); ?>css/bootstrap.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset_eng'); ?>css/font-awesome.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset_eng'); ?>css/owl.carousel.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset_eng'); ?>css/style.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset_eng'); ?>css/custom.css?<?php
echo(rand());?>" rel="stylesheet">
<link href="<?php echo config_item('asset_eng'); ?>css/responsive.css?<?php
echo(rand());?>" rel="stylesheet">
	</head>
	
<body>


<!-- header start here -->

<header>

	<div class="nav-top d-md-block">
		<div class="container position-relative">
		
		<a href="<?php echo base_url();?>" class="navbar-brand">
					<img src="<?php echo config_item('asset_eng'); ?>image/vertical_logo.png" alt="Logo">
				</a>
				
				
			<div class="nav nav-underline align-items-center justify-content-end">
					 <a class="nav-link p-0 pr-3 cart_count icon_bg" href="">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     </a>
					 
					 
					 <?php
					$status = $this->primary->is_logged_in();				
				 	if ($status) {
					?>
						<div class="dropdown profile-ctm-logout pl-3 ">
							<a href="" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php  echo $this->session->all_userdata('user')['user'][0]['fname']; ?> <span class="icon_bg ml-2"> <i class="fa fa-user" aria-hidden="true"></i></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="<?php echo base_url();?>/User/loginSucc">حسابي <i class="fa fa-user" aria-hidden="true"></i></a>
								<a class="dropdown-item" href="<?php echo base_url();?>/Logout">خروج <i class="fa fa-sign-out" aria-hidden="true"></i></a>
							</div>
							
						
							
						</div>
					<?php
					}else{
						?>
						<a class="nav-link  p-0 pl-3 icon_bg" href="<?php echo base_url();?>login">
						 <i class="fa fa-user" aria-hidden="true"></i>
                     </a>
						<?php
					}
					?>
					
					<!-- <a href="<?php //echo base_url(); ?>User/user_campaigns?area=هدية رحمة" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset_eng'); ?>image/Gift_icon.png" alt="icon" width="40px">
					</a>
					
					<a href="<?php //echo base_url(); ?>User/user_campaigns?area=الغالين علينا" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset_eng'); ?>image/soul_icon.png" alt="icon" width="40px">
					</a>
					
					<a href="<?php //echo base_url(); ?>User/user_campaigns?area=زميل العمل" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset_eng'); ?>image/colleague_icon.png" alt="icon" width="40px">
					</a> -->
					
					
					
					
               </div>
			   
		</div>
	</div>
	
	
	
<div class="navigation_section">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light p-0 ">
		
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">		  
			

			<ul class="navbar-nav mr-ctm">
			
			
				<li class="nav-item">
					<div class="position-relative">
						<a class="nav-link" href="#">Main</a>
						</div>
				</li>
				
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our programs
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					 <div class="container">
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<a class="listitem" href="<?php echo base_url(); ?>donationcampaign_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Campaigns</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>gift_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Present</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>zakat_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Zakat Calculator</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>zheras_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>planting</p>
							</a>
							
						</div>
					</div>
					</div>
				  </li>
				  
				  
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						mercy to all people
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					
						<div class="container">
						
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<a class="listitem" href="<?php echo base_url();?>committee_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Sharia Committee  </p>
							</a>
							
							<a class="listitem" href="<?php echo base_url();?>/donationcampaign_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>the shop</p>
							</a>
							

							
							</div>
							
					</div>
					
					</div>
				 </li>
				 
				 <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Opportunities
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						
						<div class="container">
						  <div class="listitem_sec d-flex justify-content-center">
						  
						  
						  
						  
						  <a class="listitem" href="<?php echo base_url(); ?>User/user_campaigns_eng?area=هدية رحمة">
								<img src="<?php echo config_item('asset_eng'); ?>image/Gift_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>a gift of mercy</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>User/user_campaigns_eng?area=الغالين علينا">
								<img src="<?php echo config_item('asset_eng'); ?>image/colleague_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>who are dear to us</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>User/user_campaigns_eng?area=زميل العمل">
								<img src="<?php echo config_item('asset_eng'); ?>image/soul_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Work colleague</p>
							</a>
						  
							
							</div>
						</div> 
						</div>
					</li>

					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					most giving
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					
						<div class="container">
						
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<a class="listitem" href="<?php echo base_url();?>topdonaters_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>VIP Donators</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url();?>topcompanies_eng">
								<img src="<?php echo config_item('asset_eng'); ?>image/Cancer_icon.png?<?php
								echo(rand());?>" alt="icon">
								<p>Top Company Donator</p>
							</a>
							
							
							</div>
							
					</div>
					
					</div>
				  </li>
			</ul>
			
			<a href="<?php echo base_url();?>/all" class="ctm_round_btn d-none d-lg-block">Donate now</a> 
			
		  </div>
		  
		  
		  
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  
		  <a href="<?php echo base_url();?>/all" class="ctm_round_btn d-lg-none">تبرع الآن</a> 
		  
		  
		
		</nav>
		</div>
	</div>


</header>


<!-- header end here -->