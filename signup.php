<?php
include 'connection.php';
if(isset($_POST['add']))
{
  $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$sql = "INSERT INTO signup (fname,lname,email,psw)
	VALUES ('$fname','$lname','$email','$psw')";
	if ($con->query($sql) === TRUE)
   {
    header("location: login.php");

	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}
}
	$con->close();
	?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/login1.css">
  </head>
  <body>
    <div class="background">
      <div class="leftcon">
        <img src="images/left.png" alt="">
      </div>
      <div class="rightcon">
        <i><p class="welcome1">Welcome Reader</p></i>
      <i><p class="start">Start your reading journey</p></i>
      <div class="form">
        <form method="post" required>
    <p>    <input type="text" name="fname" placeholder="First Name" required class="fbox">
        <input type="text" name="lname" placeholder="Last Name" class="lbox">
    <br>
        <input type="email" placeholder="Enter Email" name="email" required class="ebox">
    <br>
        <input type="password" placeholder="Enter Password" name="psw" required class="pbox" >
    <br>
    <p class="pass"> Password should be at least 8 characters long</p>
          <button type="submit" name="add" class="btn btn1">Sign up</button>
          </p>
    </form>
    </div>
      <p class="already">Already a member? </p>
    <a href="login.php"><u class="alogin"><p class="clicklogin">Click here to login</p></u></a>
  </body>
</html>
