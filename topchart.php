<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/indexx.css" type="text/css">
    <title>Recommendations</title>
    <style>
      .rightcon td{
        padding: 20px;
      }
      .rectc p{
        font-size: 20px;
      }
    </style>
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
    include 'connection.php';
    $r=rand(1,10);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <div class="rectc" >
            <table style="margin:25px; ">
              <tr>
                <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
  </button></td>
  <td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
  </td>
</tr>
    <?php
    $r=rand(11,20);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
  </button></td><td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
    </td>
  </tr>
    <?php
    $r=rand(21,30);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?><tr>
            <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
  </button></td><td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
  </td>
  </tr>
    <?php
    $r=rand(31,40);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
    </button>
    </td><td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
  </td>
  </tr>
    <?php
    $r=rand(41,50);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
    </button>
    </td><td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
  </td>
  </tr>
    <?php
    $r=rand(51,60);
        $sql = "select * from books where id ='$r'";
      $result=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td>
    <button type="button" name="button">
    <a href="bookss/<?php echo $row['link']; ?>">
      <img height=280px width=180px src="images/<?php echo $row['image']; ?>">
    </a>
    </button>
    </td><td>
    <p> Genre:<?php echo$row['genre'] ?></p>
    <p> <?php echo$row['bname'] ?></p>
    <p> <?php echo$row['aname'] ?></p>
    <?php } ?>
  </td>
  </tr>
    </table>
  </div>
  </div>
  </div>
  </body>
</html>
