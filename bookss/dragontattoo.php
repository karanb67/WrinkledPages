<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Girl with the Dragon Tattoo</title>
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
				<img src="images/dragontattoo.jpeg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/The Girl with the Dragon Tattoo.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/The Girl with the Dragon Tattoo.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> It's gonna be...a slow ride until about halfway through. Then it's hairpin turn after hairpin turn at breakneck speed. Whiplash.<br><br>
					My very first time reading a mystery/detective novel. Loved it.	<br><br>
					I've never seen the genre political thriller get mentioned on Goodreads, but here is a prime candidate for this moniker.	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Girl with the Dragon Tattoo
				</i>
			</h3>
			<p>Every year for the past 36 years, Henrik Vanger receives an anonymous dried flower in a picture frame on November 1, his birthday. He has all of the frames displayed on a wall in his house. Every year, he phones his friend, a retired detective-superintendent, who shares his birthday and his age, and tells him about the latest flower. They can only wonder who sent it and why.
<br><br>
In December 2002, Mikael Blomkvist, publisher of the Swedish political magazine Millennium, loses a libel case involving allegations about billionaire industrialist Hans-Erik Wennerström. Blomkvist is sentenced to three months (deferred) in prison, and ordered to pay hefty damages and costs. Soon afterwards, he is invited to meet Henrik Vanger, the retired CEO of the Vanger Corporation, unaware that Vanger has checked into his personal and professional history; the investigation of Blomkvist's circumstances has been carried out by Lisbeth Salander, a brilliant but deeply troubled researcher and computer hacker.
<br><br>
Vanger promises to provide Blomkvist with evidence against Wennerström in return for discovering what happened to Harriet Vanger, Henrik's then-16-year-old niece and heir presumptive, who disappeared in 1966 during a family gathering at the Vanger estate on Hedeby Island the same day that a traffic accident on a bridge temporarily cut off the island from the mainland. Vanger has spent much of the intervening 36 years ruminating on the incident, and has concluded that she was murdered, as the lack of corpse rules out natural accidents and Harriet had (to Vanger's knowledge) no means of escape. Blomkvist stays on the island while researching the Vanger family history and Harriet's disappearance. He meets several members of the Vanger clan, including Harriet's brother, Martin, current CEO of the company; Isabella, Martin and Harriet's mother; and Cecilia, a headmistress who was Harriet's younger aunt and friend, who seduces Blomkvist later in the novel.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="scarlet.php"><img src="images/scarlet.jpg" alt="img"></a>
					</li>
					<li>
						<a href="signfour.php"><img src="images/signfour.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hound.php"><img src="images/hound.jpeg" alt="img"></a>
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
$title="The Girl with the Dragon Tattoo";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
