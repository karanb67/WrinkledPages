<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Girl On The Train</title>
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
				<img src="images/girltrain.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/thriller/The Girl on the Train.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/thriller/The Girl on the Train.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../thriller.php"><p>Thriller</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> One of the best psychological thrillers to be penned.<br><br>
					Super good Phych thriller novel.	<br><br>
				Good read. Starts slow and was honestly hard to get myself to continue reading.		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Girl On The Train
				</i>
			</h3>
			<p> The story is a first-person narrative told from the point of view of three women: Rachel Watson, Anna Boyd, and Megan Hipwell.
<br><br>
Rachel Watson is a 33-year-old alcoholic, reeling from the end of her marriage to Tom, who left her for another woman. Rachel's drinking has caused her to lose her job; she frequently binges and has blackouts. While drunk, she often harasses Tom, though she has little or no memory of these acts once she sobers up. Tom is now married to Anna Boyd and has a daughter with her, Evie – a situation that fuels Rachel's self-destructive tendencies, as it was her inability to conceive a child that began her spiral into alcoholism. Rachel follows her old routine of taking the train to London every day, one at 8:04 in the morning and the other at 5:56 in the evening. Her train slowly passes her old house on Blenheim Road, where Tom, Anna, and Evie now live. She also begins watching from the train an attractive couple who live a few houses away from Tom. She idealises their life (christening them "Jason" and "Jess"), though she has no idea that their life is far from perfect. The wife of the couple, Megan Hipwell ("Jess"), has a troubled past. She finds her life boring, and escapes from her troubles by taking a series of lovers. Megan has sought help by seeing a therapist, Dr. Kamal Abdic. Eventually, she reveals to him a dark secret she has never confided to anyone before.
<br><br>
Anna is young, beautiful, in love with Tom, and happy as a stay-at-home mother to the young Evie. While at first she enjoyed the idea of showing off to Rachel that Tom picked her, she eventually becomes furious at Rachel's harassment of her family. One day, Rachel is stunned to see Megan kissing another man. The next day, after heavy drinking, Rachel awakens to find herself bloody and injured, with no memories of the night before. She learns that Megan is missing, and is questioned by the police after Anna reports having seen her drunkenly staggering around the night of Megan's disappearance. Rachel becomes interested in the case and tells the police she thinks Megan was having an affair. She then contacts Megan's husband, Scott ("Jason") and tells him as well, lying that she and Megan were friends. Rachel learns that the man she saw kissing Megan was Kamal.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="davinci.php"><img src="images/davinci.jpg" alt="img"></a>
					</li>
					<li>
						<a href="womanwindow.php"><img src="images/womanwindow.jpg" alt="img"></a>
					</li>
					<li>
						<a href="behind.php"><img src="images/behind.jpg" alt="img"></a>
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
$title="The Girl On The Train";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
