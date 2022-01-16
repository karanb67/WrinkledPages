<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Goblet of Fire.</title>
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
				<img src="images/hpgoblet.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Goblet of Fire.pdf" class="button" target="_blank">Read Book</a><br><br><br>
        <a href="#" download="pdfs/fantasy/Harry Potter and the Goblet of Fire.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>
I love Harry Potter as much as anyone, which is why I urge everyone who spends money on these books to also support the trans community.<br><br>
					I really don't think I need to tell y'all that I loved this because I've been raving about this series since the moment I started it back in January but for the sake of clarity - I love this.	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Goblet of Fire.
				</i>
			</h3>
			<p> In a prologue, which Harry sees through a dream, Frank Bryce, Muggle caretaker of an abandoned mansion known as the Riddle House, is murdered by Lord Voldemort after stumbling upon him and Wormtail. Harry is awoken by his scar hurting.The Weasleys invite Harry and Hermione Granger to the Quidditch World Cup, to which they travel using a Portkey. After the match, masked Death Eaters, followers of Voldemort, attack the camp site. The Dark Mark is fired into the sky, causing mass panic. Harry discovers that his wand is missing. It is later found in the possession of Winky, Barty Crouch's house elf, having been used to cast the Mark. Barty Crouch dismisses Winky from his service.<br><br>
			At Hogwarts, Professor Dumbledore announces that Alastor "Mad-Eye" Moody will be the Defence Against the Dark Arts teacher for the year. Dumbledore also announces that Hogwarts will host a revival of the Triwizard Tournament, in which a champion of Hogwarts will compete against champions from two European wizarding schools. The champions are chosen by the Goblet of Fire from names dropped into it. As Harry is under the age of majority in the wizarding world, he is disallowed from entering. The Goblet of Fire picks Fleur Delacour from Beauxbatons Academy, Viktor Krum from Durmstrang Institute, and Cedric Diggory from Hogwarts to compete. Unexpectedly, it chooses Harry as a fourth champion, forcing him to compete.		<br><br>
 				Hagrid covertly reveals to Harry that the first task in the tournament is to get past a dragon. Harry struggles to find a way to accomplish this, until Moody suggests flying. Hermione helps him perfect a Summoning Charm, which he uses to summon his Firebolt broomstick and fly past the dragon to retrieve a golden egg. The egg is supposed to contain a clue to the next task, but when opened it shrieks loudly. Following a tip from Cedric, Harry discovers that the task is to recover something from Merpeople at the bottom of the lake in the grounds.	<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hporder.php"><img src="images/hporder.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hphalfblood.php"><img src="images/hphalfblood.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpdeathlyhallows.php"><img src="images/hpdeathlyhallows.jpg" alt="img"></a>
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
$title="Harry Potter and the Goblet of Fire.";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
