<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Twilight</title>
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
				<img src="images/twilight.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Twilight.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Twilight.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I'm tired of people ripping this book to pieces and secretely devouring it<br><br>
					I think everyone knows that the characters are essentially the ones who make up the book	<br><br>
					there are so many problems with this book that i can't even begin to address them all.	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Twilight
				</i>
			</h3>
			<p> Bella Swan is a seventeen-year-old introvert girl who moved from Phoenix, Arizona to Forks, Washington on the Olympic Peninsula to live with her father, Charlie Swan, the town's police chief. Her mother, Renée Dwyer, is traveling with her new husband, Phil Dwyer, a minor league baseball player. Bella is admitted to Forks High School, where she easily gets to be friends with a group of friends. A somewhat inexperienced and shy girl, Bella is dismayed by several boys competing for her attention.
<br><br>
On the first day of her school, Edward Cullen, a mysterious and beautiful boy stares at Bella, frustrated. Bella sits next to Edward in biology class, but he seems to be utterly repulsed by her, much to her bewilderment. He disappears for a few days but when he returns, he is unexpectedly friendly to Bella. Their newfound relationship is interrupted after Bella is nearly struck by a van in the school parking lot. Edward saves Bella, narrowly stopping the van with his bare hands. Bella questions Edward about how he saved her life but he refuses to tell anything.
<br><br>
During a campout, she meets Jacob Black, a local boy from the Quileute tribe. She learns from him that Edward and his family are actually vampires who consume only animal blood. Disturbed and riddled by recurring nightmares, Bella researches about vampires. She compares the characteristics of the vampires in mythology to the Cullens. Convinced that he is a vampire, she finds herself in a state of enigma. Bella is saved by Edward again in Port Angeles when she is almost attacked by a group of men. Furious, Edward drives Bella away and takes her to a restaurant for dinner and then back home. On the way, she tells him of the stories that he is a vampire. Seeing that there's no point denying, he agrees to it. He confesses that Bella's blood is more desirable to him than to any other vampire. He wanted to kill her on the first day of school. He tried to stay away so that he couldn't hurt her. Over time, Edward and Bella fall in love.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="newmoon.php"><img src="images/new.jpg" alt="img"></a>
					</li>
					<li>
						<a href="eclipse.php"><img src="images/eclipse.jpg" alt="img"></a>
					</li>
					<li>
						<a href="breakingdawn.php"><img src="images/breakingdawn.jpg" alt="img"></a>
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
$title=" Twilight";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
