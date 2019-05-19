<?php 
include('server.php'); 
include('errors.php'); 
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">


    function validate(form){
    var x=document.myform.email.value;  
    var password_1=document.myform.password_1.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
    }
    else if(password_1.length<6){
alert("Password must be at least 6 characters long.");  
  return false;
    }
    
    }
	
</script>

	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="img/registration-form-8.jpg" alt="">
			</div>
			<div class="form-inner">
				<form name="myform" method="post"  action="signup.php" onsubmit="return validate(this);">
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="img/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" name="username"  class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" value="<?php echo $username; ?>"  required>
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="text" name="email" class="form-control" data-validation="email"  value="<?php echo $email; ?>" required >
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" name="password_1" class="form-control" data-validation="length" data-validation-length="min8">
					</div>
					<div class="form-group" >
						<label for="">Confirm Password:</label>
						<input type="password" name="password_2"  class="form-control" data-validation="length" data-validation-length="min8">
					</div>

					<button type="submit" name="reg_user">create my account</button><br>
        
  		Already a member? <a href="signin.php">Sign in</a>
  

					<div class="socials">
						<p>Sign up with social platforms</p>
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