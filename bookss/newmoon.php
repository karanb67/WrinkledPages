<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Moon</title>
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
				<img src="images/new.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/New Moon.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/New Moon.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> The beginning is slow, the middle is gold, the end is lacking. The blank pages to represent months passed in zombie-depression, great idea.<br><br>
					I love the Twilight Saga. I love every single book and it's kind of hard for me to pick a favourite	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 New Moon
				</i>
			</h3>
			<p> On Bella Swan's eighteenth birthday, Edward Cullen, the vampire she loves, and his family host her a birthday party at their residence. While unwrapping a gift, Bella receives a paper cut, which causes Edward's adopted brother, Jasper, to be overwhelmed by her blood's scent, and attempt to attack Bella. Trying to protect her, Edward and the Cullens move away from Forks, but in an attempt to encourage Bella to move on, Edward tells her it is because he no longer loves her. With Edward's departure, Bella suffers severe memory loss and depression for several months.
<br><br>
In the months that follow, Bella learns that thrill-seeking activities, such as motorcycle riding and cliff-diving, allow her to "hear" Edward's voice in her head through her subconscious mind. She also seeks comfort in her deepening friendship with Jacob Black, a cheerful companion who eases her pain over losing Edward. Sometime after losing Edward, Bella starts to enjoy Jacob's company and friendship. After spending some time with Bella, Jacob starts experiencing some unexpected and drastic changes with his mood swings, body, and personality. As Jacob undergoes a very long, painful and life-altering transformation, Bella and Charlie become concerned.
<br><br>A few weeks later, Bella notes that Jacob isn't as happy-go-lucky as he once was. She isn't so comfortable with Jacob's recent changes, and shortly thereafter, she discovers that Jacob has unwillingly become a werewolf, and that there are other tribe members who are werewolves too. Jacob and his pack protect Bella from the vampire, Laurent, who was a part of James' coven, and also Victoria, who seeks revenge for her dead mate, James, whom the Cullens had killed in the previous installment. Jacob starts developing physical emotions towards Bella, but she doesn't feel the same after experiencing a life-changing breakup with Edward. This makes him horribly sad and envious of Edward. Jacob then saves Bella from drowning after jumping off a cliff and almost kisses her in the events following.
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="eclipse.php"><img src="images/eclipse.jpg" alt="img"></a>
					</li>
					<li>
						<a href="breakingdawn.php"><img src="images/breakingdawn.jpg" alt="img"></a>
					</li>
					<li>
						<a href="midnightsun.php"><img src="images/midnightsun.jpg" alt="img"></a>
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
$title="New Moon";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
