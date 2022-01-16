<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sharp Objects</title>
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
				<img src="images/sharpobj.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/Sharp Objects .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/Sharp Objects .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Having read Dark Places and Gone girl before this book, I must say it did not live up to my expectations of some unthinkable twist that only Flynn can deliver these days<br><br>
					I felt really overwhelmed after finishing this book	<br><br>
					Totally underwhelming. Average prose although there were a few descriptions that made me pause	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Sharp Objects
				</i>
			</h3>
			<p> Camille Preaker works as a journalist at The Daily Post, a small newspaper in Chicago. She is not particularly satisfied with the job, which includes writing stories about human neglect, murders, and crime. Camille gets along somewhat well with her boss Frank Curry, who supported her during a recent hospitalization due to self-harm. Camille has carved many words onto her body—having previously hallucinated them on her skin. Curry gives her a reporting assignment to her hometown of Wind Gap, Missouri, where one girl has been murdered and a second is missing.
<br><br>
Once in Wind Gap, Camille manages to gain some information about the crimes from the townspeople, including the family of Ann Nash, the murdered girl. The local police are not particularly forthcoming about the murder, but the town sheriff, Chief Vickery, divulges to Camille off the record that he believes that the murderer is a Wind Gap native, not a stranger. Soon the body of the missing girl, Natalie Keene, is discovered in an alley in town. Both she and Ann were strangled and had all of their teeth removed. The police are baffled by the crimes. Camille publishes a story, only for Curry to ask her to remain in Wind Gap for further coverage of the murders.
<br><br>
While there, Camille reconnects with her estranged mother Adora and 13-year-old half-sister Amma. Camille never had a good relationship with her mother, as Adora always preferred Camille's younger sister Marian, who died due to an unspecified illness when Camille was young. Amma, who was born after Marian's death, has grown into a spoiled teen who behaves like a young child in front of her mother to hide her drinking, drug use, and promiscuity. Camille connects with a handsome Kansas City detective, Richard Willis, sent to investigate the potential of a serial killer.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="nineperfect.php"><img src="images/nineperfect.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hiddenbodies.php"><img src="images/hiddenbodies.jpg" alt="img"></a>
					</li>
					<li>
						<a href="itends.php"><img src="images/iitends.jpg" alt="img"></a>
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
$title=" Sharp Objects";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
