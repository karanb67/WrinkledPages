<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Time Machine</title>
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
				<img src="images/timemachine.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/The Time Machine.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/The Time Machine.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>It not just a book it's an world of imagination. <br><br>
					I think everybody should read this book before they die	<br><br>
				This surprised me an every way possible		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Time Machine
				</i>
			</h3>
			<p> The book's protagonist is a Victorian English scientist and gentleman inventor living in Richmond, Surrey, identified by a narrator simply as the Time Traveller. Similarly, with but one exception (a man named Filby) none of the dinner guests present are ever identified by name, but rather by profession (for example, "the Psychologist") or physical description (for example, "the Very Young Man").
<br><br>
The narrator recounts the Traveller's lecture to his weekly dinner guests that time is simply a fourth dimension and demonstrates a tabletop model machine for travelling through the fourth dimension. He reveals that he has built a machine capable of carrying a person through time, and returns at dinner the following week to recount a remarkable tale, becoming the new narrator.
<br><br>
In the new narrative, the Time Traveller tests his device. At first he thinks nothing has happened but soon finds out he went five hours into the future. He continues forward and sees his house disappear and turn into a lush garden. The Time Traveller stops in A.D. 802,701, where he meets the Eloi, a society of small, elegant, childlike adults. They live in small communities within large and futuristic yet slowly deteriorating buildings, and adhere to a fruit-based diet. His efforts to communicate with them are hampered by their lack of curiosity or discipline. They appear happy and carefree but fear the dark, and particularly moonless nights. Observing them, he finds that they give no response to mysterious nocturnal disappearances, possibly because the thought of it alone frightens them into silence. He speculates that they are a peaceful society. After exploring the area around the Eloi's residences, the Time Traveller reaches the top of a hill overlooking London. He concludes that the entire planet has become a garden, with little trace of human society or engineering from the hundreds of thousands of years prior.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="the100.php"><img src="images/the100.jpg" alt="img"></a>
					</li>
					<li>
						<a href="day21.php"><img src="images/day21.jpg" alt="img"></a>
					</li>
					<li>
						<a href="homecoming.php"><img src="images/homecoming.jpg" alt="img"></a>
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
$title="The Time Machine";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
