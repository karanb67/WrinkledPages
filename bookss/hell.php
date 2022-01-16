<?php
session_start();
include '../connection.php';
$title=" To Reign in Hell";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>To Reign in Hell</title>
<link href="CSS/abt_books.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="left_container">
			<div class="leftup">
			<div class="logodiv">
				<a href="../homepage.php"><img src="images/logo.png" alt="logo" class="logo"></a>
			</div>
			<div class="imgBook">
				<img src="images/hell.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/To Reign in Hell.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/To Reign in Hell.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>Gloss on Milton demonstrates that Hell, contra Sartre, is a self-inflicted wound. <br><br>
					I initially rated this 4 stars but that is not sitting well. I love Brust's originality and his lack of fear to take such a well known story and shape it to his own ideals	<br><br>
					I thought about 3-stars for this, but it honestly had me too captivated for that. TRIH was well written, but not deeply written. The story never really reached its full potential to me	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 To Reign in Hell
				</i>
			</h3>
			<p>The story begins by detailing the creation story of Heaven. There is a substance of raw chaos: cacoastrum; and stuff of order: illiaster. From the illiaster came consciousness that resulted in the firstborn angels: Yaweh, Satan, Michael, Lucifer, Raphael, Leviathan and Belial. The firstborn create Heaven in order to protect themselves from the cacoastrum, which threatens to destroy them. This event is later referred to as the 'First Wave.' The walls of heaven have collapsed two times since then, resulting in the Second and Third Waves, creating, respectively, the archangels and angels.
<br><br>
After the third wave Heaven has been divided into four regencies named for the cardinal points of the compass. Belial, half-mad and trapped in the form of a dragon, rules the Northern Regency. Leviathan, a kindly woman in the shape of a sea serpent, oversees the Western Regency. Satan rules the South with his loyal servant Beelzebub, trapped in the body of a golden retriever. Lucifer rules the East, with his consort Lilith, who had previously been briefly involved with Satan. Yaweh oversees all of Heaven from the center, aided by his healer Raphael and warrior Michael.
<br><br>
Other important angels include the blind musician Harut, the poetry-quoting Ariel, the craftsman Asmodai, the smirking Mephistopheles, the dour Uriel, the sneering Abdiel, the somewhat naive Gabriel and the coolly competent Zaphkiel. A mostly independent subplot involving two angels named Kyriel and Sith gives the viewpoints of two low-level angels who get swept up in the story's events.
<br><br>
Trouble arises when Yaweh, worried about the imminent Fourth Wave, devises The Plan: the blueprint for a new, larger Heaven (Earth), with walls that the cacoastrum cannot destroy. Unfortunately, at least a thousand angels will die during the construction of his new Paradise. Yaweh charges Satan with securing the cooperation of every angel in Heaven, and Satan finds himself wondering if they have the ethical right to coerce anyone into participating.
<br><br>
Exacerbating matters is Abdiel, who craves Satan's rank. Abdiel begins playing Satan against Yaweh, telling each of them that the other will no longer discuss matters. Step by step, the factions escalate. Abdiel attempts to wound Beelzebub and accidentally kills the innocent Ariel. When Satan and Beelzebub attempt to avenge this, Raphael and Michael misinterpret this as proof their opponents have abandoned all decency
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="bloody.php"><img src="images/bloody.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpphilosopher.php"><img src="images/hpphilosopher.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpchamber.php"><img src="images/hpchamber.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
