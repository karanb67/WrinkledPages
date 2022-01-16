<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Order of the Phoenix</title>
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
				<img src="images/hporder.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Order of the Phoenix.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Harry Potter and the Order of the Phoenix.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>(obviously a reread) *cries* <br><br>
						The biggest compliment I can think to give an 870 page book is that I wish it had been longer. I wish this had been longer.<br><br>
						This book has always been my favorite in the series. Up until it, Harry’s story had been filled with light	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Order of the Phoenix
				</i>
			</h3>
			<p>
				During the summer, Harry Potter and his cousin Dudley are attacked by Dementors. Forced to use magic to fend them off, Harry is expelled from Hogwarts, but his expulsion is postponed pending a hearing at the Ministry of Magic. Harry is whisked off to Number 12, Grimmauld Place, the childhood home of Sirius Black, by a group of wizards belonging to the Order of the Phoenix.Ron Weasley and Hermione Granger explain that the Order is a secret organisation led by Hogwarts headmaster Albus Dumbledore, dedicated to fighting Lord Voldemort and the Death Eaters. Harry, Ron, Hermione, Ginny Weasley and Fred and George Weasley learn that Voldemort is seeking something he lacked prior to his defeat. The Ministry, led by Cornelius Fudge, refuses to accept Voldemort's return, and are running a smear campaign against Harry and Dumbledore. At the hearing, Dumbledore defends Harry, who is cleared of all charges.<br><br>
				At Hogwarts, Dolores Umbridge, a senior Ministry employee, becomes the new Defence Against the Dark Arts teacher. She refuses to believe in Voldemort's return, and clashes with Harry, punishing him by having him magically carve "I must not tell lies" into the back of his hand. She also refuses to teach her students how to perform defensive magic, prompting Harry, Ron, and Hermione to form their own Defence group with other students. Umbridge, empowered by the Ministry to interfere in Hogwarts as the new High Inquisitor, bans unapproved clubs, forcing the group, now called Dumbledore's Army, to meet in secret in the Room of Requirement to practice under Harry's instruction.	<br><br>
 					One night, Harry has a vision of Voldemort's snake Nagini seriously injuring Arthur Weasley. Harry tells Professor McGonagall and Dumbledore, and Arthur is rescued. Dumbledore arranges for Harry to take Occlumency lessons with Professor Snape, another member of the Order, to protect his mind against invasions by Voldemort. Umbridge is eventually given a tip-off about Dumbledore's Army, and to prevent Harry's expulsion, Dumbledore takes responsibility for the group, and goes into hiding. Umbridge becomes headmistress.<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hphalfblood.php"><img src="images/hphalfblood.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpdeathlyhallows.php"><img src="images/hpdeathlyhallows.jpg" alt="img"></a>
					</li>
					<li>
						<a href="alice.php"><img src="images/alice.jpg" alt="img"></a>
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
$title="Harry Potter and the Order of the Phoenix";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
