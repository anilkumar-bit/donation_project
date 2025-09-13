<!DOCTYPE html>
<html>

	<head>
		<link rel="icon" type="image/png" href="<?php echo config_item('asset'); ?>image/site_logo.png"> 
		<title>Rahma Gulfsocially</title>
	   <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo config_item('asset'); ?>css/bootstrap.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/font-awesome.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/owl.carousel.min.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/style.css?<?php
echo(rand());?>" rel="stylesheet">
		<link href="<?php echo config_item('asset'); ?>css/custom.css?<?php
echo(rand());?>" rel="stylesheet">
<link href="<?php echo config_item('asset'); ?>css/responsive.css?<?php
echo(rand());?>" rel="stylesheet">
	</head>
	
<body class="text-right">


<!-- header start here -->

<header>

	<div class="nav-top d-md-block">
		<div class="container position-relative">
			<div class="nav nav-underline justify-content-between align-items-center">
			
			
			
			
			
			<div class="d-flex">
			
				<a class="nav-link p-0 pr-2 cart_count " href="">
						
						<span><i class="fa fa-envelope-o" aria-hidden="true"></i> </span> <span class="text_detail"> info@rahma.org.ae <span>
                     </a>
					 
					 
					 
					 <a class="nav-link p-0 px-2 cart_count " href="">
						<span><i class="fa fa-phone" aria-hidden="true"></i> </span> <span class="text_detail">800-90</span>
						
                     </a>
					 
					 
					 
					 
					 
					 <a class="nav-link p-0 px-2  " href="">
						
						<span><i class="fa fa-map-marker" aria-hidden="true"></i> </span> <span class="text_detail">Abu Dhabi, United Arab Emirates</span>
                     </a>
			
			
			</div>
			
			
					<!-- <a class="nav-link p-0 pr-3 cart_count icon_bg" href="">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     </a>
					 
					 
					 <?php
					$status = $this->primary->is_logged_in();				
				 	if ($status) {
					?>
						<div class="dropdown profile-ctm-logout pl-3 ">
							<a href="" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php  //echo $this->session->all_userdata('user')['user'][0]['fname']; ?> <span class="icon_bg ml-2"> <i class="fa fa-user" aria-hidden="true"></i></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="<?php //echo base_url();?>/User/loginSucc">حسابي <i class="fa fa-user" aria-hidden="true"></i></a>
								<a class="dropdown-item" href="<?php ///echo base_url();?>/Logout">خروج <i class="fa fa-sign-out" aria-hidden="true"></i></a>
							</div>
							
						
							
						</div>
					<?php
					}else{
						?>
						<a class="nav-link  p-0 pl-3 icon_bg" href="<?php //echo base_url();?>login">
						 <i class="fa fa-user" aria-hidden="true"></i>
                     </a>
						<?php
					}
					?>
					-->
					<!-- <a href="<?php //echo base_url(); ?>User/user_campaigns?area=هدية رحمة" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset'); ?>image/Gift_icon.png" alt="icon" width="40px">
					</a>
					
					<a href="<?php //echo base_url(); ?>User/user_campaigns?area=الغالين علينا" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset'); ?>image/soul_icon.png" alt="icon" width="40px">
					</a>
					
					<a href="<?php //echo base_url(); ?>User/user_campaigns?area=زميل العمل" class="header_icons_img pl-3">
						<img src="<?php //echo config_item('asset'); ?>image/colleague_icon.png" alt="icon" width="40px">
					</a> -->
					
					
					<ul class="social_icon_part text-left"> 
						<li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
					
					
               </div>
			  
		</div>
	</div>
	
	
	
<div class="navigation_section">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light p-0 ">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  
		 <!---  <a href="<?php echo base_url();?>/all" class="ctm_round_btn d-lg-none">تبرع الآن</a>  -->
		  
		  
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">	
		  
		  
		  <div class="container dextop_padding_0">
		  
			<!-- <a href="<?php echo base_url();?>/all" class="ctm_round_btn d-none d-lg-block">تبرع الآن</a>  -->
			
			<div class="d-flex justify-content-between align-items-center responsive_tongle_nav">
			
		<a href="<?php echo base_url();?>all" class="ctm_round_btn">تبرع فوري</a> 
			
			
			<ul class="navbar-nav mr-ctm align-items-center">
		
				
			
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					أنشطة
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					
						<div class="container">
						
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<!-- <a class="listitem" href="<?php // echo base_url();?>topdonaters">
								<img src="<?php // echo config_item('asset'); ?>image/rahma_icon.png?<?php
									// echo(rand());?>" alt="icon">
								<p>أخبار </p>
							</a> -->
							
							<a class="listitem" href="<?php echo base_url();?>gallery">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>صالة عرض</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url();?>videos">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>أشرطة فيديو</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url();?>topcompanies">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>تنظيم النشاط معنا</p>
							</a>
							
							
							</div>
							
					</div>
					
					</div>
				  </li>
					
				
				  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<!-- فرص التبرع -->
						الفرص
						
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						
						<div class="container">
						  <div class="listitem_sec d-flex justify-content-center">
						  
						  
						  
						  
						  <a class="listitem" href="<?php echo base_url(); ?>User/user_campaigns?area=هدية رحمة">
								<img src="<?php echo config_item('asset'); ?>image/Cancer_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>حالات السرطان</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>gift">
								<img src="<?php echo config_item('asset'); ?>image/Gift_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>الهدايا</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>zakat">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>حاسبة الزكاة</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>User/user_campaigns?area=زميل العمل">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>التبرع بشكل دوري</p>
							</a>
						  
							
							
							</div>
					</div> 
						</div>
				  </li>
				  
				  
				  
				  
				  <li class="nav-item">
					<div class="position-relative">
						<a class="nav-link" href="<?php echo base_url(); ?>news">الاخبار</a>
						</div>
					 </li>
					 
					 
				  <!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
					<!-- إعلام السرطان -->
					 
	
					 
					<!-- </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					
						<div class="container">
						
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<a class="listitem" href="<?php //echo base_url();?>committee">
								<img src="<?php //echo config_item('asset'); ?>image/rahma_icon.png?<?php
									//echo(rand());?>" alt="icon">
								<p>اللجنة الشرعية </p>
							</a>
							
							<a class="listitem" href="<?php //echo base_url();?>/donationcampaign">
								<img src="<?php //echo config_item('asset'); ?>image/rahma_icon.png?<?php
								//echo(rand());?>" alt="icon">
								<p>المتجر</p>
							</a>
							
							
							
							</div>
							
					</div>
					
					</div>
				  </li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <!-- عن رحمة -->
					   عن Rahma
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					 <div class="container">
						  <div class="listitem_sec d-flex justify-content-center">
						  
							<a class="listitem" href="<?php echo base_url(''); ?>about_rehma_association">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>موجز عن الرابطة</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>#">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>بعثة</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>vision_and_mission">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>اللجنة</p>
							</a>
							
							<a class="listitem" href="<?php echo base_url(); ?>board_of_directors">
								<img src="<?php echo config_item('asset'); ?>image/rahma_icon.png?<?php
									echo(rand());?>" alt="icon">
								<p>مجلس الإدارة</p>
							</a>
							
							</div>
					</div>
					</div>
				  </li>
					
					<!-- <li class="nav-item">
					<div class="position-relative">
						<a class="nav-link" href="#">أنصار</a>
						</div>
					 </li> -->
					
			</ul>
			</div>
				</div>
		  </div>
			<a href="<?php echo base_url();?>" class="navbar-brand">
					<img src="<?php echo config_item('asset'); ?>image/vertical_logo.png" alt="Logo">
				</a>
		  
		</nav>
		
		</div>
	</div>


</header>


<!-- header end here -->