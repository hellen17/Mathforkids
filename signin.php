<?php 
include('server.php'); 
include('errors.php');

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign in</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">


	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="img/registration-form-8.jpg" alt="">
			</div>
			<div class="form-inner">
				<form name="myform" method="post"  action="signin.php">
					<div class="form-header">
						<h3>Login</h3>
						<img src="img/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" name="username"  class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" value="<?php echo $username; ?>"  required>
					</div>
					
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" name="password_1" class="form-control" data-validation="length" data-validation-length="min8">
					</div>
					

					<button type="submit" name="login_user">Login</button><br>
       
  		           New here? <a href="signup.php">Sign Up</a>
  	

					<div class="socials">
						<p>Sign in with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>