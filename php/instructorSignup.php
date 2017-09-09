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
        <title>Instructor Signup</title>
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
              padding:30px;
		   }
		</style>
    </head>

    <body>
    	<div class="jumbotron text-center bg-1"><h1>Free Clicker</h1></div>

    	<div class="container-fluid">
    	  <div class="col-sm-2"></div>
    	  <div class="col-sm-8">
    		<form action="serverInstructorSignup.php" method="post">
		<div class="alert alert-info text-center">Instructor Signup Form</div>
       <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name">
       </div>
		   <div class="form-group">
		        <label>University:</label>
				<input type="text" class="form-control" id="university" name="university">
		   </div>
		   <div class="form-group">
		       <label>Employee Number:</label>
			   <input type="text" class="form-control" id="employeeNumber" name="employeeNumber">
		   </div>
           <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
           </div>
           <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="pwd" id="pwd" >
           </div>
           <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
           </div>
           <button type="submit" class="btn btn-default sub" disabled>Submit</button>
        </form>
        </div>
    	</div>

      <script>
         $(document).ready(function(){
              $("#pwd").blur(function(){
                if($("#pwd").val().length==0)
                {
                  $("#pwd").css("border","solid red 1px");
                }
                else
                {
                  $("#pwd").css("border","solid green 1px");
                  $(".sub").removeAttr("disabled");
                }
              });

              $("#name").blur(function(){
                if($("#name").val().length==0)
                {
                  $("#name").css("border","solid red 1px");
                }
                else
                {
                  $("#name").css("border","solid green 1px");
                }
              });

              $("#university").blur(function(){
                if($("#university").val().length==0)
                {
                  $("#university").css("border","solid red 1px");
                }
                else
                {
                  $("#university").css("border","solid green 1px");
                }
              });

                $("#employeeNumber").blur(function(){
                if($("#employeeNumber").val().length==0)
                {
                  $("#employeeNumber").css("border","solid red 1px");
                }
                else
                {
                  $("#employeeNumber").css("border","solid green 1px");
                }
              });

                  $("#email").blur(function(){
                if($("#email").val().length==0)
                {
                  $("#email").css("border","solid red 1px");
                }
                else
                {
                  $("#email").css("border","solid green 1px");
                }
              });
         });
      </script>
    </body>
</html>