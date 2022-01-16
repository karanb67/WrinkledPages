<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nine Perfect Strangers</title>
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
				<img src="images/nineperfect.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/Nine Perfect Strangers.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/Nine Perfect Strangers.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I love all of her books! It was suspenseful and has you on the edge ready to find out what happens next! <br><br>
					Loved this book! It was my first foray properly back into the world of fiction reading 	<br><br>
					I did not enjoy this book like I thought I would.	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Nine Perfect Strangers
				</i>
			</h3>
			<p> Could ten days at a health resort really change you forever?
<br><br>
These nine perfect strangers are about to find out...
<br><br>
Nine people gather at a remote health resort. Some are here to lose weight, some are here to get a reboot on life, some are here for reasons they can’t even admit to themselves. Amidst all of the luxury and pampering, the mindfulness and meditation, they know these ten days might involve some real work. But none of them could imagine just how challenging the next ten days are going to be.
<br><br>
Frances Welty, the formerly best-selling romantic novelist, arrives at Tranquillum House nursing a bad back, a broken heart, and an exquisitely painful paper cut. She’s immediately intrigued by her fellow guests. Most of them don’t look to be in need of a health resort at all. But the person that intrigues her most is the strange and charismatic owner/director of Tranquillum House. Could this person really have the answers Frances didn’t even know she was seeking? Should Frances put aside her doubts and immerse herself in everything Tranquillum House has to offer—or should she run while she still can?
<br><br>
It’s not long before every guest at Tranquillum House is asking exactly the same question.
<br><br>
Combining all of the hallmarks that have made Liane Moriarty's writing a go-to for anyone looking for wickedly smart, page-turning fiction that will make you laugh and gasp, Nine Perfect Strangers once again shows why she is a master of her craft.<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hiddenbodies.php"><img src="images/hiddenbodies.jpg" alt="img"></a>
					</li>
					<li>
						<a href="itends.php"><img src="images/iitends.jpg" alt="img"></a>
					</li>
					<li>
						<a href="silent.php"><img src="images/silent.jpg" alt="img"></a>
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
$title="Nine Perfect Strangers";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
