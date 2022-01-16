<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>A Study in Scarlet</title>
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
				<img src="images/scarlet.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/A Study in Scarlet .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/A Study in Scarlet .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> It's in this very first novel where the great character Sherlock Holmes, along with Dr. John Watson, are introduced to the audience in their first case together.
<br><br>
					I remembered the title...and reading it- but nothing else. Whether it is my memory...or the fact that it wasn't memorable can be argued- but I liked it. A LOT.	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 A Study in Scarlet
				</i>
			</h3>
			<p>
				"A Study in Scarlet" is the first published story of one of the most famous literary detectives of all time, Sherlock Holmes. Here Dr. Watson, who has just returned from a war in Afghanistan, meets Sherlock Holmes for the first time when they become flat-mates at the famous 221 B Baker Street. In "A Study in Scarlet" Sherlock Holmes investigates a murder at Lauriston Gardens as Dr. Watson tags along with Holmes while narratively detailing his amazing deductive abilities. <br><br>In 1881, Doctor John Watson has returned to London after serving in the Second Anglo-Afghan War. He visits the Criterion Restaurant and runs into an old friend named Stamford, who had been a dresser under him at St. Bartholomew's Hospital. Watson tells Stamford he is looking for a place to live before his nine-month half-pay pension runs out. Stamford mentions that an acquaintance of his, Sherlock Holmes, is looking for someone to split the rent at a flat at 221B Baker Street, but he cautions Watson about Holmes's eccentricities.
<br><br>
Stamford takes Watson back to St. Bartholomew's where, in a laboratory, they find Holmes experimenting with a reagent, seeking a test to detect human hemoglobin. Holmes explains the significance of bloodstains as evidence in criminal trials. Watson raises their parallel quests to find a place to live. At Holmes's prompting, the two review their various shortcomings to make sure that they can live together. After seeing the rooms at 221B, they move in and grow accustomed to their new situation. Holmes reveals that he is a "consulting detective" and that his frequent guests are clients. Facing Watson's doubts about some of his claims, Holmes casually deduces to Watson that one visitor, a messenger from Scotland Yard, is also a retired Marine sergeant. When the man confirms this, Watson is astounded.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="signfour.php"><img src="images/signfour.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hound.php"><img src="images/hound.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="valley.php"><img src="images/valley.jpg" alt="img"></a>
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
$title="A Study in Scarlet";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
