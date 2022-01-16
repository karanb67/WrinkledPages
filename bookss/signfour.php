<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Sign of the Four</title>
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
				<img src="images/signfour.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/The Sign of the Four.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/The Sign of the Four.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I read this with those scamps in the Non-crunchy Cool Classics group.
<br><br>
				It is difficult to think of many literary characters who have had anything like the huge impact that Sherlock Holmes 		<br><br>
					The only thing I don't appreciate about these tales is how weak the female characters are written	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Sign of the Four
				</i>
			</h3>
			<p> Yellow fog is swirling through the streets of London, and Sherlock Holmes himself is sitting in a cocaine-induced haze until the arrival of a distressed and beautiful young lady forces the great detective into action. Each year following the strange disappearance of her father, Miss Morstan has received a present of a rare and lustrous pearl. Now, on the day she is summoned to meet her anonymous benefactor, she consults Holmes and Watson
				<br><br>Set in 1888,The Sign of the Four has a complex plot involving service in India, the Indian Mutiny of 1857, a stolen treasure, and a secret pact among four convicts ("the Four" of the title) and two corrupt prison guards. It presents Holmes's drug habit and humanizes him in a way that had not been done in the preceding novel, A Study in Scarlet (1887). It also introduces Dr. Watson's future wife, Mary Morstan.
<br><br>
According to Mary, in December 1878, her father had telegraphed her upon his safe return from India and requested her to meet him at the Langham Hotel in London. When Mary arrived at the hotel, she was told her father had gone out the previous night and not returned. Despite all efforts, no trace was ever found of him. Mary contacted her father's only friend who was in the same regiment and had since retired to England, one Major John Sholto, but he denied knowing her father had returned. The second puzzle is that she has received six pearls in the mail from an anonymous benefactor, one per year since 1882, after answering an anonymous newspaper query inquiring for her. With the last pearl she received a letter remarking that she has been wronged and asking for a meeting. Holmes takes the case and soon discovers that Major Sholto had died in 1882 and that within a short span of time Mary began to receive the pearls, implying a connection. The only clue Mary can give Holmes is a map of a fortress found in her father's desk with the names of Jonathan Small, Mahomet Singh, Abdullah Khan and Dost Akbar.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="hound.php"><img src="images/hound.jpeg" alt="img"></a>
					</li>
					<li>
						<a href="valley.php"><img src="images/valley.jpg" alt="img"></a>
					</li>
					<li>
						<a href="beast.php"><img src="images/beast.jpg" alt="img"></a>
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
$title="The Sign of the Four";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
