<?php
  session_start();
  $connection=mysqli_connect("localhost","root","","hackathon");
  
  if(!$connection)
    die("Connection with database failed");

  
  $name=$university=$employeeNumber=$email=$pwd="";

   function test_input($data) 
   {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
   $name=test_input($_POST["name"]);
   $university=test_input($_POST["university"]);
   $employeeNumber=test_input($_POST["employeeNumber"]);
   $email=test_input($_POST["email"]);
   $pwd=test_input($_POST["pwd"]);

   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo "Error in name, account not created...You will be redirected back to the Signup page";
     $url='instructorSignup.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        die("...Try Again");
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "InvalidEmailFormat.. redirecting back..try again.."; 
     $url='instructorSignup.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
        die("...Try Again");
   }  
   $newPwd=md5($pwd);

   $query="INSERT INTO employees(name,university,employeenumber,email,password)
           VALUES('$name','$university','$employeeNumber','$email','$newPwd')";

    if(mysqli_query($connection,$query))
      {
            $_SESSION["type"]="instructor";
            $_SESSION["name"]=$row["name"];
            $_SESSION["idNumber"]=$row["employeenumber"];
            $_SESSION["university"]=$row["university"];
            echo "Your account has been created..please wait while we redirect you to your home page";
           $url='instructorHomePage.php';
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
      }
    else
      {
        echo mysqli_error($connection);
        echo " login failed.. please try to use a unique student/employees id.. you are being redirected..";
         $_SESSION["type"]="unauthorised";
          $url="instructorSignup.php";
           echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
      }


   mysqli_close($connection);


?>