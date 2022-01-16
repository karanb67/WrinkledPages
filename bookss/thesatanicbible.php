<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Satanic Bible</title>
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
				<img src="images/TheSatanicBible.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/selfhelp/satanic bible.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/selfhelp/satanic bible.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
			<a class="gen" href="../selfhelp.php"><p>Self-Help</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Libertarianism + YOLO + Nietzsche + black cloaks <br><br>
					The idea of worshipping Satan, even in the symbolic way that Lavey was into, seems completely retarded to me.<br><br>
					This was a fun read , but it did freak out my Christian brother when he saw it on my bookshelf.
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
				The Satanic Bible
				</i>
			</h3>
			<p> The Satanic Bible is composed of four books: The Book of Satan, The Book of Lucifer, The Book of Belial, and
				The Book of Leviathan.
				 	The Book of Satan challenges the Ten Commandments and the Golden Rule,
					and promotes Epicureanism. The Book of Lucifer holds most of the philosophy in The Satanic Bible,
				 	with twelve chapters discussing topics such as indulgence, love, hate, and sex.
				 	LaVey also uses the book to dispel rumors surrounding the religion.
				 	In The Book of Belial, LaVey details rituals and magic. He discusses the required mindset and focus for
					performing a ritual,
				  and provides instructions for three rituals: those for sex, compassion, or destruction. The Book of Leviathan provides
					four invocations for Satan, lust, compassion, and destruction.  <br><br>
					There have been both positive and negative reactions to The Satanic Bible.
					Criticism of The Satanic Bible stems both from qualms over LaVey's writing and disapproval of the content itself.
					LaVey has been criticized for plagiarizing sections, and
					accusations have been made that his philosophies are largely borrowed.
 					Attempts have been made to ban the book in schools, public libraries, and prisons,
  				though these attempts are somewhat rare<br><br>
 					LaVey explains his reasons for writing The Satanic Bible in a short preface.
  				He speaks skeptically about volumes written by other authors on the subject of magic
	 		 	. He tells that The Satanic Bible contains both truth and fantasy, and declares,
					"What you see may not always please you, but you will see!"<br><br>

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="subtleart.php"><img src="images/subtleart.png" alt="img"></a>
					</li>
					<li>
						<a href="12rules.php"><img src="images/12rules.jpg" alt="img"></a>
					</li>
					<li>
						<a href="everythingisfuked.php"><img src="images/everything.jpg" alt="img"></a>
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
$title="The Satanic Bible";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
