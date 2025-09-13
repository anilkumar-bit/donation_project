



<!--DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter User Registration Form Demo</title>
    <link href="<?php //echo base_url("bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php// echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>User Registration Form</h4>
            </div>
            <div class="panel-body">
                <?php //$attributes = array("name" => "registrationform");
               // echo form_open("user/register", $attributes);?>
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php //echo set_value('fname'); ?>" />
                    <span class="text-danger"><?php// echo form_error('fname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php //echo set_value('lname'); ?>" />
                    <span class="text-danger"><?php //echo form_error('lname'); ?></span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php //echo set_value('email'); ?>" />
                    <span class="text-danger"><?php //echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Password</label>
                    <input class="form-control" name="password" placeholder="Password" type="password" />
                    <span class="text-danger"><?php //echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Confirm Password</label>
                    <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                    <span class="text-danger"><?php //echo form_error('cpassword'); ?></span>
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php //echo form_close(); ?>
                <?php //echo $this->session->flashdata('msg'); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html-->

<?php
         $status = $this->primary->is_logged_in();
if ($status) {
	redirect(config_item(base_url()) . 'User/loginSucc');
} 
   ?>


<section class="main_content"> 
	<div class="container">
		<div class="row justify-content-center text-right">
			<div class="col-md-12 col-md-8 col-lg-6 col-xl-5 col-12 mb-3">
				<div class="form_section_content">
				    <?php 
				    // echo "<pre>";
				    // print_r($this->session->flashdata());
				    // echo "</pre>";
				    ?>
					 <?php echo $this->session->flashdata('verify_msg'); ?>
						<form action="<?php echo base_url() ?>register" method="POST">
						<div class="text-center">
							<img class="mb-3 rounded-circle " src="<?php echo config_item('asset'); ?>image/login_icon.png" alt="" width="80">
					
							<h4>حساب جديد</h4>
						</div>
							<div class="form-group">
							  <label for="name">الاسم الأول</label><br>
							  <input type="text"  name="fname" class="form-control">
							</div>
							<div class="form-group">
							  <label for="name">الكنية</label><br>
							  <input type="text"  name="lname" class="form-control">
							</div>
							
							<div class="mobile number">
							  <label for="number">رقم الجوال</label><br>
							  <input type="text" name="phone"  placeholder="45000000000" class="form-control">
							</div>
							<div class="form-group">
							  <label for="email">البريد الإلكتروني</label><br>
							  <input type="Email"  name="email" class="form-control">
							</div>
							<div class="form-group">
							  <label for="password">password</label><br>
							  <input type="password"  	name="password" class="form-control">
							</div>
								<div class="form-group">
							  <label for="password">Confirm password</label><br>
							  <input type="password"  	name="cpassword" class="form-control">
							</div>
							
							
							<div class="ctm_btn">
							
								<button class="ctm_radius_btn" name="submit" type="submit" >انشئ حساب</button>
							</div>
							
							<div class="button_txt">
								<a href="<?php echo base_url('login'); ?>">تسجيل الدخول</a>
							<!--	<p>هل لديك حساب؟ </p>  -->
								
							</div>
							
						</form>
						<?php echo $this->session->flashdata('msg'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
