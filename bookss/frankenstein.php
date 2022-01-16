<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Frankenstein</title>
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
				<img src="images/frankenstein.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Frankenstein.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Frankenstein.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Mary Shelly's book Frankenstein was a very entertaining novel<br><br>
					Ok, since no one else is gonna say it then I guess it falls to me	<br><br>
					Frankenstein has never been more relevant given how out of control 	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Frankenstein
				</i>
			</h3>
			<p> Frankenstein; or, The Modern Prometheus is an 1818 novel written by English author Mary Shelley. Frankenstein tells the story of Victor Frankenstein, a young scientist who creates a sapient creature in an unorthodox scientific experiment. Shelley started writing the story when she was 18, and the first edition was published anonymously in London on 1 January 1818, when she was 20. Her name first appeared in the second edition, which was published in Paris in 1821.
<br><br>
Shelley travelled through Europe in 1815 along the river Rhine in Germany, stopping in Gernsheim, 17 kilometres (11 mi) away from Frankenstein Castle, where two centuries before, an alchemist engaged in experiments.[2][3][4] She then journeyed to the region of Geneva, Switzerland, where much of the story takes place. Galvanism and occult ideas were topics of conversation among her companions, particularly her lover and future husband Percy B. Shelley. In 1816, Mary, Percy and Lord Byron had a competition to see who could write the best horror story.[5] After thinking for days, Shelley was inspired to write Frankenstein after imagining a scientist who created life and was horrified by what he had made.[6]
<br><br>
Though Frankenstein is infused with elements of the Gothic novel and the Romantic movement, Brian Aldiss has argued that it should be considered the first true science fiction story. In contrast to previous stories with fantastical elements resembling those of later science fiction, Aldiss states that the central character "makes a deliberate decision" and "turns to modern experiments in the laboratory" to achieve fantastic results.[7] The novel has had a considerable influence on literature and popular culture and spawned a complete genre of horror stories, films, and plays.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="android.php"><img src="images/android.jpg" alt="img"></a>
					</li>
					<li>
						<a href="space.php"><img src="images/space.jpg" alt="img"></a>
					</li>
					<li>
						<a href="harsh.php"><img src="images/harsh.jpg" alt="img"></a>
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
$title="Frankenstein";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
