<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Prisoner of Azkaban.</title>
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
				<img src="images/hpprisoner.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Prisoner of Azkaban.pdf" class="button" target="_blank">Read Book</a><br><br><br>
        <a href="#" download="pdfs/fantasy/Harry Potter and the Prisoner of Azkaban.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> “Happiness can be found, even in the darkest of times, if one only remembers to turn on the light.”<br><br>
						Sirius Black's escape from Azkaban prison is on every wizard's lips. Not even the dreaded guards of the prison, the Dementors, managed to keep in a cage the wicked wiz<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Prisoner of Azkaban.
				</i>
			</h3>
			<p>
				Harry is back at the Dursleys' for the summer holidays, where he sees on television that a convict named Sirius Black has escaped from prison. After the Dursley's Aunt Marge insults Harry and his parents, Harry accidentally inflates her, then runs away from home, fearing expulsion from school. After encountering a large black dog that seems to be watching him, he is picked up by the Knight Bus and travels to the Leaky Cauldron, where Cornelius Fudge, the Minister for Magic, asks Harry to stay in Diagon Alley for his protection. While there, he reunites with his friends Ron Weasley and Hermione Granger.<br><br>

Before leaving for Hogwarts, Harry learns from Arthur Weasley that Sirius Black is a convicted murderer from the wizarding world, and has escaped from the wizard prison Azkaban to kill Harry. On the way to Hogwarts, a Dementor boards the train, causing Harry to relive his parents' deaths before fainting. The new Defence Against the Dark Arts teacher, Remus Lupin, protects him from the Dementor. They learn Dementors will be patrolling the school in an attempt to catch Black.<br><br>
			During a Quidditch match, Harry faints and falls off his broomstick after Dementors invade the field, and the Whomping Willow destroys the broom. Afterwards, Professor Lupin teaches Harry how to defend himself from Dementors using the Patronus charm. During an illegal trip to Hogsmeade, Harry overhears a conversation between Fudge, McGonagall, Flitwick, and Hagrid. He learns that Black is his godfather, betrayed his family to Voldemort, and killed Peter Pettigrew, a family friend, when confronted by him.		<br><br>
 					<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hpgoblet.php"><img src="images/hpgoblet.jpg" alt="img"></a>
					</li>
					<li>
					<a href="hporder.php"><img src="images/hporder.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hphalfblood.php"><img src="images/hphalfblood.jpg" alt="img"></a>
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
$title="Harry Potter and the Prisoner of Azkaban";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
