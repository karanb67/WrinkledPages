<?php
session_start();
include '../connection.php';
$title=" Alice Adventures in Wonderland";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alice's Adventures in Wonderland</title>
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
				<img src="images/alice.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Alice's Adventures in Wonderland.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Alice's Adventures in Wonderland.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Another reread for me, and what a pleasure it was to reconnect with Alice’s Adventures in Wonderland/ Through the Looking Glass. Many years since I read this but it still raises a smile!<br><br>
					“Once she remembered trying to box her own ears for having cheated herself in a game of croquet she was playing against herself, for this curious child was very fond of pretending to be two people.”	<br><br>
					Randomness GALORE...! ...& yet, ISN'T THAT the reason the Disney tale is such a part of my early formative years?	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Alice's Adventures in Wonderland
				</i>
			</h3>
			<p>Alice's Adventures in Wonderland was published in 1865. It was inspired when, three years earlier on 4 July, Lewis Carroll and the Reverend Robinson Duckworth rowed up the River Isis in a boat with three young girls. This day was known as the "golden afternoon," prefaced in the novel as a poem. The poem might be a confusion or even another Alice-tale, for it turns out that particular day was cool, cloudy and rainy. The three girls would be the daughters of scholar Henry Liddell: Lorina Charlotte Liddell (aged 13; "Prima" in the book's prefatory verse); Alice Pleasance Liddell (aged 10; "Secunda" in the verse); and Edith Mary Liddell (aged 8; "Tertia" in the verse).
				The journey began at Folly Bridge, Oxford and ended five miles (8 km) away in the Oxfordshire village of Godstow. During the trip Dodgson told the girls a story that featured a bored little girl named Alice who goes looking for an adventure. The girls loved it, and Alice Liddell asked Dodgson to write it down for her. <br><br>
					 Alice, a seven-year-old girl, is feeling bored and drowsy while sitting on the riverbank with her elder sister. She notices a talking, clothed white rabbit with a pocket watch run past. She follows it down a rabbit hole where she suddenly falls a long way to a curious hall with many locked doors of all sizes. She finds a little key to a door too small for her to fit through, but through it, she sees an attractive garden. She then discovers a bottle on a table labelled "DRINK ME," the contents of which cause her to shrink too small to reach the key which she had left on the table. She subsequently eats a cake labelled "EAT ME" in currants as the chapter closes<br><br>
					 "I can't explain myself, I'm afraid, sir," said Alice, "Because I'm not myself, you see."
	 			 When Alice sees a white rabbit take a watch out of its waistcoat pocket she decides to follow it, and a sequence of most unusual events is set in motion. This mini book contains the entire topsy-turvy stories of Alice's Adventures in Wonderland and Through the Looking-Glass, accompanied by practical notes and Martina Pelouso's memorable full-colour illustrations.	<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hell.php"><img src="images/hell.jpg" alt="img"></a>
					</li>
					<li>
						<a href="bloody.php"><img src="images/bloody.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpphilosopher.php"><img src="images/hpphilosopher.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
