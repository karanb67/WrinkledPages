<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Behind Closed Doors</title>
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
				<img src="images/behind.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/Behind Closed Doors.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/Behind Closed Doors.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> This book is very well put together and is very suspenseful. It one of my favorite books. For more of mature audience<br><br>
					I freaking love this book! It will make you feel hopeless for Grace and Millie, the shock of knowing she married to a psychopath	<br><br>
					Excellent company. I met with Leatie who took my closet needs and quickly designed a perfect closet	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Behind Closed Doors
				</i>
			</h3>
			<p> Everyone knows a couple like Jack and Grace. He has looks and wealth; she has charm and elegance. He's a dedicated attorney who has never lost a case; she is a flawless homemaker, a masterful gardener and cook, and dotes on her disabled younger sister. Though they are still newlyweds, they seem to have it all. You might not want to like them, but you do. You're hopelessly charmed by the ease and comfort of their home, by the graciousness of the dinner parties they throw. You'd like to get to know Grace better ... But it's difficult, because you realize Jack and Grace are inseparable ... Some might call this true love. Others might wonder why Grace never answers the phone. Or why she can never meet for coffee, even though she doesn't work. How she can cook such elaborate meals but remain so slim. Or why she never seems to take anything with her when she leaves the house, not even a pen. Or why there are such high-security metal shutters on all the downstairs windows ... Some might wonder what's really going on once the dinner party is over, and the front door has closed
<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="angles.php"><img src="images/angles.jpg" alt="img"></a>
					</li>
					<li>
						<a href="sharpobj.php"><img src="images/sharpobj.jpg" alt="img"></a>
					</li>
					<li>
						<a href="nineperfect.php"><img src="images/nineperfect.jpg" alt="img"></a>
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
$title="Behind Closed Doors";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
