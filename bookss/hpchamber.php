<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Chamber of Secrets</title>
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
				<img src="images/hpchamber.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Chamber of Secrets.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Harry Potter and the Chamber of Secrets.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I really enjoyed this one (as did millions of others, obviously) and, with this installment, I am definitely seeing why this is such a beloved series. The magical wizarding world of Harry, his friends, and the folks at Hogwart's is just FUN to read about.<br><br>
						<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Chamber of Secrets
				</i>
			</h3>
			<p> Ever since Harry Potter had come home for the summer, the Dursleys had been so mean and hideous that all Harry wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he’s packing his bags, Harry receives a warning from a strange impish creature who says that if Harry returns to Hogwarts, disaster will strike.<br><br>
				And strike it does. For in Harry’s second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor and a spirit who haunts the girls’ bathroom. But then the real trouble begins – someone is turning Hogwarts students to stone. Could it be Draco Malfoy, a more poisonous rival than ever? Could it possible be Hagrid, whose mysterious past is finally told? Or could it be the one everyone at Hogwarts most suspects… Harry Potter himself!	<br><br>
 					Harry Potter and the Chamber of Secrets continues to examine what makes a person who he or she is, which began in the first book. As well as maintaining that Harry's identity is shaped by his decisions rather than any aspect of his birth, Harry Potter and the Chamber of Secrets provides contrasting characters who try to conceal their true personalities: as Tammy Nezol puts it, Gilderoy Lockhart "lacks any real identity" because he is nothing more than a charming liar.[15] Riddle also complicates Harry's struggle to understand himself by pointing out the similarities between the two: "both half-bloods, orphans raised by Muggles, probably the only two Parselmouths to come to Hogwarts since the great Slytherin."<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hpprisoner.php"><img src="images/hpprisoner.jpg" alt="img"></a>
					</li>
					<li>
					<a href="hpgoblet.php"><img src="images/hpgoblet.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hporder.php"><img src="images/hporder.jpg" alt="img"></a>
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
$title="Harry Potter and the Chamber of Secrets";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
