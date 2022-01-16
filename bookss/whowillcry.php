<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Who Will Cry When You Die</title>
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
				<img src="images/whowillcry.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/Who Will Cry When You will die.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/Who Will Cry When You will die.pdf" class="button">Download</a>
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
					 	I think this is the best book I've ever read- in the way that it gives so many good advices. After reading (and while reading) this book I put myself together, became more disciplined (e.g. it inspired me to wake up earlier in mornings, to go swimming in mornings, to think more positive etc.)<br><br>
						<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 		Who Will Cry When You Die
				</i>
			</h3>
			<p>
				Would you like to replace that empty feeling inside you with a deep sense of peace, passion, and purpose? Are your hoping that your life will not only be successful but significant? Are you ready to have the very best within you shine through and create a rich legacy in the process? If so, this potent little book, with its powerful life lessons and its gentle but profound wisdom, is exactly what you need to rise to your next level of living<br><br>
				Offering 101 simple solutions to life’s most frustrating challenges, bestselling author and life leadership guru Robin Sharma will show you exactly how to recreate your life so that you feel strikingly happy, beautifully fulfilled and deeply peaceful. Specific lessons include how to: "Discover Your Calling," "See Your Troubles as Blessings," "Enjoy the Path, Not Just the Rewards," and "Live Fully So You Can Die Happy." This is a truly remarkable book that you will treasure for a lifetime!	<br><br>
 					Offering 101 simple solutions to life’s most frustrating challenges, bestselling author and life leadership guru Robin Sharma will show you exactly how to recreate your life so that you feel strikingly happy, beautifully fulfilled and deeply peaceful. Specific lessons include how to: "Discover Your Calling," "See Your Troubles as Blessings," "Enjoy the Path, Not Just the Rewards," and "Live Fully So You Can Die Happy." This is a truly remarkable book that you will treasure for a lifetime!<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
							<a href="thesecret.php"><img src="images/thesecret.jpg" alt="img"></a>
					</li>
					<li>
						<a href="anewearth.php"><img src="images/newearth.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="thesatanicbible.php"><img src="images/TheSatanicBible.jpg" alt="img"></a>
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
$title="Who Will Cry When You Die";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
