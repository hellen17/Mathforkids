<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

  <link rel="stylesheet" href="">
  
  
	<script type="text/javascript" src="jquery-3.3.1.js" ></script>
	<script type="text/javascript" src="bootstrap.min.js" ></script>
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

  <script src="js/modernizr-2.7.1.js"></script>

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/favicon.ico">

<style type="text/css">
  h1{
    display: inline;
  }
 /* #fixed{
  background:url(math.jpg) no-repeat center center fixed;
  display: table;
  height: 60%;
  position: relative;
  width: 100%;
  background-size: cover;
 background-image: linear-gradient(rgba(255,0,0,0), rgba(255,0,0,1)),url(Therapistbg.jpg);
    background-position: center;
background-repeat: no-repeat;

}*/
</style>


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
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="addition.php" class="active">Activities</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li><a href="#account">Account</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <br><br><br><br>
    <h1>Have Some Questions?</h1>


<div class="mycontactform" style="padding-left:350px;">
<h1 style="color:black;">Get in Touch With Us</h1>
<form action="../server/contacts.php" method="POST">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Enter your first name here..." required autocomplete="off"><br>

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Enter your last name here..." required autocomplete="off"><br>

  <label for="email">Email</label>
  <input type="text" id="email" name="eemail" placeholder="Enter your email here..." required autocomplete="off"><br>

  <label for="county">County</label>
  <select id="county" name="ccounty" placeholder="Enter your county here..." required>
    <option value="Baringo">Baringo County</option>
    <option value="Bomet">Bomet County</option>
    <option value="Bungoma">Bungoma County</option>
    <option value="Busia">Busia County</option>
    <option value="ElgeyoMarakwet">Elgeyo Marakwet County</option>
    <option value="Embu">Embu County</option>
    <option value="Garissa">Garissa County</option>
    <option value="HomaBay">Homa Bay County</option>
    <option value="Isiolo">Isiolo County</option>
    <option value="Kajiado">Kajiado County</option>
    <option value="Kakamega">Kakamega County</option>
    <option value="Kericho">Kericho County</option>
    <option value="Kiambu">Kiambu County</option>
    <option value="Kilifi">Kilifi County</option>
    <option value="Kirinyaga">Kirinyaga County</option>
    <option value="Kisii">Kisii County</option>
    <option value="Kisumu">Kisumu County</option>
    <option value="Kitui">Kitui County</option>
    <option value="Kwale">Kwale County</option>
    <option value="Laikipia">Laikipia County</option>
    <option value="Lamu">Lamu County</option>
    <option value="Machakos">Machakos County</option>
    <option value="Makueni">Makueni County</option>
    <option value="Mandera">Mandera County</option>
    <option value="Meru">Meru County</option>
    <option value="Migori">Migori County</option>
    <option value="Marsabit">Marsabit County</option>
    <option value="Mombasa">Mombasa County</option>
    <option value="Muranga">Muranga County</option>
    <option value="Nairobi">Nairobi County</option>
    <option value="Nakuru">Nakuru County</option>
    <option value="Nandi">Nandi County</option>
    <option value="Narok">Narok County</option>
    <option value="Nyamira">Nyamira County</option>
    <option value="Nyandarua">Nyandarua County</option>
    <option value="Nyeri">Nyeri County</option>
    <option value="Samburu">Samburu County</option>
    <option value="Siaya">Siaya County</option>
    <option value="TaitaTaveta">Taita Taveta County</option>
    <option value="TanaRiver">Tana River County</option>
    <option value="TharakaNithi">Tharaka Nithi County</option>
    <option value="TransNzoia">Trans Nzoia County</option>
    <option value="Turkana">Turkana County</option>
    <option value="UasinGishu">Uasin Gishu County</option>
    <option value="Vihiga">Vihiga County</option>
    <option value="Wajir">Wajir County</option>
    <option value="WestPokot">West Pokot County</option>
  </select>
  <br>

  <label for="inquiry">Inquiry</label>
  <textarea id="inquiry" name="iinquiry" placeholder="Write your inquiry here..." style="height:100px" required autocomplete="off"></textarea><br>

  <input type="submit" value="Submit">
</form>

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