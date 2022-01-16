<?php
session_start();
include ("connection.php");
if($_SESSION['add'])
{
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wrinkled Pages</title>
<link href="css/indexx.css" type="text/css" rel="stylesheet">
</head>

<body>
	<div class="background">
		<div class="leftcon">
			<h2>Wrinkled Pages</h2>
			<div class="menu">
				<ul>
					<li>
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="about.php">ABOUT</a>
					</li>
					<li>
						<a href="discover.php">DISCOVER</a>
					</li>
					<li>
						<a href="topchart.php">RECOMMENDATIONS</a>
					</li>
					<li>
						<a href="settings.php">MY ACCOUNT</a>
					</li>
				</ul>
			</div>
			<div class="member">

				<p><a href="logout.php" class="signup">Log Out</a></p>
			</div>
		</div>
		<div class="rightcon">
			<div class="bookscon">
				<h2>TRENDING</h2>
				<div class="book1">
					<a href="bookss/thesatanicbible.php"><img src="images/TheSatanicBible.jpg"></a>
					<h4>The Satanic Bible</h4>
					<p><b>AUTHOR:</b><br>Anton Szandor LaVey</p>
					<a class="readm" href="bookss/thesatanicbible.php">READ MORE.</a>
				</div>
				<div class="book1">
					<a href="bookss/hpdeathlyhallows.php"><img src="images/hpdeathlyhallows.jpg"></a>
					<h4>Harry Potter And The Deathly Hallows</h4>
					<p><b>AUTHOR:</b><br>J.K. Rowling</p>
					<a class="readm" href="bookss/hpdeathlyhallows.php">READ MORE.</a>
				</div>
				<div class="book1">
					<a href="bookss/ikagi.php"><img src="images/ikagi.jpg"></a>
					<h4>Ikigai</h4>
					<p><b>AUTHOR:</b><br>Francesc Miralles</p>
					<a class="readm" href="bookss/ikagi.php">READ MORE.</a>
				</div>
			</div>
			<div class="genrecon">
				<h2>GENRES:</h2>
				<div class="genre1">
				<div class="genre">
					<a href="fantasy.php"><img src="images/fantasy.png"><p><b>Fantasy</b></p></a>
				</div>
				<div class="genre">
					<a href="mystery.php"><img src="images/mystery.png"><p><b>Mystery</b></p></a>
				</div>
				<div class="genre">
					<a href="romance.php"><img src="images/romance.png"><p><b>Romance</b></p></a>
				</div>
				</div>
				<div class="genre1">
				<div class="genre">
					<a href="scifi.php"><img src="images/scifi.png"><p><b>Sci-Fi</b></p></a>
				</div>
				<div class="genre">
					<a href="thriller.php"><img src="images/thriller.png"><p><b>Thriller</b></p></a>
				</div>
				<div class="genre">
					<a href="selfhelp.php"><img src="images/selfhelp.jpg"><p><b>Self-Help</b></p></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php }
else {
Header("location:logout.php");
} ?>
