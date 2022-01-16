<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ikigai</title>
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
				<img src="images/ikagi.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/Ikigai.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/Ikigai.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>
				I liked the message of this book and the concept of ikigai	 	<br><br>
						A really interesting little read. Has given me ideas of lots of other things I want to explore this year.<br><br>
						Seems like the writers were not in the "flow" while writing this one.<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Ikigai: The Japanese Secret to a Long and Happy Life
				</i>
			</h3>
			<p>
				The people of Japan believe that everyone has an ikigai – a reason to jump out of bed each morning. And according to the residents of the Japanese island of Okinawa – the world’s longest-living people – finding it is the key to a longer and more fulfilled life. Inspiring and comforting, this book will give you the life-changing tools to uncover your personal ikigai. It will show you how to leave urgency behind, find your purpose, nurture friendships and throw yourself into your passions.<br><br>
					The Danish word hygge is one of those beautiful words that doesn't directly translate into English, but it more or less means comfort, warmth or togetherness. Hygge is the feeling you get when you are cuddled up on a sofa with a loved one, in warm knitted socks, in front of the fire, when it is dark, cold and stormy outside. It that feeling when you are sharing good, comfort food with your closest friends, by candle light and exchanging easy conversation. It is those cold, crisp blue sky mornings when the light through your window is just right.<br><br>
 				Step aside Hygge. Lagom is the new Scandi lifestyle trend taking the world by storm. This delightfully illustrated book gives you the lowdown on this transformative approach to life and examines how the lagom ethos has helped boost Sweden to the No.10 ranking in 2017's World Happiness Report.Lagom (pronounced 'lah-gom') has no equivalent in the English language but is loosely translated as 'not too little, not too much, just right'. It is widely believed that the word comes from the Viking term 'laget om', for when a mug of mead was passed around a circle and there was just enough for everyone to get a sip.	<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="thealchemist.php"><img src="images/thealchemist.jpg" alt="img"></a>
					</li>
					<li>
						<a href="gettingthingsdone.php"><img src="images/gettingthingsdone.jpg" alt="img"></a>
					</li>
					<li>
						<a href="whowillcry.php"><img src="images/whowillcry.jpg" alt="img"></a>
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
$title="Ikigai";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
