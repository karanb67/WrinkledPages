<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Fault in Our Stars</title>
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
				<img src="images/fault.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/The Fault in Our Stars.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/The Fault in Our Stars.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I hate the fact that it made me laugh, so hard!<br><br>
					I hate the fact that it made me smile, so much!<br><br>
					I hate the fact that it made me chuckle, so profusely!<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Fault in Our Stars
				</i>
			</h3>
			<p> Hazel Grace Lancaster, a 16-year-old with thyroid cancer that has spread to her lungs, attends a cancer patient support group at her mother's behest. At one meeting, Hazel meets a 17-year-old boy currently in remission named Augustus Waters, whose osteosarcoma caused him to lose his right leg. Augustus is at the meeting to support Isaac, his friend who has eye cancer. Hazel and Augustus strike a bond immediately and agree to read each other's favorite novels.<br><br> Augustus gives Hazel The Price of Dawn, and Hazel recommends An Imperial Affliction, a novel about a cancer-stricken girl named Anna that parallels Hazel's own experience. After Augustus finishes reading her book, he is frustrated upon learning that the novel ends abruptly without a conclusion, as if Anna had died suddenly. Hazel explains the novel's author, Peter van Houten, retreated to Amsterdam following the novel's publication and has not been heard from since.
<br><br>
A week later, Augustus reveals to Hazel that he has tracked down Van Houten's assistant, Lidewij, and, through her, has managed to start an e-mail correspondence with Van Houten. The two write to Van Houten with questions regarding the novel's ending; he eventually replies, explaining that he can only answer Hazel's questions in person. At a picnic, Augustus surprises Hazel with tickets to Amsterdam to meet Van Houten, acquired through the story's version of the Make-A-Wish Foundation, "The Genies."

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="fivefeet.php"><img src="images/fivefeet.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesgrey.php"><img src="images/50shadesgrey.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesdarker.php"><img src="images/50shadesdarker.jpg" alt="img"></a>
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
$title="The Fault in Our Stars";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
