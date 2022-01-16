<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The 100</title>
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
				<img src="images/the100.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/The 100.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/The 100.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> OMG!!! This book. Bellarke FEELS!! If you watch the show and you're a Bellarke shipper you'll love it! ♥<br><br>
					It's been a full 24 hours since I read this, but I CANNOT stop thinking about it! 	<br><br>
				Loved seeing the different perspectives and flashbacks, those added a little something extra to the novel		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The 100
				</i>
			</h3>
			<p>
				No one has set foot on Earth in centuries—until now.

Ever since a devastating nuclear war, humanity has lived on spaceships far above Earth's radioactive surface. Now, one hundred juvenile delinquents—considered expendable by society—are being sent on a dangerous mission: to recolonize the planet. It could be their second chance at life...or it could be a suicide mission.<br><br>
The series is set three generations after a thermonuclear apocalypse, wherein the only known survivors of the human race live in a space colony consisting of satellites joined together in orbit around the Earth and governed by The Chancellor, who leads its legislative council. Resources are so scarce that all crimes, no matter how small, are punishable by death, unless the perpetrator is under 18 years of age.
<br><br>
The 100 begins with Clarke Griffin, a former medical student, being arrested for a crime committed by her parents: conducting illegal experiments on children under threat of the corrupt Vice Chancellor Rhodes. Clarke confides in her best friend Wells Jaha, The Chancellor's son. Despite swearing secrecy to Clarke, Wells tells his father, hoping to save the Griffins from Rhodes. His plan backfires, the Griffins are arrested, and his relationship with Clarke disintegrates. Two years later, the Colony decides to send 100 of its teenage prisoners to investigate whether or not Earth is habitable. Among the 100 are Clarke, Wells, Octavia Blake, her older brother Bellamy Blake, and Clarke's friend, Thalia.

 					<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="day21.php"><img src="images/day21.jpg" alt="img"></a>
					</li>
					<li>
						<a href="homecoming.php"><img src="images/homecoming.jpg" alt="img"></a>
					</li>
					<li>
						<a href="rebellion.php"><img src="images/rebellion.jpg" alt="img"></a>
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
$title=" The 100";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
