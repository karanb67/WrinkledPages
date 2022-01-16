<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fifty Shades of Grey</title>
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
				<img src="images/50shadesgrey.jpg">
			</div>
			</div>
			<div class="buttons">
			<a href="pdfs/romance/Fifty Shades of Grey.pdf" class="button"  target="_blank">Read Book</a><br><br><br>
			<a href="#" download="pdfs/romance/Fifty Shades of Grey.pdf" class="button" >Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> E.L. James read my review on this book and she loved it SO much, she decided to go ahead and write the book. Here is a word-for-word copy of our email exchange from that day.<br><br>
					This book is 5+ stars for me!! It is my favorite kind of story. You know what I mean...just so intense that the characters get so far under your skin that you can't stand to be away from them for any length of time	<br><br>
					I love the Fifty Shades trilogy! I've read this book so many times and each time I enjoy it as much as the last. 	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Fifty Shades of Grey
				</i>
			</h3>
			<p> Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. James. It became the first instalment in the Fifty Shades novel series that follows the deepening relationship between a college graduate, Anastasia Steele, and a young business magnate, Christian Grey. It is notable for its explicitly erotic scenes featuring elements of sexual practices involving BDSM (bondage/discipline, dominance/submission, and sadism/masochism). Originally self-published as an ebook and print-on-demand in June 2011, the publishing rights to the novel were acquired by Vintage Books in March 2012.
<br><br>
Fifty Shades of Grey has topped best-seller lists around the world. It has been translated into 52 languages, and set a record in the United Kingdom as the fastest-selling paperback of all time. Critical reception of the book, however, has tended towards the negative, with the quality of its prose generally seen as poor, while its portrayal of BDSM has been targeted for criticism from a variety of perspectives. Universal Pictures and Focus Features produced an American film adaptation, which was released on 13 February 2015, and also received unfavourable reviews even though it was a box office success.
<br><br>
The second and third volumes of the original trilogy, Fifty Shades Darker and Fifty Shades Freed, were published in 2012. The trilogy had sold over 150 million copies worldwide by October 2017. A version of the novel from Christian's point of view, Grey: Fifty Shades of Grey as Told by Christian, was published in June 2015 as the fourth book. Darker: Fifty Shades Darker as Told by Christian, published in November 2017, is the fifth book in the series

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="50shadesdarker.php"><img src="images/50shadesdarker.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesfreed.php"><img src="images/50shadesfreed.jpg" alt="img"></a>
					</li>
					<li>
						<a href="twilight.php"><img src="images/twilight.jpg" alt="img"></a>
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
$title="Fifty Shades of Grey";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
