<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/tooplate-style.css">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <script src="js/modernizr-2.7.1.js"></script>
  <script src="js/jquery.parallax.js"></script>



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
          
            <li><a href="index.php">Home</a></li>
            <li><a href="activitieshome.php"  class="active">Activities</a></li>
            <li><a href="contacts.php">Contact us</a></li>
            <li><a href="account.php">Account</a></li>
            <li><a class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php include ('helloUser.php')?>
            <ul class="dropdown-menu">
             <li><a href="byeUser.php">Logout</a></li>
            </ul>
          </a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!--the competition body -->
   <h1 style="color:black; text-align:center;">Compete to be the Champion </h1>
  
<!-- ACTIVITIES SECTION -->
<section id="service" class="parallax-section">
     <div class="container">
         
          <div class="row">

          <div class="container" style="margin-left:290px;">
          
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-thumb">
                         <i class="fas fa-user-graduate" style='font-size:36px; color: #ce0a21; padding-bottom: inherit; padding-top: inherit;'></i>
                         <h4>Do Addition</h4>
                         <p>Enter the addition competition</p>
                         <a href="addCompetition.php" class="btn btn-primary btn-lg">Compete </a>
                    </div>
         </div>

               <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-thumb">
                       <i class="fas fa-user-graduate" style='font-size:36px; color: #ce0a21; padding-bottom: inherit; padding-top: inherit;' ></i>
                         <h4>Do Subtraction</h4>
                         <p>Enter the subtraction competition</p>
                         <a href="subCompetition.php" class="btn btn-primary btn-lg">Compete </a>
                    </div>
               
               </div>

               </div>
          </div>
     </div>
</section>

<!--top scorers to be displayed -->
    <h2 style="text-align:center;text-decoration:underline;">Competition champions</h2>

    <!-- columns for data -->
    <div class="container">
      <?php 
      
    define('DBSERVER', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBNAME', 'registration');

    $con = mysqli_connect(DBSERVER,DBUSER,DBPASSWORD,DBNAME) or die(mysqli_connect_errno());
    $query = mysqli_query($con, "SELECT competitionType,username,answers,usedTime FROM competition");

    echo "<table>";
    echo "<tr><th>Competition</th><th>Username</th><th>Correct Answers</th><th>Time in seconds</th></tr>";

    while($row = mysqli_fetch_array($query)) {
    $competitionType = $row['competitionType'];
    $username = $row['username'];
    $answers = $row['answers'];
    $mytime = $row['usedTime'];
    echo "<tr><td style='width: 200px;'>".$competitionType."</td><td style='width: 200px;'>".$username."</td><td style='width: 600px;'>".$answers."</td><td>".$mytime."</td></tr>";
} 

echo "</table>";

      ?>
    </div>

 <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p><small>Copyright &copy; Math for Kids. All rights reserved.</small></p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>