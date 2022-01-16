<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The 100: Homecoming</title>
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
				<img src="images/homecoming.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Homecoming.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Homecoming.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> "I was broken, and you put me back together." "You weren’t broken.You were the strongest, most beautiful girl I’d ever seen.<br><br>
					if I don’t do it now, I never will, so time to bite the bullet and possibly risk the ire of more fans!	<br><br>
					4.5/5 stars! I don't think it was as good as the sequel (Day 21) but definitely a satisfying conclusion to the series!	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The 100: Homecoming
				</i>
			</h3>
			<p> Weeks after landing on Earth, the Hundred have managed to create a sense of order amidst their wild, chaotic surroundings. But their delicate balance comes crashing down with the arrival of new dropships from space.
<br><br>
These new arrivals are the lucky ones—back on the Colony, the oxygen is almost gone—but after making it safely to Earth, GLASS’s luck seems to be running out. CLARKE leads a rescue party to the crash site, ready to treat the wounded, but she can’t stop thinking about her parents, who may still be alive. Meanwhile, WELLS struggles to maintain his authority despite the presence of the Vice Chancellor and his armed guards, and BELLAMY must decide whether to face or flee the crimes he thought he’d left behind.
<br><br>
It’s time for the Hundred to come together and fight for the freedom they’ve found on Earth, or risk losing everything—and everyone—they love.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="rebellion.php"><img src="images/rebellion.jpg" alt="img"></a>
					</li>
					<li>
						<a href="stranger.php"><img src="images/stranger.jpg" alt="img"></a>
					</li>
					<li>
						<a href="frankenstein.php"><img src="images/frankenstein.jpg" alt="img"></a>
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
$title="The 100: Homecoming";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
