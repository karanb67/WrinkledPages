<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stranger In A Strange Land</title>
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
				<img src="images/stranger.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Stanger in a Strange Land.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Stanger in a Strange Land.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>One must read Heinlein's signature work to understand what all the fuss is about, from both sides. <br><br>
					"Nine times out of ten, if a girl gets raped, it’s at least partly her own fault." The most quoted sentence from this book.	<br><br>
						I might try one of these books again in the distant future, and I might try the last of this guy's classics<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Stranger In A Strange Land
				</i>
			</h3>
			<p> Valentine Michael Smith is a human being raised on Mars, newly returned to Earth. Among his people for the first time, he struggles to understand the social mores and prejudices of human nature that are so alien to him, while teaching them his own fundamental beliefs in grokking, watersharing, and love<br><br>
				The story focuses on a human raised on Mars and his adaptation to and understanding of humans and their culture. It is set in a post-Third World War United States, where organized religions are politically powerful. There is a World Federation of Free Nations, including the demilitarized US, with a world government supported by Special Service troops.
	<br><br>
	Prior to WWIII the manned spacecraft Envoy is launched toward Mars, but all contact is lost shortly before landing. Twenty-five years later, the spacecraft Champion makes contact with the inhabitants of Mars and finds a single survivor, Valentine Michael Smith. Born on the Envoy, he was raised entirely by the Martians. He is ordered by them to accompany the returning expedition.
	<br><br>
	Because Smith is unaccustomed to the conditions on Earth, he is confined at Bethesda Hospital, where, having never seen a human female, he is attended by male staff only. Seeing that restriction as a challenge, Nurse Gillian Boardman eludes the guards and goes in to see Smith. By sharing a glass of water with him, she inadvertently becomes his first "water brother", which is considered to be a profound relationship by the Martians as water on Mars is extremely scarce.		<br><br>


			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="frankenstein.php"><img src="images/frankenstein.jpg" alt="img"></a>
					</li>
					<li>
						<a href="android.php"><img src="images/android.jpg" alt="img"></a>
					</li>
					<li>
						<a href="space.php"><img src="images/space.jpg" alt="img"></a>
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
$title="Stranger In A Strange Land";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
