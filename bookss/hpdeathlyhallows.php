<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harry Potter and the Deathly Hallows</title>
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
				<img src="images/hpdeathlyhallows.jpg">
			</div>
			</div>
			<div class="buttons">
        <a href="pdfs/fantasy/Harry Potter and the Deathly Hallows.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/fantasy/Harry Potter and the Deathly Hallows.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../fantasy.php"><p>Fantasy</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>It's hard for me to believe that I finished the Harry Potter series... I wish this series would go on forever! <br><br>
					I love Harry Potter as much as anyone, which is why I urge everyone who spends money on these books to also support the trans community.	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Harry Potter and the Deathly Hallows
				</i>
			</h3>
			<p>
				Following Dumbledore's death, Voldemort is attempting to take control of the Ministry of Magic. Meanwhile, Harry is about to turn seventeen, and lose the protection from his mother. Members of the Order of the Phoenix relocate the Dursleys, and prepare to move Harry to the Burrow, by flying him there, using Harry's friends as decoys. Death Eaters attack them upon departure, and in the ensuing battle, "Mad-Eye" Moody and Hedwig are killed and George Weasley is wounded. Voldemort arrives to kill Harry, but Harry's wand fends him off on its own.
<br><br>
Harry, Ron, and Hermione prepare to hunt down Voldemort's four remaining Horcruxes, and inherit bequests from Dumbledore: a Golden Snitch for Harry, a Deluminator for Ron, and "The Tales of Beedle the Bard", for Hermione. They are also bequeathed the Sword of Godric Gryffindor, which can destroy Horcruxes, but the Ministry prevents them from receiving it. During Bill Weasley and Fleur Delacour's wedding, the Ministry falls to Voldemort, and the wedding is attacked by Death Eaters. The trio flee to 12 Grimmauld Place, Sirius Black's family home.
<br><br>


			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="alice.php"><img src="images/alice.jpg" alt="img"></a>
					</li>
					<li>
						<a href="hell.php"><img src="images/hell.jpg" alt="img"></a>
					</li>
					<li>
						<a href="bloody.php"><img src="images/bloody.jpg" alt="img"></a>
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
$title="Harry Potter and the Deathly Hallows";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
