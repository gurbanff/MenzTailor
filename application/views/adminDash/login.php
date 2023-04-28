<?php

	if(isset($_SESSION['admin_id'])){
		redirect(base_url('Dashboard'));
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('public/loginPanel/'); ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/adminDash/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/loginPanel/'); ?>assets/css/main.css">
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
    
    <style>
        .loginwindow
        {
            padding-bottom: 180px;
        }

    </style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 loginwindow">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('public/loginPanel/'); ?>assets/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" role="form" action="<?php echo base_url('LoginAct'); ?>" method="post">
					<span class="login100-form-title">
						Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: @gmail.com">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<?php if($this->session->flashdata('err')){ ?>

						<div class="alert alert-danger text-center text-danger">
							<?php echo $this->session->flashdata('err'); ?>
						</div>

					<?php }; ?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">Login</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('public/loginPanel/'); ?>assets/js/main.js"></script>

</body>
</html>