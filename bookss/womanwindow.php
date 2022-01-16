<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Woman In The Window</title>
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
				<img src="images/womanwindow.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/The Woman in the Window.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/The Woman in the Window.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>I give this book 4 out of 5 stars. Good story <br><br>
				Looking at positive side we can say that it is a compelling thriller		<br><br>
					The book is well written. Unlike most people who enjoyed the twists	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Woman In The Window
				</i>
			</h3>
			<p> Anna Fox suffers from agoraphobia due to a traumatic car accident and lives a reclusive life at her large home in New York City. She recently separated from her husband, Ed, who has custody of their nine-year-old daughter Olivia. However, they frequently talk on the phone.
<br><br>
To pass the time, Anna spends her days drinking too much alcohol, playing online chess, communicating with other recluses through the "Agora online forum," watching old movies, and meeting with her shrink and physical therapist. She also spends time spying on her neighbors, including the Russells, a family that moved in across the street. There is Ethan, the reserved and polite teenage son; Alistair, the controlling father; and Jane, a friendly woman with whom Anna shares many interests. One evening, while looking out the window, Anna witnesses Jane being stabbed and calls the police. The Russells deny that any sort of attack took place. The police, including detectives Little and Norelli, also don't believe Anna's story as another woman who claims to be Jane is alive and uninjured. Anna insists the woman claiming to be Jane is not the same woman she met before.
<br><br>
Anna has a number of encounters with the Russells and becomes convinced that something is suspicious about them. After she receives an anonymous email with a picture of herself sleeping, she calls the police. A detective confronts her with the tragic truth: Her husband and daughter died in the car accident that triggered her agoraphobia, and she has been imagining her conversations with them. Knowing her medications can cause hallucinations, they theorize that Anna could have taken the picture and emailed it to herself. Anna realizes that the murder may have been a hallucination as well.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="behind.php"><img src="images/behind.jpg" alt="img"></a>
					</li>
					<li>
						<a href="angles.php"><img src="images/angles.jpg" alt="img"></a>
					</li>
					<li>
						<a href="sharpobj.php"><img src="images/sharpobj.jpg" alt="img"></a>
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
$title="The Woman In The Window";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
