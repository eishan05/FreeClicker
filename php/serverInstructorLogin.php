<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","hackathon");
  
  if(!$connection)
    die("Connection with database failed");
  
  $employeeNumber=$_POST["employeeNumber"];
  $pwd=$_POST["pwd"];

  $query="SELECT * FROM employees WHERE employeenumber='$employeeNumber'";

  $result=mysqli_query($connection,$query);

  if(!$result)
  	echo "You don't have an account";
  else
  	{
  		$row=mysqli_fetch_assoc($result);
  		$givenPwd=md5($pwd);
  		if($givenPwd==$row["password"])
  			{
            $_SESSION["type"]="instructor";
            $_SESSION["name"]=$row["name"];
            $_SESSION["idNumber"]=$row["employeenumber"];
            $_SESSION["university"]=$row["university"];
  			    $url="instructorHomePage.php";
            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  			}
  		else
  			{
           $_SESSION["type"]="unauthorised";
         echo "Wrong Password/Student Number...redirecting to login page";
            $url="instructorLogin.php";
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        }
  	}
     
  mysqli_close($connection);


?>