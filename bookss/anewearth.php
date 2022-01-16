<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>A New Earth</title>
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
				<img src="images/newearth.jpeg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/A New Earth.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/A New Earth.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>
					This book is so amazing, I had to read it slow so I would absorb it all. It moved me to tears many times, so I had to stop a lot!	<br><br>
					This is a wonderful and very helpful book. Coming from a ACIM vantage point, it takes a little bit to adjust to his terminology, because Tolle uses words in a different way	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 A New Earth: Awakening to Your Life’s Purpose
				</i>
			</h3>
			<p>The highly anticipated follow-up to the 2,000,000 copy bestselling inspirational book, "The Power of Now"
With his bestselling spiritual guide "The Power of Now," Eckhart Tolle inspired millions of readers to discover the freedom and joy of a life lived ?in the now.? In "A New Earth," Tolle expands on these powerful ideas to show how transcending our ego-based state of consciousness is not only essential to personal happiness, but also the key to ending conflict and suffering throughout the world <br><br>
					 Tolle describes how our attachment to the ego creates the dysfunction that leads to anger, jealousy, and unhappiness, and shows readers how to awaken to a new state of consciousness and follow the path to a truly fulfilling existence. "The Power of Now" was a question-and-answer handbook. "A New Earth" has been written as a traditional narrative, offering anecdotes and philosophies in a way that is accessible to all. Illuminating, enlightening, and uplifting, "A New Earth" is a profoundly spiritual manifesto for a better way of life?and for building a better world.<br><br>
 					<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="thesatanicbible.php"><img src="images/TheSatanicBible.jpg" alt="img"></a>
					</li>
					<li>
						<a href="subtleart.php"><img src="images/subtleart.png" alt="img"></a>
					</li>
					<li>
						<a href="12rules.php"><img src="images/12rules.jpg" alt="img"></a>
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
$title="A New Earth";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
