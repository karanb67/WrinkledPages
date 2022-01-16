<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getting Things Done</title>
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
				<img src="images/gettingthingsdone.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/Getting Things Done.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/Getting Things Done.pdf" class="button">Download</a>
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
						I like reading about organizing my life and being more productive, but I think the major lessons of this book could have been condensed in a page or two.<br><br>
					A bit too detailed for my taste, but there are some magnificent principles involved here. I learned a lot.	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Getting Things Done: The Art of Stress-Free Productivity
				</i>
			</h3>
			<p> In today's world, yesterday's methods just don't work. In Getting Things Done, veteran coach and management consultant David Allen shares the breakthrough methods for stress-free performance that he has introduced to tens of thousands of people across the country. Allen's premise is simple: our productivity is directly proportional to our ability to relax. Only when our minds are clear and our thoughts are organized can we achieve effective productivity and unleash our creative potential. In Getting Things Done Allen shows how to<br><br>
				* Apply the "do it, delegate it, defer it, drop it" rule to get your in-box to empty<br>
				* Reassess goals and stay focused in changing situations<br>
				* Plan projects as well as get them unstuck<br>
				* Overcome feelings of confusion, anxiety, and being overwhelmed<br>
				* Feel fine about what you're not doing	<br><br>
 					From core principles to proven tricks, Getting Things Done can transform the way you work, showing you how to pick up the pace without wearing yourself down.<br><br>
					Getting Things Done (GTD) is a personal productivity system developed by David Allen and published in a book of the same name. Described as a time management system, the author states in the book that if a task is on your mind, it will fill your mind completely, which guarantees that you will be incapable of handling yet another task; therefore you will fail to complete any of them <br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="whowillcry.php"><img src="images/whowillcry.jpg" alt="img"></a>
					</li>
					<li>
						<a href="thesecret.php"><img src="images/thesecret.jpg" alt="img"></a>
					</li>
					<li>
						<a href="anewearth.php"><img src="images/newearth.jpeg" alt="img"></a>
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
$title=" Getting Things Done";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
