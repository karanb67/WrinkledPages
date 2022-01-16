<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Everything is F*cked: A Book About Hope</title>
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
				<img src="images/Everything.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/Everything Is Fucked .pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/Everything Is Fucked .pdf" class="button">Download</a>
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
				Something is very wrong with the world. It’s us. We have abandoned our quest for character in favour of one for happiness and we have created a world of diversions that give the illusion of freedom but in fact keep us docile and imprisoned.	<br><br>
					<br><br>
					<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
						Everything is F*cked: A Book About Hope
				</i>
			</h3>
			<p>
					We live in an interesting time. Materially, everything is the best it’s ever been—we are freer,
				healthier and wealthier than any people in human history. Yet, somehow everything seems to be irreparably
				and horribly f*cked—the planet is warming, governments are failing, economies are collapsing, and
				everyone is perpetually offended on Twitter. At this moment in history,
				when we have access to technology, education and communication our
				ancestors couldn’t even dream of, so many of us come back to an overriding feeling of hopelessness<br><br>
				 What’s going on? If anyone can put a name to our current malaise
				 and help fix it, it’s Mark Manson. In 2016, Manson published The
				 Subtle Art of Not Giving A F*ck, a book that brilliantly gave shape to
				 the ever-present, low-level hum of anxiety that permeates modern living.
				 He showed us that technology had made it too easy to care about the
				 wrong things, that our culture had convinced us that the world owed us something when it didn’t—and worst of all, that our modern and maddening urge to always find happiness only served to make us unhappier<br><br>
		 Now, in Everthing Is F*cked, Manson turns his gaze from the inevitable flaws within each individual self to the endless calamities taking place in the world around us. Drawing from the pool of psychological research on these topics, as well as the timeless wisdom of philosophers such as Plato, Nietzsche, and Tom Waits, he dissects religion and politics and the uncomfortable ways they have come to resemble one another. He looks at our relationships with money, entertainment and the internet, and how too much of a good thing can psychologically eat us alive.	<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="ikagi.php"><img src="images/ikagi.jpg" alt="img"></a>
					</li>
					<li>
						<a href="thealchemist.php"><img src="images/thealchemist.jpg" alt="img"></a>
					</li>
					<li>
						<a href="gettingthingsdone.php"><img src="images/gettingthingsdone.jpg" alt="img"></a>
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
$title="Everything is F*cked";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
