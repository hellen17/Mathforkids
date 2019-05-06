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
            <li><a href="activitieshome.php" class="active">Activities</a></li>
            <li><a href="contacts.php">Contact us</a></li>
            <li><a href="#account">Account</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <br><br><br><br>

     
		<!--button to check for answers--> 
		<script>
			
			function getAnswer()
			{
				document.getElementById("answer").style.display = 'block';
				
			}

			
		</script>


	<div class="container" style="margin-left: 450px;">
	
	<h1 style="color: black; margin-left: -60px;">Subtraction Sums</h1><br><br><br><br>
	<p id="answer" style="display: none; font-size: 30px;"></p><!-- where the answer is displayed -->


	<script type="text/javascript">
		

		//first addition value
		var firstNum = Math.ceil(5 * Math.random());
		//second addition value
		var secondNum = Math.ceil(5 * Math.random());
		//answer
		var solution = firstNum - secondNum;

		document.write(firstNum + '-' + secondNum +'= ?');


		document.getElementById("answer").innerHTML = "The answer is " + solution;
	</script>

			<input type="text" id="myAnswer" placeholder="Type answer"><br><br>
			<button type="button" onclick="getAnswer()">Check Answer</button>
			<button type="button" ><a href="subtraction.php">Next Sum</a></button></div>


			 
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