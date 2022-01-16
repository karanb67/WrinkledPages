<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Subtle Art Of Not Giving a F*ck</title>
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
				<img src="images/subtleart.png">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/The Subtleart.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/The Subtleart.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> It's not about not giving a f*ck about anything, it's about giving a f*ck about the things that matter most.
					 In essence, the question is, should I really give a f*ck?<br><br>
					 Oh, wow. I loved this.
			 	 This was so freely written. Who cares if there are tons of curses in it?	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
				The Subtle Art Of Not Giving a F*ck
				</i>
			</h3>
			<p> The Subtle Art of Not Giving a Fuck is a book about finding meaning in important things in life and only having those values that an individual can control. Whatever value (such as popularity) that is not under a person's control, is a bad value to have and a person should strive to replace it with something more controllable such as punctuality, honesty, or kindness. Manson further advises avoiding claiming certainty about the knowledge that is out of one's grasp and not worry about leaving a legacy for the posterity. Instead of worrying about building a body of work as a legacy, one should seek to create joy in the moment for one's self and those around <br><br>
					The book is a reaction to the self-help industry and what Manson saw as a culture of mindless positivity that is not practical or helpful for most people. Manson uses many of his own personal experiences to illustrate how life's struggles often give it more meaning, which, he argues, is a better approach than constantly trying to be happy. Manson's approach and writing style have been categorized by some as contrarian to the general self-help industry, using blunt honesty and profanity to illustrate his ideas.<br><br>
 					<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="12rules.php"><img src="images/12rules.jpg" alt="img"></a>
					</li>
					<li>
						<a href="everythingisfuked.php"><img src="images/everything.jpg" alt="img"></a>
					</li>
					<li>
						<a href="ikagi.php"><img src="images/ikagi.jpg" alt="img"></a>
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
$title="The Subtle Art Of Not Giving a F*ck";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
