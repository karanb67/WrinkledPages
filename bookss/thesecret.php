<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Secret</title>
<link href="CSS/abt_books.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
		<div class="left_container">
			<div class="leftup">
			<div class="logodiv">
				<a href="../index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
			</div>
			<div class="imgBook">
				<img src="images/thesecret.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/The Secret.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/The Secret.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>
					I found this book inspiring because I wasn't being told that God created the universe and that if I pray to Jesus that HE will take care of me.<br><br>
					"You are the masterpiece
of your own life.
You are the Michelangelo
of your own life."<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Secret
				</i>
			</h3>
			<p>
				In 2006, a groundbreaking feature-length film revealed the great mystery of the universe—The Secret—and, later that year, Rhonda Byrne followed with a book that became a worldwide bestseller.	<br><br>
				Fragments of a Great Secret have been found in the oral traditions, in literature, in religions, and philosophies throughout the centuries. For the first time, all the pieces of The Secret come together in an incredible revelation that will be life-transforming for all who experience it.	<br><br>
 					In this book, you’ll learn how to use The Secret in every aspect of your life—money, health, relationships, happiness, and in every interaction you have in the world. You’ll begin to understand the hidden, untapped power that’s within you, and this revelation can bring joy to every aspect of your life.<br><br>
					The Secret contains wisdom from modern-day teachers—men and women who have used it to achieve health, wealth, and happiness. By applying the knowledge of The Secret, they bring to light compelling stories of eradicating disease, acquiring massive wealth, overcoming obstacles, and achieving what many would regard as impossible.<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="anewearth.php"><img src="images/newearth.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="thesatanicbible.php"><img src="images/TheSatanicBible.jpg" alt="img"></a>
					</li>
					<li>
						<a href="subtleart.php"><img src="images/subtleart.png" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
<?php
session_start();
include '../connection.php';
$title="The Secret";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
