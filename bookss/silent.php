<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Silent Patient</title>
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
				<img src="images/silent.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/The Silent Patient.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/The Silent Patient.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> It starts off a bit slow, but picks up pace extremely fast, and regardless of how many crime shows you've seen, or your inner Sherlock, the final twist was unimaginable and absolutely amazing.<br><br>
					The Silent Patient , the bestselling Psychological thriller novel of 2020 ❤️
The story , the characters , the plot , the mysteries  ... "outstanding"	<br><br>
				The Silent Patient was really worth reading		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Silent Patient
				</i>
			</h3>
			<p>Alicia Berenson, a famous painter, is held guilty for the murder of her husband, photographer Gabriel Berenson. Due to a plea of diminished responsibility, she is admitted to a secure forensic unit called the Grove. Theo Faber, a forensic psychotherapist with a keen interest in the Berenson case, successfully applies for a position at the Grove. At his request, he is placed in charge of Alicia, who has not spoken since the day of the murder. Although she remains mute during their therapy sessions, Alicia gives Theo her diary. In it, she describes being watched in her home by a masked man in the weeks before the murder.
<br><br>
To learn more about Alicia, Theo contacts her cousin. He narrates an incident from their childhood that had happened shortly after her mother's suicide. Alicia's father, in deep mourning for his wife, wished out loud that Alicia were dead instead. Theo understands that this has had a deep impact on her psyche. He repeats the episode back to her, which induces her to speak. She tells him that the masked man entered her house and murdered Gabriel.
<br><br>
It is revealed that Theo was the masked man. He had broken into the Berenson house to confront Gabriel, who had been having an affair with Theo's wife. Holding them at gunpoint, Theo had given Gabriel the choice to save either himself or his wife, and he chooses the former. Theo left without shooting either of them, as he had only intended to expose Gabriel's selfishness. Gabriel's betrayal reminds Alicia of her father, and she killed him. On hearing the news, Theo planned to help Alicia recover from her trauma by being her therapist.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="girltrain.php"><img src="images/girltrain.jpg" alt="img"></a>
					</li>
					<li>
						<a href="davinci.php"><img src="images/davinci.jpg" alt="img"></a>
					</li>
					<li>
						<a href="womanwindow.php"><img src="images/womanwindow.jpg" alt="img"></a>
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
$title=" The Silent Patient";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
