<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Breaking Dawn</title>
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
				<img src="images/breakingdawn.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Breaking Dawn .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Breaking Dawn .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>Breaking Dawn several days' worth of chances and it did nothing but stun, anger, and disappoint me <br><br>
					It's taken Snark Squad over a year to read and recap this book, in large part because it was actively awful.	<br><br>
					 I do like this more than I dislike it lmao	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Breaking Dawn
				</i>
			</h3>
			<p>Breaking Dawn is divided into three separate parts. The first part details Bella's marriage and honeymoon with Edward, which they spend on Isle Esme, a private island off the coast of Brazil that Carlisle owns. Two weeks into their honeymoon, Bella realizes that she is pregnant. Because the fetus is part-vampire, her condition progresses at an unnaturally accelerated rate. Bella and Edward immediately return home to Forks, Washington, where the fetus continues to develop at an abnormal speed, causing Bella severe physical and emotional distress.
<br><br>
The second part of the book is written from the perspective of Jacob Black, a Quileute Native American who, like other members of his tribe, can shapeshift into a wolf. Knowing of Bella's wish to become a vampire, he is immediately suspicious when she returns from her honeymoon and the Cullens keep her father, Charlie, from seeing her. Believing the Cullens have broken their treaty not to bite another human, he advances on their home intending to kill Edward. He arrives and discovers that Bella is undergoing a difficult pregnancy in which the fetus is draining her life away. Jacob begs Bella to abort the fetus to save her life, as neither Carlisle, a doctor, nor Alice who can see the future, are optimistic about Bella's prognosis.
<br><br>
Despite concerns that her pregnancy will be fatal, Bella is determined to continue it, believing she can survive long enough to give birth and then be transformed into a vampire. As the wolves are telepathic, they hear Jacob's thoughts about Bella. Fearing Bella will give birth to an uncontrollable, bloodthirsty child, they want to kill her and the fetus. Jacob accepts his bloodline as the true pack leader in order to break free from the alpha, Sam's control. He goes to warn the Cullens that the wolf pack plans to kill Bella. En route to the Cullens, Seth Clearwater, a younger pack member, also breaks away and joins Jacob. He notes that once they formed their own pack, they can no longer hear the other wolves' thoughts. They patrol the Cullens' property and soon after Leah, Seth's older sister and the lone female wolf, joins them.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="midnightsun.php"><img src="images/midnightsun.jpg" alt="img"></a>
					</li>
					<li>
						<a href="faultstars.php"><img src="images/fault.jpg" alt="img"></a>
					</li>
					<li>
						<a href="fivefeet.php"><img src="images/fivefeet.jpg" alt="img"></a>
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
$title="Breaking Dawn";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
