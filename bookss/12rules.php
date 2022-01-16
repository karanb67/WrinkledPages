<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>12 Rules For Life</title>
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
				<img src="images/12rules.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/12 Rules for Life.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/12 Rules for Life.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> If you want an intellectual and spiritual challenge that is rich, beautiful, painful, hilarious,
					 troubling, and true, read Jordan Peterson's 12 Rules for Life <br><br>
					First, because of the endless politicization of this man,
					 a couple things to know about me, if you're trying to determine what 'team' I'm on:<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
				12 Rules for Life: An Antidote to Chaos
				</i>
			</h3>
			<p> 		Humorous, surprising, and informative, Dr. Peterson tells us why skateboarding boys and girls must be left alone,
							what terrible fate awaits those who criticize too easily, and why you should always pet a cat when you meet
				 			one on the street.on.  <br><br>
							What does the nervous system of the lowly lobster have to tell us about standing up straight
					 		(with our shoulders back) and about success in life? Why did ancient Egyptians worship the capacity
					  	to pay careful attention as the highest of gods? What dreadful paths do people tread when
						 	they become resentful, arrogant, and vengeful? Dr. Peterson journeys broadly,
						  discussing discipline, freedom, adventure, and responsibility,
							distilling the world's wisdom into 12 practical and profound rules for life.
							12 Rules for Life shatters the modern commonplaces of science, faith,
						 	and human nature while transforming and ennobling the mind and spirit of its listeners.<br><br>
 							The book's central idea is that "suffering is built into the structure of being" and
							although it can be unbearable, people have a choice either to withdraw, which is a "suicidal gesture,"
							or to face and transcend it. Living in a world of chaos and order, everyone has "darkness" that
					 		can "turn them into the monsters they're capable of being" to satisfy their dark impulses in the right situations.
					  	Scientific experiments like the Invisible Gorilla Test show that perception is adjusted to aims,
						 	and it is better to seek meaning rather than happiness. Peterson notes<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="everythingisfuked.php"><img src="images/everything.jpg" alt="img"></a>
					</li>
					<li>
						<a href="ikagi.php"><img src="images/ikagi.jpg" alt="img"></a>
					</li>
					<li>
						<a href="thealchemist.php"><img src="images/thealchemist.jpg" alt="img"></a>
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
$title="12 Rules For Life";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
