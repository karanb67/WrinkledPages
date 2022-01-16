<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hidden Bodies</title>
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
				<img src="images/hiddenbodies.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/Hidden Bodies.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/Hidden Bodies.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>The series just gets darker with every page <br><br>
						I really loved this book as he chases Amy to LA and then fells in love with love.<br><br>
				Really liked the first one and was keen for a second.		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Hidden Bodies
				</i>
			</h3>
			<p> In the compulsively readable sequel to her widely acclaimed debut novel, You, Caroline Kepnes weaves a tale that Booklist calls “the love child of Holden Caulfield and Patrick Bateman.”
<br><br>
Joe Goldberg is no stranger to hiding bodies. In the past ten years, this thirty-something has buried four of them, collateral damage in his quest for love. Now he’s heading west to Los Angeles, the city of second chances, determined to put his past behind him.
<br><br>
In Hollywood, Joe blends in effortlessly with the other young upstarts. He eats guac, works in a bookstore, and flirts with a journalist neighbor. But while others seem fixated on their own reflections, Joe can’t stop looking over his shoulder. The problem with hidden bodies is that they don’t always stay that way. They re-emerge, like dark thoughts, multiplying and threatening to destroy what Joe wants most: true love. And when he finds it in a darkened room in Soho House, he’s more desperate than ever to keep his secrets buried. He doesn’t want to hurt his new girlfriend—he wants to be with her forever. But if she ever finds out what he’s done, he may not have a choice…
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="itends.php"><img src="images/iitends.jpg" alt="img"></a>
					</li>
					<li>
						<a href="silent.php"><img src="images/silent.jpg" alt="img"></a>
					</li>
					<li>
						<a href="girltrain.php"><img src="images/girltrain.jpg" alt="img"></a>
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
$title="Hidden Bodies";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
