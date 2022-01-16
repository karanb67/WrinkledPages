<!DOCTYPE html>
<html>
  <head>
    <title>My Account</title>
    <link rel="stylesheet" href="css/settin.css" type="text/css">
  </head>
  <body>
    <div class="background">
      <div class="leftcon">
        <h2>Wrinkled Pages</h2>
        <div class="menu">
          <ul>
            <li>
              <a href="index.php">HOME</a>
            </li>
            <li>
              <a href="about.php">ABOUT</a>
            </li>
            <li>
              <a href="discover.php">DISCOVER</a>
            </li>
            <li>
              <a href="topchart.php">RECOMMENDATIONS</a>
            </li>
            <li>
              <a href="settings.php">MY ACCOUNT</a>
            </li>
          </ul>
        </div>
        <div class="member">
          <p><a href="logout.php" class="signup">Log Out</a></p>
        </div>
      </div>
      <div class="rightcon">
<?php
session_start();
include ("connection.php");
$email= $_SESSION['add'];
        $sql = "select * from signup where email ='$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        ?>
      <?php if($row){?>
     <p class="namee"><span>WELCOME </span><?php  echo $row['fname'];?> <?php echo $row['lname'];?></p>
     <?php
}
      ?>
      <?php
      $email1= $_SESSION['add'];
      $qry = "select * from record where lemail ='$email1'";
      $res =mysqli_query($con,$qry);

      ?>
      <table>
        <th>Entry</th>
        <th>Book Name</th>
        <th>Time</th>
    <?php while($r = mysqli_fetch_array($res)){?>
      <tr>  <td><p><?php  echo $r['id'];?></p></td>
   <td><p><?php  echo $r['title'];?></p></td>
   <td><p> <?php echo $r['rt']; ?></p></td>
 </tr>
   <?php
}
    ?>
    </table>
  </div>
  </body>
</html>
