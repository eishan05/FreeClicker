<?php
  session_start();
  $connection=mysqli_connect("localhost","root","","hackathon");
  
  if(!$connection)
    die("Connection with database failed");

  
  $name=$university=$studentNumber=$email=$pwd="";

   function test_input($data) 
   {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
   $name=test_input($_POST["name"]);
   $university=test_input($_POST["university"]);
   $studentNumber=test_input($_POST["studentNumber"]);
   $email=test_input($_POST["email"]);
   $pwd=test_input($_POST["pwd"]);

   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo "ErrorInName.. you will be redirected back.. please type in name without numbers or special symbols";
     $url='studentSignup.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        die("Try Again");
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "InvalidEmailFormat.. you will be redirected back"; 
     $url='studentSignup.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        die("Try Again");
   }  
   $newPwd=md5($pwd);

   $query="INSERT INTO students(name,university,studentid,email,password)
           VALUES('$name','$university','$studentNumber','$email','$newPwd')";

    if(mysqli_query($connection,$query))
      {
            $_SESSION["type"]="student";
            $_SESSION["name"]=$row["name"];
            $_SESSION["idNumber"]=$row["studentid"];
            $_SESSION["university"]=$row["university"];
           echo "Your account has been created..please wait while we redirect you to your home page";
           $url='studentHomePage.php';
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
      }
    else
      {
          echo mysqli_error($connection);
           $_SESSION["type"]="unauthorised";
           echo "try to use unique student id and pwd... redirecting...";
           $url="studentSignup.php";
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
      }


   mysqli_close($connection);


?>