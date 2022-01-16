<?php
session_start();
include '../connection.php';
$title="2001: A Space Odyssey";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>2001: A Space Odyssey</title>
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
				<img src="images/space.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/2001 A Space Odyssey .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/2001 A Space Odyssey .pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> First of all, this book is so much better than the movie. The parts of the movie that are completely silent- the parts that feel dead, really- truly come alive in the written narrative<br><br>
				Beautiful prose, captivating descriptions, masterful themes. Highly recommend!		<br><br>
					It was a good book with good plot with good characters and an unexpected ending	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 2001: A Space Odyssey
				</i>
			</h3>
			<p> A mysterious alien civilization uses a tool with the appearance of a large crystalline monolith to investigate worlds across the galaxy and, if possible, to encourage the development of intelligent life. The book shows one such monolith appearing in prehistoric Africa, 3 million years ago (in the movie, 4 mya), where it inspires a starving group of hominids to develop tools. The hominids use their tools to kill animals and eat meat, ending their starvation. They then use the tools to kill a leopard preying on them; the next day, the main ape character, Moon-Watcher, uses a club to kill the leader of a rival tribe. The book suggests that the monolith was instrumental in awakening intelligence.
<br><br>
In AD 1999, Dr. Heywood Floyd travels to the Moon's Clavius Base, where a scientist explains that they have found an electromagnetic disturbance, designated Tycho Magnetic Anomaly One (or TMA-1), in the crater Tycho. Excavation has revealed a large black slab, precisely fashioned to a ratio of 1:4:9 (or 12:22:32) and therefore believed the work of intelligence. Visiting TMA-1, Floyd and others arrive just as sunlight falls upon it for the first time since it was uncovered; it emits a piercing radio transmission which the scientists determine is directed at one of the moons of Saturn, Japetus (Iapetus).[2]
<br><br>
A mission, Discovery One, is sent to Saturn. En route, Dr. David Bowman and Dr. Frank Poole are the only conscious humans aboard; their three colleagues are in suspended animation, to be awakened near Saturn. The HAL 9000, an artificially intelligent computer, addressed as "Hal", maintains the ship. While Poole is receiving a birthday message from his family on Earth, Hal tells Bowman that the AE-35 communication unit of the ship is going to malfunction. Poole takes one of the extra-vehicular pods and swaps the AE-35 unit; but when Bowman conducts tests on the removed AE-35 unit, he determines that there was never anything wrong with it. Poole and Bowman become suspicious at Hal's refusal to admit that his diagnosis was mistaken; Hal then claims that the replacement AE-35 unit will fail. In communicating with Earth, Poole and Bowman are directed to disconnect Hal for analysis. These instructions are interrupted as the signal is broken, and Hal informs them that the AE-35 unit has malfunctioned.
<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="harsh.php"><img src="images/harsh.jpg" alt="img"></a>
					</li>
					<li>
						<a href="timemachine.php"><img src="images/timemachine.jpg" alt="img"></a>
					</li>
					<li>
						<a href="the100.php"><img src="images/the100.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
