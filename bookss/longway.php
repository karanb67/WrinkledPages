<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Long Way Home</title>
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
				<img src="images/longway.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/Long Way Home.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/Long Way Home.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>This is a pretty exceptional perceptive crime read, full of intricate descriptions and wonderful dialogue <br><br>
				The murder mystery component was strongly delivered and well plotted.		<br><br>
			Long Way Home is the first in a new-to-me series.			<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Long Way Home
				</i>
			</h3>
			<p> The launch of a major new detective series from the publishers of Henning Mankell, Arnaldur Indridason and Fred Vargas
<br><br>
A man is burnt alive in a suburban garden shed.
<br><br>
DI Zigic and DS Ferreira are called in from the Peterborough Hate Crimes Unit to investigate the murder. Their victim is quickly identified as a migrant worker and a man several people might have had good reason to see dead. A convicted arsonist and member of a far-right movement has just been released from prison, while witnesses claim to have seen the dead man fighting with one of the town's most prominent slum landlords.
<br><br>
Zigic and Ferreira know all too well the problems that come with dealing with a community that has more reason than most not to trust the police, but when another migrant worker is attacked, tensions rapidly begin to rise as they search for their killer.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="therewerenone.php"><img src="images/therewerenone.jpg" alt="img"></a>
					</li>
					<li>
						<a href="gonegirl.php"><img src="images/gonegirl.jpg" alt="img"></a>
					</li>
					<li>
						<a href="anatomy.php"><img src="images/anatomy.jpg" alt="img"></a>
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
$title="Long Way Home";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
