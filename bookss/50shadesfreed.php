<?php
session_start();
include '../connection.php';
$title="Fifty Shades Freed";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fifty Shades Freed </title>
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
				<img src="images/50shadesfreed.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Fifty Shades Freed.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Fifty Shades Freed.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>This was a perfect ending to what has definitely become my favorite series! It was wonderful to read the conclusion of this wonderful story that is Ana and her Fifty Shades <br><br>
					I loved both Ana and Christian in this one. Ana changed a lot. She was standing up for herself much more	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Fifty Shades Freed
				</i>
			</h3>
			<p>Anastasia 'Ana' Steele and Christian Grey return to Seattle after a long honeymoon. Christian is upset to find that Ana has kept her maiden name at work. After some resistance, Ana relents and changes her name at work to Grey after realizing how important it is to Christian. As a belated wedding gift, Christian gives Seattle Independent Publishing to Ana, and plans to rename it Grey Publishing.
<br><br>
While Christian is on a business trip in New York, Anastasia goes out for a drink with longtime friend Kate Kavanagh, doing so against Christian's wishes. Returning home, she finds that her former boss, Jack Hyde, who was fired for attempting to sexually assault her, has been apprehended by the security staff. Duct tape is found in his pocket and in his van there are tranquilizers and a ransom note—all indications that he had intended to kidnap her. Jack is arrested. Angry with Ana for defying him, Christian cuts short his New York business trip and returns to Seattle. Furious that Ana reneged on her promise to have Kate over rather than go out, an upset Christian sulks while Ana sleeps. Eventually, the two argue and Ana berates him for being overly controlling and possessive. She demands more freedom and access to her friends. Christian finally relents after realizing how much Ana's friends mean to her and that Ana did the right thing by staying with Kate rather than at home. Soon after, Christian surprises her with a trip to Aspen, with Kate, Elliot, Mia, and Kate's brother, Ethan. While there, Elliot proposes to Kate, and she accepts.
<br><br>
Ana's step-father, Ray, is in a medically-induced coma after a car accident. When he awakens a few days later, Ana and Christian arrange to move him to Seattle to recover. It is also Ana's birthday weekend, and Christian surprises her with all her family and friends at a dinner. He gives her a charm bracelet with the charms representing all their "firsts" including an ice cream cone to represent their "vanilla" relationship. Christian also gifts her with an Audi R8. Soon after, Ana learns she is pregnant. Christian angrily accuses her of getting pregnant on purpose and leaves. He returns early the next morning drunk, claiming Ana will choose the baby - whom he believes to be a boy - over him. Ana says it could be a girl, though Christian refuses to accept that due to his sexist and chauvinistic nature. Ana becomes furious when she discovers a text message on Christian's phone from his ex-lover Elena Lincoln, the woman who seduced him when he was fifteen and introduced him to the BDSM lifestyle. The message indicates they met for a drink.
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="twilight.php"><img src="images/twilight.jpg" alt="img"></a>
					</li>
					<li>
						<a href="newmoon.php"><img src="images/new.jpg" alt="img"></a>
					</li>
					<li>
						<a href="eclipse.php"><img src="images/eclipse.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
