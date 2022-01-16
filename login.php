<!DOCTYPE html>
<html>
  <head>
    <title>Log in </title>
    <link rel="stylesheet" href="css/login1.css">
  </head>
  <body>
    <div class="background">
      <div class="leftcon">
        <img src="images/left.png" alt="">
      </div>
      <div class="rightcon">
        <img src="images/loginn.png" alt="">
        <div class="form">
          <form action="loginn.php" method="POST">
            <i><p class="welcome">Books Choose Their Readers</i><br><br>
          <span><input type="text" placeholder="Enter Email" name="e" required class="ebox">
          <br>
            <input type="password" placeholder="Enter Password" name="ps" required class="pbox"></span><br>
            <button type="submit" name="add" class="btn">Log in </button></p>
          </form>
          <a href="forgotpass.php"><p class="clicklogin">Forgot Password?</p></a>
          <a href="signup.php"><p>SignUp</p></a>
          <br>
        </div>
      </div>
    </div>
  </body>
</html>
