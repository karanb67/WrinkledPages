<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The 100: Day 21</title>
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
				<img src="images/day21.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/scifi/Day21.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/scifi/Day21.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../scifi.php"><p>SCI-FI</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Love the books! Love the Bellarke combo. I love the way Bellamy looks at Clarke on the show<br><br>
					Wow. This was so 100000000000000 times better than book 1! Compared to this, 'The 100' felt boring.	<br><br>
					If you were waiting for Day 21 to bring forth the missing pieces—introduce a little spice into this relationship	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
The 100: Day 21
				</i>
			</h3>
			<p> No one has set foot on Earth in centuries -- until now.
It's been 21 days since the hundred landed on Earth. They're the only humans to set foot on the planet in centuries...or so they thought. Facing an unknown enemy, Wells attempts to keep the group together. Clarke strikes out for Mount Weather, in search of other Colonists, while Bellamy is determined to rescue his sister, no matter the cost. And back on the ship, Glass faces an unthinkable choice between the love of her life and life itself.
In this pulse-pounding sequel to Kass Morgan's The 100, secrets are revealed, beliefs are challenged, and relationships are tested. And the hundred will struggle to survive the only way they can -- together.
<br><br>
Twenty-one days after they land on Earth, the 100 continue to face recurring attacks from an unknown enemy. Octavia has been missing since the fire. Wells tries to maintain morale, while Bellamy tries to find his sister. The 100 find an Earthborn girl, Sasha Walgrove, and hold her hostage. Sasha tells them that they have landed in the former state of Virginia, and that there are people from the Colony who arrived before the 100. Bellamy believes that Sasha's people are responsible for Octavia's disappearance and demands that Sasha reveal their location. Wells and Sasha bond, and Sasha helps Wells find food for the surviving colonists.
<br><br>
In space, the people of the Colony fight to get into their drop ships as the space station's life support begins to fail; Clarke and Wells' friends, Glass and Luke, are among the people desperately trying to get to Earth. However, they find themselves at the mercy of Vice Chancellor Rhodes, who is willing to kill to get into one of the dropships.
<br><br>
Sasha leads Clarke and Bellamy to a colony beneath the ruins of Mount Weather Emergency Operations Center. There, they meet her father, Max Walgrove, who is the leader of the colony. Octavia is at Mount Weather, having been rescued by Max and his people from a group of renegades. These renegades are responsible for the attacks on the 100. Max and his people promise that they will continue helping the 100, and will provide further support once the rest of the Colony arrives. At this point, they find dropships from the Colony falling from the sky.<br><br>
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="homecoming.php"><img src="images/homecoming.jpg" alt="img"></a>
					</li>
					<li>
						<a href="rebellion.php"><img src="images/rebellion.jpg" alt="img"></a>
					</li>
					<li>
						<a href="stranger.php"><img src="images/stranger.jpg" alt="img"></a>
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
$title="The 100: Day 21";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
