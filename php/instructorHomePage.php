<?php 
    session_start();
?>
<html>
   <head>
   	<title>Instructor Homepage</title>
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
		</style>
   </head>

   <body>
        <div class="jumbotron text-center bg-1"><h1>Free Clicker</h1></div>
        <p>Hello Instructor!</p>
        <form action="logout.php">
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
   </body>
</html>