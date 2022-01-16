<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Beast Must Die</title>
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
				<img src="images/beast.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/The Beast Must Die.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/The Beast Must Die.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>Frank Cairnes is a successful crime writer, under the pseudonym Felix Lane, who has decided he is going to kill a man. <br><br>
			This book opens with a twist - the narrator confesses to be planning a murder.			<br><br>
				This is a rather good mystery with an interestingly different approach to telling the story which makes it still seem fresh 80 years on		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Beast Must Die
				</i>
			</h3>
			<p>Respected crime writer Frank Cairns plots the perfect murder - a murder that he himself will commit. Cairns intends to murder the hit-and-run driver who killed his young son, but when his intended victim is found dead and Cairns becomes the prime suspect, the author insists that he has been framed. <br><br>
				A plot summary with too many specifics might telegraph or ruin some surprises, so I will limit myself to the story's inciting incident and early developments: we learn through his diary entries that mystery writer Frank Cairnes plans to identify and murder the hit-and-run motorist who killed his young son. This motivation may not be fully moral but it is sympathetic, and it doesn't take Cairnes long (especially as he happens to encounter a convenient after-the-fact eyewitness) to come up with a prime suspect, a boorish and petty garage owner named George Rattery.
		<br><br>
		It is when Cairnes insinuates himself into Rattery's circle and begins the game of cat and mouse that The Beast Must Die becomes an irresistible, page-turning tale of suspense. A murder occurs – we have been witness to Cairnes' inner thoughts and deadly plans throughout the diary's narrative – but not in the way that intended killer or intended victim expect. Nigel Strangeways is brought into the dramatic affair, and he finds a number of well-drawn characters to view as suspects, including Rattery's dour, manipulative mother, his ex-mistress who has begun to fall for Frank Cairnes, and even Rattery's bullied and emotionally fragile teenage son
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="longway.php"><img src="images/longway.jpg" alt="img"></a>
					</li>
					<li>
						<a href="therewerenone.php"><img src="images/therewerenone.jpg" alt="img"></a>
					</li>
					<li>
						<a href="gonegirl.php"><img src="images/gonegirl.jpg" alt="img"></a>
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
$title="The Beast Must Die";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
