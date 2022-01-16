<?php
session_start();
include '../connection.php';
$title="Harry Potter and the Half-Blood Prince";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Half-Blood Prince.</title>
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
				<img src="images/hphalfblood.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Half-Blood Prince.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Harry Potter and the Half-Blood Prince.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I'm not sure why, but this one took me completely by surprise. I was expecting this installment to be mainly filler to get us to the Deathly Hallows<br><br>
						I could revisit this world over and over!!<br><br>
						They're awesome.
						Deep, huh? Well, deep or shallow, it's the truth. I waited a long time to read the Harry Potter books because I wanted to experience them with my own children.	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Half-Blood Prince.
				</i>
			</h3>
			<p> 	Severus Snape, a member of the Order of the Phoenix, meets with Narcissa Malfoy, Draco's mother, and her sister Bellatrix Lestrange, Lord Voldemort's supporter. Narcissa expresses concern that her son might not survive a mission given to him by Voldemort. Snape makes an Unbreakable Vow with Narcissa, swearing to assist Draco.Dumbledore picks Harry up to escort him to the Burrow, home of Harry's best friend Ron Weasley. They detour to the home of Horace Slughorn, former Potions teacher at Hogwarts, and Harry unwittingly helps persuade Slughorn to return to teaching.<br><br>
				On the Hogwarts Express, Harry suspects Draco has become a Death Eater. Harry eavesdrops on Draco, who brags to his friends about a mission Voldemort has assigned him. Draco catches Harry, petrifying him and breaking his nose. Nymphadora Tonks finds Harry and escorts him to Hogwarts, where Dumbledore announces that Snape will teach Defence Against the Dark Arts, while Slughorn will teach Potions. Finding an old textbook that once belonged to "The Half-Blood Prince", an individual who wrote numerous spells and tips in the book, Harry excels at the Potions class, winning a bottle of Felix Felicis, or "Liquid Luck". Hermione, however, distrusts the book.	<br><br>
				Ron and Hermione grow closer, but after learning from his sister Ginny of Hermione's history with Viktor Krum, Ron goes out with Lavender Brown, making Hermione jealous. Harry develops feelings for Ginny, and the two later start a relationship with Ron's approval after a Gryffindor Quidditch victory. Draco grows unhinged throughout the year, acting in increasingly shady ways.

	Meanwhile, to help Harry in his foretold battle with Voldemort, Dumbledore and Harry use the Pensieve to examine memories of people from Voldemort's past. One of the memories involves Slughorn conversing with a young Tom Riddle, but it has been tampered with, so Dumbledore asks Harry to obtain the real memory from Slughorn. Harry uses Felix Felicis to retrieve the memory, in which Slughorn tells Riddle about the process of splitting one's soul and hiding it in Horcruxes, making the user virtually immortal. Voldemort created six Horcruxes, which must be destroyed in order to destroy Voldemort himself. Two Horcruxes, Riddle's diary from Harry Potter and the Chamber of Secrets and a ring belonging to Voldemort's grandfather, have already been destroyed; four others remain.		<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hpdeathlyhallows.php"><img src="images/hpdeathlyhallows.jpg" alt="img"></a>
					</li>
					<li>
						<a href="alice.php"><img src="images/alice.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hell.php"><img src="images/hell.jpg" alt="img"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
