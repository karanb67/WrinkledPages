<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>It Ends With Her</title>
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
				<img src="images/iitends.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/It Ends With Her.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/It Ends With Her.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>It Ends With Her is a really excellent crime/psychological thriller <br><br>
						I really enjoyed this psychological thriller.<br><br>
					It Ends With Her was a really good mystery book. It kept me guessing every little thing. I honestly wanted to figure things out before I read it and I enjoyed every page.	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 It Ends With Her
				</i>
			</h3>
			<p> He started the game. She’ll end it.
<br><br>
FBI special agent Clarke Sinclair doesn’t give up easily. She’s spent years tracking serial killer Simon Cross, forced to follow his twisted clues and photographs across the country. Clarke knows that Cross selects only redheaded women and that he doesn’t target another victim until Clarke discovers the previous one.
<br><br>
He’s never broken pattern…until now.
<br><br>
A girl has already gone missing in upstate New York when a second one is kidnapped—a blonde. The killer’s MO has changed, sending Clarke back to the drawing board. The closer she gets to the truth, the deeper she’s drawn into an inescapable trap made just for Clarke. Whatever Cross’s ultimate game is, it ends with her

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="silent.php"><img src="images/silent.jpg" alt="img"></a>
					</li>
					<li>
						<a href="girltrain.php"><img src="images/girltrain.jpg" alt="img"></a>
					</li>
					<li>
						<a href="davinci.php"><img src="images/davinci.jpg" alt="img"></a>
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
$title="It Ends With Her";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
