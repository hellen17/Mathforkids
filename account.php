<?php session_start(); 

  $user_data = isset($_SESSION['user_data'])? $_SESSION['user_data'] : null;
  $errors = array();
  $conn = mysqli_connect('localhost', 'root', '', 'registration');
  include 'errors.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
 <meta charset="utf-8">
  <title>Math for Kids</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/main.css">
  

  <link rel="stylesheet" href="css/bootstrap.min.css">

 <!--  <link rel="stylesheet" href="css/main.css"> -->

  <script src="js/modernizr-2.7.1.js"></script>


  <link rel="shortcut icon" href="/favicon.ico">

</head>
<body>

 <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php" >Home</a></li>
            <li><a href="activitieshome.php">Activities</a></li>
            <li><a href="contacts.php">Contact us</a></li>
            <li><a href="account.php" class="active">Account</a></li>
            <li><a class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php include ('helloUser.php');?>
            <ul class="dropdown-menu">
             <li><a href="byeUser.php">Logout</a></li>
            </ul>
          </a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <br><br><br>

<form class="form-horizontal" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<fieldset>

<?php include "flashdata.php";?>
<!-- Form Name -->
<legend style="text-align: center;">Update User Profile</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="your name" class="form-control input-md" required="" value="<?=$user_data['username']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="your email address" class="form-control input-md" value="<?=$user_data['email']?>">
    
  </div>
</div>
<hr>




</fieldset>
</form>


<form class="form-horizontal" method="post" action="account_action.php">
<fieldset>
<br><br>
<h3 style="text-align: center;">Reset Password</h3>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Current Password</label>  
  <div class="col-md-4">
  <input id="textinput" name="current_password" type="password" placeholder="Enter your current password" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="textinput" name="new_password" type="password" placeholder="Enter your new password" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Confirm Password</label>  
  <div class="col-md-4">
  <input id="textinput" name="confirm_password" type="password" placeholder="Confirm password" class="form-control input-md">
    
  </div>
</div>


<!-- Button (Double) -->
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsave">Save Changes</label>
  <div class="col-md-8">
    <button type="submit" id="btn_save_pwd" name="btn_save_pwd" class="btn btn-success">Save</button>
   <!--  <button id="btncancel" name="btncancel" class="btn btn-danger">No</button> -->
  </div>
</div>

</fieldset>
</form>

</body>
</html>