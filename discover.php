<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/discover.css">
</head>
<body>

<h1 class="favb">Search Your Favourite Book</h1>
<form method="POST">
  <input type="text" name="search" placeholder="Search...">
</form>

</body>
</html>
<?php
session_start();
include 'connection.php';
if (isset($_POST['search'])) {
  $search=$_POST['search'];
  $sql = "SELECT * FROM `books` WHERE `bname` LIKE '%$search%'";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($result)) {?>
  <a href="bookss/<?php echo $row['link']; ?>" class="links">
    <button type="button" name="button" class="button">
      <?php echo $row['bname'];?>
    </button><br><br>
  </a>

  <?php
}
}
 ?>
