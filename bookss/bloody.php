<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Bloody Chamber</title>
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
				<img src="images/bloody.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/The Bloody Chamber.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/The Bloody Chamber.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> In The Bloody Chamber, Angela Carter’s uses a decidedly feminist slant to re-tell familiar myths and stories. “The Company of Wolves,” <br><br>
					There's the indulgence of the mind, and there's the pleasure of the senses. One can fill oneself up on the former to the brim	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Bloody Chamber
				</i>
			</h3>
			<p>The narrator, a beautiful teenage girl, marries an older, wealthy French Marquis, who met her while she was playing the piano at a tea-party. Her governess, though pleased she has made a good match, notes the Marquis has formerly wed three women, all of whom died in mysterious circumstances. He gifts his bride a choker made of rubies, warning her against taking it off, and takes her to his coastal castle in Brittany, where she discovers his collection of pornographic engravings and paintings. He takes pleasure in her embarrassment, and they consummate their marriage that night, in a bedroom filled with white lilies and mirrors. The following morning, he hears of urgent business he must attend to in New York. When he leaves, he entrusts her with a chain of keys, telling her she can use them to go about the castle as she wishes. <br><br>He forbids her from using a certain key, telling her it opens his private den. She tries to grow accustomed to her new-found decadence, but, being a talented pianist, feels most comfortable with the blind piano-tuner. Closer to her age, he lives in a nearby town and, after tuning the organ her husband gave to her as a wedding present, asks to hear her play once in a while. But still, her husband's absence makes her feel melancholy, and she telephones her mother. Afterwards, she starts going through the Marquis' things in order to learn more about him.
				<br><br>
				 After going through his desk, she learns more of his previous wives, which pushes her to take the forbidden key and enter his chamber. She soon realizes the full extent of his perverse and murderous tendencies when she discovers the bodies of his previous wives, presented in gruesome ways, some of which are surrounded by the same white lilies the Marquis filled her own room with. In her shock, she drops the key, staining it with the blood on the floor.
				<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hpphilosopher.php"><img src="images/hpphilosopher.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpchamber.php"><img src="images/hpchamber.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpprisoner.php"><img src="images/hpprisoner.jpg" alt="img"></a>
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
$title="The Bloody Chamber";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
