<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Philosopher's Stone</title>
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
				<img src="images/hpphilosopher.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/fantasy/Harry Potter and the Philosopher's Stone.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Harry Potter and the Philosopher's Stone.pdf" class="button">Download</a>
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
          I will never ever rate this lower than 5 stars. BEAUTIFUL<br><br>
				Why the heck did I not read Harry Potter before now...its flipping magical (literally)!		<br><br>
					I'm reading for the first time this book to my daughter (6 years old), but for me (37 years old) it's the third time I read "Harry Potter and the philosopher's stone".	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Philosopher's Stone
				</i>
			</h3>
			   <p>Harry Potter and the Philosopher's Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just 15 months old. <br><br>
				 After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry.	<br><br>
         Though Harry's first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it's his responsibility to prevent it from falling into evil hands. But doing so will bring him into contact with forces more terrifying than he ever could have imagined.<br><br>
         Full of sympathetic characters, wildly imaginative situations, and countless exciting details, the first installment in the series assembles an unforgettable magical world and sets the stage for many high-stakes adventures to come<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hpchamber.php"><img src="images/hpchamber.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpprisoner.php"><img src="images/hpprisoner.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hpgoblet.php"><img src="images/hpgoblet.jpg" alt="img"></a>
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
$title="Harry Potter and the Philosophers Stone";
$email=$_SESSION['add'];
mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
