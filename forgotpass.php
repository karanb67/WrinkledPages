<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
      <link rel="stylesheet" href="css/forg.css">
  </head>
  <script>
function myFunction() {
  alert("OTP is 366972");
}
</script>
  <body>
    <div class="background">
      <div class="leftcon">
        <img src="images/left.png" alt="">
      </div>
      <div class="rightcon">
      <p>  <img src="images/kiddo.png" alt=""></p>
      <div class="form">
        <form method="post">
          <i><p class="welcome">Forgot Your Password?</p></i>
    <p>    <input type="text" placeholder="Enter Email" name="email" required class="ebox">
<br>
        <input type="text" placeholder="OTP" name="otp" required class="ebox otp" onclick="myFunction()">
<br>
        <input type="password" placeholder="Password" name="psw" required class="ebox"></p>
<br>
      </div>
        <button type="submit" name="add" class="btn btn1" style="margin-left:33%;">Proceed</button>
</div>
</div>
  </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['add']))
{
$email=$_POST['email'];
$otp=$_POST['otp'];
$psw=$_POST['psw'];
$sql= "SELECT email FROM signup WHERE signup.email='$email'";
if ($sql) {
if ($otp==366972)
{
$query="UPDATE signup SET psw = '$psw' WHERE signup.email = '$email'";
}
else {
  echo "wrong otp";
}
$result = mysqli_query($con,$query);
if (! $result)
{
  echo "Can't UPDATE";
}
else {
echo "Password Updated!";
header("location: login.php");
}
}
}
$con->close();
 ?>
