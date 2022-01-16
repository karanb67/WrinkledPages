<?php
session_start();
include '../connection.php';
$title="Fifty Shades Darker";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fifty Shades Darker</title>
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
				<img src="images/50shadesdarker.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Fifty Shades Darker.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Fifty Shades Darker.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>Ana acts like an overly 'innocent' teenager despite being an able career woman in her early 20's. <br><br>
					The second half wasn't as bad, but the first half felt like a continuing repeat of the initial book.	<br><br>
				Finally read this one for the first time and not even sure how I feel. Once again, I’m not going to be rating this book just like I didn’t with the first book. The movies have always been a guilty pleasure		<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Fifty Shades Darker
				</i>
			</h3>
			<p>Three days after leaving Christian, Anastasia "Ana" Steele begins her job as personal assistant to Jack Hyde, an editor at Seattle Independent Publishing (SIP). He asks Ana out often which, though it makes her uneasy, she writes off. Later, Christian emails her about a gallery exhibit José Rodriguez started in Portland, which she'd forgotten. Ana and Christian attend the show together and kiss in an alley. The same night, they have dinner in a restaurant and Christian reveals he wants her any way possible. He later asks that they resume their relationship but under Ana's conditions: no rules and no punishments. He agrees.
<br><br>
Christian reveals to Ana that he bought SIP but that the deal must stay secret for another month. Feeling he is interfering in her career, especially after he freezes the company's accounts preventing her from going on an overnight business trip to New York with Jack, Ana finds it annoying. Christian insists his actions were for her own protection because Jack is a "known philanderer" who has apparently harassed his last five assistants. Christian's concerns prove correct when Jack corners Ana after hours and blackmails her, demanding sexual favors. Ana escapes using her self-defense training, and Christian has Jack fired and confiscates his work computer.
<br><br>
Meanwhile, when attending a masquerade ball at the home of Christian's parents, Ana meets Christian's ex-lover Elena Lincoln (whom Ana nicknames Mrs. Robinson) and discovers that Elena and Christian own a salon business together. Later, Ana is auctioned off and Christian bids $100,000 for the first dance with her. Ana is disgusted to learn Christian continues to be friends with Elena, the woman who seduced him when he was only 15 years old and introduced him to the BDSM lifestyle. When Elena realizes that Christian sees Ana as a girlfriend and not a submissive, she becomes antagonistic towards Ana, trying to sow discord in the budding relationship.
<br><br>
Meanwhile, Ana is stalked at work by a disturbed Leila Williams, one of Christian's former submissives, a situation made more intense when Ana learns Leila has a gun. Leila's obsession with Christian and Ana began after she left her husband four months before, leading to a mental breakdown. Leila breaks into Ana's apartment and threatens her at gunpoint. Christian defuses the situation by using their dominant/submissive dynamic, leaving Ana worried that Christian cannot be satisfied with a vanilla relationship. Ana confronts Christian about Leila. Fearing Ana is leaving him again, Christian impulsively puts out his marriage proposal. Ana does not answer, claiming she needs time to consider it.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="50shadesfreed.php"><img src="images/50shadesfreed.jpg" alt="img"></a>
					</li>
					<li>
						<a href="twilight.php"><img src="images/twilight.jpg" alt="img"></a>
					</li>
					<li>
						<a href="newmoon.php"><img src="images/new.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
