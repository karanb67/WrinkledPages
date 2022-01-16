<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Do Androids Dream Of Electric Sheep?</title>
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
				<img src="images/android.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Do Androids Dream of Electric Sheep.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Do Androids Dream of Electric Sheep.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> The book acts as the basis for the popular movie Blade Runner and it’s sequel Blade Runner 2048<br><br>
					Compact. Doesn't toss around unnecessary details. Doesn't bore for a single moment. In one word, great	<br><br>
						 The author completely forgets the plot and turns it into a disgusting human/robot porn drama<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Do Androids Dream Of Electric Sheep?
				</i>
			</h3>
			<p> Rick Deckard, a bounty hunter for the San Francisco Police Department, is assigned to "retire" (kill) six androids of the new and highly intelligent Nexus-6 model which have recently escaped from Mars and traveled to Earth. These androids are made of organic matter so similar to a human's that only a "bone marrow analysis" can independently prove the difference, making them difficult to detect, but Deckard hopes to earn enough bounty money to buy a live animal to replace his lone electric sheep.<br><br>
				Deckard visits the Rosen Association's headquarters in Seattle to confirm the accuracy of the latest empathy test (to save time in identifying incognito androids, various style personality tests have been devised). Deckard suspects the test may not be capable of distinguishing the latest Nexus-6 models from genuine human beings, and it appears to give a false positive on his host in Seattle, Rachael Rosen, meaning the police have potentially been executing human beings. The Rosen Association attempts to blackmail Deckard to get him to drop the case, but Deckard retests Rachael and determines that Rachael is, indeed, an android, which she ultimately admits.	<br><br>
 			Deckard soon meets a Soviet police contact who turns out to be one of the Nexus-6 renegades in disguise. Deckard kills the android, then flies off to kill his next target, an android living in disguise as an opera singer. Meeting her backstage, Deckard attempts to administer the empathy test but she calls the police.		<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="space.php"><img src="images/space.jpg" alt="img"></a>
					</li>
					<li>
						<a href="harsh.php"><img src="images/harsh.jpg" alt="img"></a>
					</li>
					<li>
						<a href="timemachine.php"><img src="images/timemachine.jpg" alt="img"></a>
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
$title="Do Androids Dream Of Electric Sheep?";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
