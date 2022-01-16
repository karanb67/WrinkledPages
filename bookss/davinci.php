<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Da Vinci Code</title>
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
				<img src="images/davinci.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/The Da Vinci Code .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/The Da Vinci Code .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> A great and absorbing read!<br><br>
					A must read for everyone who likes  page turning, breathtaking, thrilling reads	<br><br>
				The novel is so interesting and thrilling		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Da Vinci Code
				</i>
			</h3>
			<p> Louvre curator and Priory of Sion grand master Jacques Saunière is fatally shot one night at the museum by an albino Catholic monk named Silas, who is working on behalf of someone he knows only as the Teacher, who wishes to discover the location of the "keystone," an item crucial in the search for the Holy Grail.
<br><br>
After Saunière's body is discovered in the pose of the Vitruvian Man by Leonardo da Vinci, the police summon Harvard professor Robert Langdon, who is in town on business. Police captain Bezu Fache tells him that he was summoned to help the police decode the cryptic message Saunière left during the final minutes of his life. The message includes a Fibonacci sequence out of order.
<br><br>
Langdon explains to Fache that Saunière was a leading authority on the subject of goddess artwork and that the pentacle Saunière drew on his chest in his own blood represents an allusion to the goddess and not devil worship, as Fache believes

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="womanwindow.php"><img src="images/womanwindow.jpg" alt="img"></a>
					</li>
					<li>
						<a href="behind.php"><img src="images/behind.jpg" alt="img"></a>
					</li>
					<li>
						<a href="angles.php"><img src="images/angles.jpg" alt="img"></a>
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
$title="Da Vinci Code";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
