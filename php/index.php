<?php
  session_start();
  if(isset($_SESSION["type"])&&$_SESSION["type"]=="student")
  {
     $url="studentHomePage.php";
     echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
     die();
  }
  else if(isset($_SESSION["type"])&&$_SESSION["type"]=="instructor")
  {
    $url="instructorHomePage.php";
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    die();
  }
?>
<html>
    <head>
        <title>Alpha 2</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<style type="text/css">
		  body
		  {
		  	  font-family:comic;
		  	  font-size:20px;
		  	  padding:0px;		
          color:#006dcc; 
		  }
		.bg-1
		   {
              background: #006dcc;
              color:white;
              font-size:30px;
              
		   }
		   .bg-2
		   {
		   	 margin:50px;
		   	 padding:0px;
		   }
		   .row
		   {
		   	margin:20px;
		   	padding:0px;
		   }
		   .bg-4
		   {
		   	margin:50px;
		   	padding:0px;
		   }

		</style>
    </head>

    <body>
        <div class="jumbotron text-center bg-1"><h1>Free Clicker</h1></div>

        <div class="container-fluid text-center bg-2">This is the alpha version of the free interactive question and answer web app developed to enhance learning in high schools and universities. This is to be used by instructors and students. Instructors can ask questions during lectures or they can prepare graphic heavy questions beforehand. Students get to answer questions and learn interactively.</div>

        <div class="container-fluid text-center bg-3">
        	<div class="row"><h2>I am</h2></div>
        	<div class="row">
        		<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#instructorLoginSignup">Instructor</button>
        	</div>
        	<div class="row collapse" id="instructorLoginSignup">
        		<a href="instructorSignup.php"><button class="btn btn-primary btn-lg">Signup</button></a>
        		<a href="instructorLogin.php"><button class="btn btn-primary btn-lg">Login</button></a>
        	</div>
        </div>
        <div class="container-fluid text-center">
        	<div class="row">
        	    <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#studentLoginSignup">Student</button>
        	</div>
        	<div class="row collapse" id="studentLoginSignup">
        		<a href="studentSignup.php"><button class="btn btn-primary btn-lg">Signup</button></a>
        		<a href="studentLogin.php"><button class="btn btn-primary btn-lg">Login</button></a>
        	</div>
        </div>

        <div class="container-fluid text-center bg-4">
            <p>This is created by Eishan Lawrence, second year Computer Engineering student at University of British Coumbia.</p>         
        </div>
    </body>
</html>