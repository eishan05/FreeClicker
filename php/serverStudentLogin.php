<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","hackathon");
  
  if(!$connection)
    die("Connection with database failed");
  
  $studentNumber=$_POST["studentNumber"];
  $pwd=$_POST["pwd"];

  $query="SELECT * FROM students WHERE studentid='$studentNumber'";

  $result=mysqli_query($connection,$query);

  if(!$result)
  	echo "You don't have an account";
  else
  	{
  		$row=mysqli_fetch_assoc($result);
  		$givenPwd=md5($pwd);
  		if($givenPwd==$row["password"])
  			{ 	$_SESSION["type"]="student";
            $_SESSION["name"]=$row["name"];
            $_SESSION["idNumber"]=$row["studentid"];
            $_SESSION["university"]=$row["university"];	   
            $url="studentHomePage.php";
            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  			}
  		else
  			{
          $_SESSION["type"]="unauthorised";
          echo "Wrong Password/Student Number...redirecting to login page";
          $url="studentLogin.php";
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        }
  	}

  mysqli_close($connection);


?>