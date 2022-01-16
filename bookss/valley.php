<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Valley of Fear</title>
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
				<img src="images/valley.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I believe that I am one of the most long-suffering of mortals; but I’ll admit that I was annoyed at the sardonic interruption.<br><br>
					Look down the valley! See the cloud of a hundred chimneys that overshadows it!	<br><br>
					It is, I admit, mere imagination; but how often is imagination the mother of truth?	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Valley of Fear
				</i>
			</h3>
			<p>Sherlock Holmes receives a cipher message from Fred Porlock, a pseudonymous agent of Professor Moriarty. After Porlock sends the message, however, he changes his mind for fear of Moriarty's discovering that he is a traitor. He decides not to send the key to the cipher, but he sends Holmes a note telling of this decision. From the cipher message and the second note, Holmes is able to deduce that it is a book cipher and that the book used for the encryption is a common book, large (with at least 534 pages), printed in two columns per page, and standardised. An almanac fits these conditions exactly. <br><br>
				Holmes tries the latest edition of Whitaker's Almanac, which he had only received a few days earlier, and fails; he then tries the previous edition. With this almanac, Holmes is able to decipher the message as a warning of a nefarious plot against one Douglas, a country gentleman residing at Birlstone House. Some minutes later, Inspector MacDonald arrives at Baker Street with news that a Mr. John Douglas of Birlstone Manor House, Birlstone, Sussex, has been murdered. Holmes tells MacDonald of Porlock's warning, suggesting Moriarty's involvement. However, MacDonald does not fully believe that the educated and well-respected Moriarty is a criminal. Holmes, Watson, and MacDonald travel to Birlstone House, an ancient moated manor house, to investigate the crime.	<br><br>
 			Douglas had been murdered the evening before. Cecil Barker, a frequent guest at Birlstone House, had been in his room at half-past eleven when he heard the report of a gun, according to his testimony. He had rushed down to find Douglas lying in the centre of the room nearest the front door of the house, a sawn-off shotgun lying across his chest. He had been shot at close range: receiving the full charge of the shotgun in the face, his head was blown 'almost to pieces'. Barker had rushed to the village police station and notified Sergeant Wilson, who was in charge of the station. Wilson followed Barker to the house after notifying the county authorities.		<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="beast.php"><img src="images/beast.jpg" alt="img"></a>
					</li>
					<li>
						<a href="longway.php"><img src="images/longway.jpg" alt="img"></a>
					</li>
					<li>
						<a href="therewerenone.php"><img src="images/therewerenone.jpg" alt="img"></a>
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
$title="The Valley of Fear";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
