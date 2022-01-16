<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Anatomy of a Murder</title>
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
				<img src="images/anatomy.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/Anatomy of a Murder.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/Anatomy of a Murder.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>It takes the reader through the entire process of a murder trial, seen through the eyes of the defense attorney <br><br>
					A Brilliant book. Though a slow start, it gathered speed as the trial commenced	<br><br>
					A good novel that covers the courtroom drama well and in detail; however, it could have definitely been shorter	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Anatomy of a Murder
				</i>
			</h3>
			<p>In the Upper Peninsula of Michigan, small-town lawyer Paul Biegler, a former district attorney who lost his re-election bid, spends most of his time fishing, playing the piano, and hanging out with his alcoholic friend and colleague Parnell McCarthy and sardonic secretary Maida Rutledge.
<br><br>
One day, Biegler is contacted by Laura Manion, to defend her husband US Army Lieutenant Frederick "Manny" Manion, who has been arrested for the murder of innkeeper Bernard "Barney" Quill. Manion does not deny the murder, but claims that Quill raped his wife. Even with such a motivation, getting Manion cleared of murder would be difficult, but Manion claims to have no memory of the event, suggesting that he may be eligible for a defense of irresistible impulse—a version of a temporary insanity defense. Biegler's folksy speech and laid-back demeanor hide a sharp legal mind and a propensity for courtroom theatrics that keeps the judge busy maintaining control. However, the case for the defense does not go well, especially as local district attorney Mitch Lodwick is assisted by high-powered prosecutor Claude Dancer from the Attorney General's office.
<br><br>
Furthermore, the prosecution tries at every instance to block any mention of Manion's motive for killing Quill. Biegler eventually manages to get the rape of Laura Manion into the record and Judge Weaver agrees to allow the matter to be part of the deliberations. During cross-examination, Dancer insinuates that Laura openly flirted with other men, including the man she claimed raped her. Psychiatrists give conflicting testimony to Manion's state of mind at the time that he killed Quill. Dancer says that Manion may have suspected Laura of cheating on him because he asked her, a Catholic, to swear on a rosary that Quill raped her. This raises doubt as to whether the act was consensual.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="dragontattoo.php"><img src="images/dragontattoo.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="scarlet.php"><img src="images/scarlet.jpg" alt="img"></a>
					</li>
					<li>
						<a href="signfour.php"><img src="images/signfour.jpg" alt="img"></a>
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
$title="Anatomy of a Murder";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
