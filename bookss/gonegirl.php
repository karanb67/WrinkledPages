<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gone Girl</title>
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
				<img src="images/gonegirl.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/Gone Girl.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/Gone Girl.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I am Amy. I’m so perfect you may want to puke. It’s okay, I have that effect on everyone, even my parents<br><br>
					This book was just way too much fun – and I mean that in a good way	<br><br>
					Twisty like a pretzel, dark like unadulterated chocolate, and as compelling as a twisted car wreck	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Gone Girl
				</i>
			</h3>
			<p>The narrative alternates between the point of view of Nick and Amy Dunne, formerly Amy Elliott before she was married. Nick's narration begins shortly after arriving home on his fifth wedding anniversary to find Amy is missing from their home; there are signs of a struggle. Amy's narration comes in the form of her diaries and follows the earlier stages of their relationship.
<br><br>
The diary entries describe how Amy met Nick in New York City, where they both worked as writers. Nick was a journalist who wrote movie and TV reviews, while Amy wrote personality quizzes for women's magazines. After two years of dating, they married. The couple lived in a beautiful brownstone home in Brooklyn where they were happy.
<br><br>
In 2009, both Nick and Amy lost their jobs following the Great Recession; Amy's parents Rand and Marybeth, meanwhile, had written a successful childhood book series called "Amazing Amy," based on Amy's life experiences. However, when sales from the books started declining and Rand and Marybeth didn't curb their spending, they also started facing financial issues. Their solution was to ask Amy for money from the trust fund they started for her.
<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="anatomy.php"><img src="images/anatomy.jpg" alt="img"></a>
					</li>
					<li>
						<a href="dragontattoo.php"><img src="images/dragontattoo.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="scarlet.php"><img src="images/scarlet.jpg" alt="img"></a>
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
$title="Gone Girl";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
