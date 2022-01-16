<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Angels & Demons</title>
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
				<img src="images/angles.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/Angels and Demons .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/Angels and Demons .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>Absolutely brilliant , the most exhilarating piece of literature I have ever read.Takes me in an immersive and excellent journey of ups downs <br><br>
						What a book it was!! Every page keeps you at the edge if your seat<br><br>
					Science+History+Thrill = Angels and Demons	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Angels & Demons
				</i>
			</h3>
			<p>CERN director Maximilian Kohler discovers one of the facility's top physicists, Leonardo Vetra, murdered, his chest branded with an ambigram of the word "Illuminati." Kohler contacts Robert Langdon, an expert on symbology, who determines that the ambigram is authentic. Kohler calls Vetra's adopted daughter Vittoria home and it is ascertained that the Illuminati, an ancient anti-religious organization thought extinct, have stolen a canister containing antimatter, a substance with destructive potential comparable to a nuclear weapon. When at CERN, the canister is stored in a unique electrical charger which ensures the antimatter's stability, but when removed, its backup battery provides power for 24 hours, after which the antimatter would fall out of suspension and, on coming into contact with the physical matter of the container, explode. The canister is located somewhere in Vatican City, with a security camera in front of it, as its digital clock counts down to an explosion due to occur at midnight, which will wipe out the Vatican.
<br><br>
Langdon is initially convinced that the Illuminati cannot be responsible for two reasons: 1) the Illuminati went extinct centuries ago, and their remnants were absorbed into the Freemasons and 2) the Illuminati, as men of scientific truth, would never sanction the murder of a fellow scientist. Kohler explains that Vetra might be an exception, as he was also an ordained Catholic priest.
<br><br>
Langdon and Vittoria make their way to Vatican City, where the Pope has recently died. They are told that the four Preferiti, the cardinals who are most likely to be elected pope, are missing. Langdon and Vittoria search for the preferiti in hopes that they will also find the antimatter canister. Their search is assisted by Camerlengo Carlo Ventresca (the late pope's closest aide), the Vatican's Swiss Guard and Commander Olivetti.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="sharpobj.php"><img src="images/sharpobj.jpg" alt="img"></a>
					</li>
					<li>
						<a href="nineperfect.php"><img src="images/nineperfect.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hiddenbodies.php"><img src="images/hiddenbodies.jpg" alt="img"></a>
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
$title=" Angels & Demons";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
