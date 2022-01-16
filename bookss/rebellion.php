<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The 100: Rebellion</title>
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
				<img src="images/rebellion.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Rebellion.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Rebellion.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> UNBELIEVABLE. I'm so irritated<br><br>
					Rebellion 3.5⭐️<br>
	Its weird reading the final book after i watched the entire series 		<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The 100: Rebellion
				</i>
			</h3>
			<p> Centuries after nuclear war destroyed our planet, humanity struggles to rebuild. It’s been a month since the dropships landed and the Colonists joined the Hundred on the ground. The teens, once branded juvenile delinquents, are now leaders among their people.
<br><br>
The Colonists and the Earthborns are celebrating their first holiday together when, to everyone’s horror, they’re attacked by a group of strangers whose unusual battle cries fill the air. The newcomers kill scores of people, seize prisoners, and pillage crucial supplies. When hotheaded Bellamy and his analytical girlfriend Clarke discover that Wells, Octavia and Glass have been captured, they vow to get them back at all costs. But as they go after their new enemies, Bellamy and Clarke find themselves increasingly at odds, unable to agree on a plan to save their friends.
<br><br>
Meanwhile, Wells, Octavia, and Glass are being slowly brainwashed by their captors, religious fanatics with one goal: to grow their ranks and “heal” the war-ravaged planet… by eliminating everyone else on it.
<br><br>
But centuries of radiation exposure have taken their toll, forcing the cult to take drastic steps to survive. And unless the rescue party arrives soon, the teen captives will face a fate more terrifying than anything they could imagine. In this thrilling fourth installment, the hundred fight to protect the people they love on the dangerous planet they always dreamed of calling home.
<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="stranger.php"><img src="images/stranger.jpg" alt="img"></a>
					</li>
					<li>
						<a href="frankenstein.php"><img src="images/frankenstein.jpg" alt="img"></a>
					</li>
					<li>
						<a href="android.php"><img src="images/android.jpg" alt="img"></a>
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
$title=" The 100: Rebellion";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
