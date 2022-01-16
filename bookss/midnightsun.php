<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Midnight Sun</title>
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
				<img src="images/midnightsun.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Midnight Sun.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Midnight Sun.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> This book isn't perfect, and I didn't expect it to be. It has many of the major criticized flaws of Twilight,<br><br>
					I'M HYPERVENTILATING. MY TEENAGE SELF IS DYING.	<br><br>
					Holy shit snacks!! I love it so much! It’s so damn different and cool!			<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Midnight Sun
				</i>
			</h3>
			<p> On August 28, 2008, Meyer halted the writing of Midnight Sun in response to the leak of twelve chapters of the unfinished manuscript on the Internet. She stated, "If I tried to write Midnight Sun now, in my current frame of mind, James would probably win and all the Cullens would die, which wouldn't dovetail too well with the original story. In any case, I feel too sad about what has happened to continue working on Midnight Sun, and so it is on hold indefinitely."She made the twelve-chaptered draft available on her website in fairness to her readers, now that the novel has been compromised before its intended publication date. Meyer also stated that she does not believe the manuscript was leaked with any malicious intent, and would not give any names.
<br><br>
In a November 2008 interview, Meyer said that, "It's really complicated, because everyone now is in the driver's seat, where they can make judgment calls. ... I do not feel alone with the manuscript. And I cannot write when I don't feel alone."She said that her goal was to go for around two years without hearing about Midnight Sun, and she thought that she would begin working on the novel again once she was sure that "everyone's forgotten about it".

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="faultstars.php"><img src="images/fault.jpg" alt="img"></a>
					</li>
					<li>
						<a href="fivefeet.php"><img src="images/fivefeet.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesgrey.php"><img src="images/50shadesgrey.jpg" alt="img"></a>
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
$title="Midnight Sun";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
