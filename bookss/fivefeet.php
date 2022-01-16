<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Five Feet Apart</title>
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
				<img src="images/fivefeet.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Five-Feet-Apart.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Five-Feet-Apart.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> I mostly picked this up because i knew the characters had cystic fibrosis. It was a solid read, the story was kind of slow<br><br>
				Being subjected to mental and emotional pain could also be definition of a type of masochism		<br><br>
					I’d seen mixed reviews regarding this book. Some loved it; pegged it as the next Fault in Our Stars	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Five Feet Apart
				</i>
			</h3>
			<p>Can you love someone you can never touch?
<br><br>
Stella Grant likes to be in control—even though her totally out of control lungs have sent her in and out of the hospital most of her life. At this point, what Stella needs to control most is keeping herself away from anyone or anything that might pass along an infection and jeopardize the possibility of a lung transplant. Six feet apart. No exceptions.
<br><br>
The only thing Will Newman wants to be in control of is getting out of this hospital. He couldn’t care less about his treatments, or a fancy new clinical drug trial. Soon, he’ll turn eighteen and then he’ll be able to unplug all these machines and actually go see the world, not just its hospitals.
<br><br>
Will’s exactly what Stella needs to stay away from. If he so much as breathes on Stella she could lose her spot on the transplant list. Either one of them could die. The only way to stay alive is to stay apart. But suddenly six feet doesn’t feel like safety. It feels like punishment.
<br><br>
What if they could steal back just a little bit of the space their broken lungs have stolen from them? Would five feet apart really be so dangerous if it stops their hearts from breaking too?

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="50shadesgrey.php"><img src="images/50shadesgrey.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesdarker.php"><img src="images/50shadesdarker.jpg" alt="img"></a>
					</li>
					<li>
						<a href="50shadesfreed.php"><img src="images/50shadesfreed.jpg" alt="img"></a>
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
$title="Five Feet Apart";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
