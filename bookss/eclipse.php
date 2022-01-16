<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eclipse</title>
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
				<img src="images/eclipse.jpg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/romance/Eclipse.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/romance/Eclipse.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../romance.php"><p>Romance</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p> Eclipse, just like Twilight and New Moon, is a surprisingly good read. The book didn’t feel like it was over 600 pages long,<br><br>
					When Bella is torn between Edward and Jacob, while Edward is her world, Jacob is likewise her savior. So who will she choose ?	<br><br>
					Stephenie Meyer should be sending handwritten thank-you notes to every sorry teenager	<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 Eclipse
				</i>
			</h3>
			<p> The story begins with Seattle, Washington being plagued by a string of unsolved murders, which Edward Cullen suspects is caused by a new-born vampire with an uncontrollable thirst for human blood. As Edward and Bella apply to colleges, Bella tells Edward she wants to visit her friend, Jacob Black, a Quileute Native American who, like some other tribe members, can shape shift into a wolf. Edward worries for Bella's safety, but she assures him that neither Jacob nor the wolf pack would harm her. During one visit, Jacob tells Bella that he is in love with her; he wants her to choose him over Edward. Bella tells Jacob she considers him only as a friend.
<br><br>
Meanwhile, Alice Cullen has a vision that the vampire Victoria has returned to Forks. Victoria seeks to kill Bella to avenge her mate, James' death. Alice takes Bella to the Cullen house for a sleepover. Bella learns about Rosalie's past that led to her eventual transformation to a vampire and why she treasures humanity. Bella is determined to become a vampire, but eventually agrees to reconsider her decision. A few days later, Edward proposes to Bella. Despite harboring an aversion to marriage, Bella accepts on condition Edward will make love to her while she is still human.
<br><br>
The Cullens soon realize that the Seattle murders are being committed by an "army" of newborn vampires controlled by Victoria. The Cullens join forces with the wolf pack to combat this threat, after their longtime allies, the Denali Coven, refuse to help them. As everyone prepares for battle, Edward, Bella, and Jacob camp in the mountains to stay hidden during the battle. Seth Clearwater, a young wolf pack member, later joins them to wait out the fight.

			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="breakingdawn.php"><img src="images/breakingdawn.jpg" alt="img"></a>
					</li>
					<li>
						<a href="midnightsun.php"><img src="images/midnightsun.jpg" alt="img"></a>
					</li>
					<li>
						<a href="faultstars.php"><img src="images/fault.jpg" alt="img"></a>
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
$title="Eclipse";	
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
