<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Alchemist</title>
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
				<img src="images/thealchemist.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/The Alchemist .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/The Alchemist .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
		<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I feel like everyone LOVES this book, but I was kind of underwhelmed. I know that translation affects the quality of writing<br><br>
					"when you really want something, the whole universe conspires in helping you to achieve it"	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			The Alchemist
				</i>
			</h3>
			<p> Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an alchemist, all of whom point Santiago in the direction of his quest. No one knows what the treasure is, or if Santiago will be able to surmount the obstacles in his path. But what starts out as a journey to find worldly goods turns into a discovery of the treasure found within. Lush, evocative, and deeply humane, the story of Santiago is an eternal testament to the transforming power of our dreams and the importance of listening to our hearts<br><br>
					The Alchemist is to pursue your dreams by following what your heart desires. During the young boy's journey, he learns to listen to the heart and to follow the language of omens. With each passing obstacle and hurdle that the young boy encounters, there is a lesson to learn.<br><br>
 				The Alchemist follows the journey of an Andalusian shepherd boy named Santiago. Believing a recurring dream to be prophetic, he asks a Gypsy fortune teller in the nearby town about its meaning. The woman interprets the dream as a prophecy telling the boy that he will discover a treasure at the Egyptian pyramids.	<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="gettingthingsdone.php"><img src="images/gettingthingsdone.jpg" alt="img"></a>
					</li>
					<li>
						<a href="whowillcry.php"><img src="images/whowillcry.jpg" alt="img"></a>
					</li>
					<li>
						<a href="thesecret.php"><img src="images/thesecret.jpg" alt="img"></a>
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
$title="The Alchemist";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
