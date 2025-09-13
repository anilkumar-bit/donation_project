<?php
// echo "<pre>";
	// print_r($_COOKIE);
	// echo "</pre>";
// $cookie_name="last_page_url";
// if(!isset($_COOKIE['last_page_url'])) {
	// echo "<pre>";
	// print_r($_COOKIE['last_page_url']);
	// echo "</pre>";
     // echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
     // echo "Cookie '" . $cookie_name . "' is set!<br>";
     // echo "Value is: " . $_COOKIE[$cookie_name];
// }
// die();

$status = $this->primary->is_logged_in();
if ($status) {
	redirect(config_item(base_url()) . 'User/loginSucc');
} 

?>

	
<section class="main_content">
	<div class="container">
		<div class="row justify-content-center text-right">
			<div class="col-md-12 col-md-8 col-lg-6 col-xl-5 col-12 mb-3">
				<div class="form_section_content login_form_part">
					<?php
					
					
						$success_msg= $this->session->flashdata('success_msg');
					//	$error_msg= $this->session->flashdata('error_msg');
						$error_registeration= $this->session->flashdata('error_registeration');
						$error_registeration= $this->session->flashdata('error_registeration');
						$error_password= $this->session->flashdata('error_password');
						$error_email= $this->session->flashdata('error_email');

						if($success_msg){
							?>
							<div class="alert alert-success">
							<?php echo $success_msg; ?>
							</div>
							<?php
							}
							if($error_registeration){
							?>
							<div class="alert alert-danger">
							<?php echo $error_registeration; ?>
							</div>
							<?php
						}if($error_password){
							?>
							<div class="alert alert-danger">
							<?php echo $error_password; ?>
							</div>
							<?php
							}
							if($error_email){
							?>
							<div class="alert alert-danger">
							<?php echo $error_email; ?>
							</div>
							<?php
						}
					?>

					 <form role="form" method="post" action="<?php  echo base_url('Post_login'); ?>">
						<div class="text-center">
							<img class="mb-3 rounded-circle" src="<?php echo config_item('asset_eng'); ?>image/login_icon.png" alt="" width="80">
					
							<h4>Sign in</h4>
						</div>
						
							<div class="form-group">
							  <label for="email" >E-mail</label><br>
							  <input type="Email" class="form-control mt-3"  name="email" type="email" >
							</div>
							
							<div class="form-group">
							  <label for=pass>Password</label><br>
							 <input  class="form-control mt-3" type="password" name="password" required>
							</div>
							
							
							<div class="ctm_btn">
							
								      <input class="ctm_radius_btn" type="submit" value="sign in" name="login" >
							</div>
							
							<div class="button_txt">
								<a href="<?php echo base_url('register'); ?>">Create an account</a>
							<!--	<p>ليس لديك حساب؟  </p>  -->
								
							</div>
							
						</form>
				</div>
			</div>
		</div>
	</div>
</section>

