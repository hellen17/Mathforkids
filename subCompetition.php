<?php
session_start();

    
      if (isset($_POST['results'])) {
        # code...
        $competition = $_POST['compete'];
        $myname = $_SESSION['username'];
        $score = $_POST['totalAnswer'];
        $myTime = $_POST['ttime'];

        
      define('DBSERVER', 'localhost');
      define('DBUSER', 'root');
      define('DBPASSWORD', '');
      define('DBNAME', 'registration');

      $con = mysqli_connect(DBSERVER,DBUSER,DBPASSWORD,DBNAME) or die(mysqli_connect_errno());
      $query = mysqli_query($con, "INSERT INTO competition(competitionType,username,answers,usedTime) VALUES('$competition','$myname','$score','$myTime')");

      }
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
                
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="activitieshome.php">Activities</a></li>
                        <li><a href="contacts.php">Contact us</a></li>
                        <li><a href="#account">Account</a></li>
                        <li><a class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php include ('helloUser.php')?>
            <ul class="dropdown-menu">
             <li><a href="byeUser.php">Logout</a></li>
            </ul>
          </a></li>
                    </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </div>

            <!--Competition body -->
        <h2 style="text-align:center; text-decoration:underline;">Calculate as quickly as possible.<br>Click the 'START BUTTON' to record your time.</h2>
        <div style="text-align:center;">
                  <button onclick="start()">Start</button>

          <p id="a" style="color:black;"></p><input type="number" id="answerA">
          <p id="b" style="color:black;"></p><input type="number" id="answerB">
          <p id="c" style="color:black;"></p><input type="number" id="answerC">
          <p id="d" style="color:black;"></p><input type="number" id="answerD">
          <p id="e" style="color:black;"></p><input type="number" id="answerE">
          <p id="f" style="color:black;"></p><input type="number" id="answerF">
          <p id="g" style="color:black;"></p><input type="number" id="answerG">
          <p id="h" style="color:black;"></p><input type="number" id="answerH">

        </div>
     

      <script>
          let A = [];
          let B = [];
          let counter = 0;
          
          for (let i =0; i < 8; i++) {

              A.push(Math.ceil(5 * Math.random()));
              
          }
            
          for (let i =0; i < 8; i++) {

              B.push(Math.ceil(5 * Math.random()));
          }
          document.getElementById("a").innerHTML = A[0] + '-' + B[0];
          document.getElementById("b").innerHTML = A[1] + '-' + B[1];
          document.getElementById("c").innerHTML = A[2] + '-' + B[2];
          document.getElementById("d").innerHTML = A[3] + '-' + B[3];
          document.getElementById("e").innerHTML = A[4] + '-' + B[4];
          document.getElementById("f").innerHTML = A[5] + '-' + B[5];
          document.getElementById("g").innerHTML = A[6] + '-' + B[6];
          document.getElementById("h").innerHTML = A[7] + '-' + B[7];

          let A1 = A[0] - B[0];
          let A2 = A[1] - B[1];
          let A3 = A[2] - B[2];
          let A4 = A[3] - B[3];
          let A5 = A[4] - B[4];
          let A6 = A[5] - B[5];
          let A7 = A[6] - B[6];
          let A8 = A[7] - B[7];

          function getAnswer()
            {
                
          document.getElementById("a").style.display = 'block';
          document.getElementById("b").style.display = 'block';
          document.getElementById("c").style.display = 'block';
          document.getElementById("d").style.display = 'block';
          document.getElementById("e").style.display = 'block';
          document.getElementById("f").style.display = 'block';
          document.getElementById("g").style.display = 'block';
          document.getElementById("h").style.display = 'block';

          var Answer1 = document.getElementById("answerA").value;
          var Answer2 = document.getElementById("answerB").value;
          var Answer3 = document.getElementById("answerC").value;
          var Answer4 = document.getElementById("answerD").value;
          var Answer5 = document.getElementById("answerE").value;
          var Answer6 = document.getElementById("answerF").value;
          var Answer7 = document.getElementById("answerG").value;
          var Answer8 = document.getElementById("answerH").value;

          
            if (Answer1 == A1)
           {
            counter = counter + 1;

            if(Answer2 == A2)
          {
            counter = counter + 1;

            if(Answer3 == A3)
          {
            counter = counter + 1;

            if(Answer4 == A4)
          {
            counter = counter + 1;

            if(Answer5 == A5)
          {
            counter = counter + 1;

            if(Answer6 == A6)
          {
            counter = counter + 1;

            if(Answer7 == A7)
          {
            counter = counter + 1;

            if(Answer8 == A8)
          {
            counter = counter + 1;

          }
            

          }

          }

          }

          }

          }

          }
          }
          
        
          document.getElementById("totalAnswer").innerHTML = counter + " answers";

            }

      </script>        
      <div class="container" style="text-align:center;"><br><br>
      <button type="button" onclick="getAnswer();end();">Check Answer</button>
          <button type="button" ><a href="subCompetition.php">New Questions</a></button>
      </div>
         

                      <br><br>

            <!-- form to save user results -->
            <form action="subCompetition.php" method="post" style="text-align:center;">

            <input type="text" id="compete" name="compete" value="Subtraction" hidden>


            Total questions correct
            <textarea name="totalAnswer" id="totalAnswer" cols="39" rows="3" readonly ></textarea>

            Total time taken
            <textarea name="ttime" id="ttime" cols="39" rows="3" readonly ></textarea><br><br>
            <input type="submit" name="results" id="results" value="Save Results">

            </form>




            <!-- <button onclick="end()">End</button> -->
                    <script>
                    var startTime, endTime;

            function start() {
            startTime = new Date();
            };

            function end() {
            endTime = new Date();
            var timeDiff = endTime - startTime; //in ms
            // strip the ms
            timeDiff /= 1000;

            // get seconds 
            var seconds = Math.round(timeDiff);
            document.getElementById("ttime").innerHTML = seconds + " seconds";
            }
            </script>
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