<?php
// Initialize the session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "wrinkledpages";
$con = mysqli_connect($servername,	$username, $password, $database);
if (isset($_POST['add'])) {
    $email = $_POST['e'];
    $psw = $_POST['ps'];
        $sql = "select * from signup where email = '$email' and psw = '$psw'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
      //  $count = mysqli_num_rows($result);
        if($row>0){
        $_SESSION['add']=$email;
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
           Header("location:index.php");
        }
        else{
             echo "<br><br><br><br><br><p><center>Login failed...."."<br></center></p><br>";
              echo "<p><center>Check your Email Id and Password</center></p>";
        }
}
?>
