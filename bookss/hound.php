<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Hound of the Baskervilles</title>
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
				<img src="images/hound.jpeg">
			</div>
			</div>
			<div class="buttons">
				<a href="pdfs/mystery/The Hound of the Baskervilles.pdf" class="button" target="_blank">Read Book</a><br><br><br>
				<a href="#" download="pdfs/mystery/The Hound of the Baskervilles.pdf" class="button">Download</a>
			</div>
			<div class="genre">
				Genre:
				<a class="gen" href="../mystery.php"><p>Mystery</p></a>
			</div>
			<div class="leftdown">
				<h2>
					Reviews
				</h2>
				<p>  I can quite simply say that this is the best murder-mystery/detective novel that I have ever read<br><br>
					Really, Watson, you excel yourself,” said Holmes, pushing back his chair and lighting a cigarette	<br><br>
						<br><br>
				</p>
			</div>
		</div>
		<div class="right_container">
			<h3>
				<i>
			 The Hound of the Baskervilles
				</i>
			</h3>
			<p> Dr James Mortimer calls on Sherlock Holmes in London for advice after his friend Sir Charles Baskerville was found dead in the yew alley of his manor on Dartmoor in Devon. The death was attributed to a heart attack, but according to Mortimer, Sir Charles's face retained an expression of horror, and not far from the corpse the footprints of a gigantic hound were clearly visible. According to an old legend, a curse runs in the Baskerville family since the time of the English Civil War, when a Hugo Baskerville abducted and caused the death of a maiden on the moor, only to be killed in turn by a huge demonic hound. Allegedly the same creature has been haunting the manor ever since, causing the premature death of many Baskerville heirs. Sir Charles believed in the plague of the hound and so does Mortimer, who now fears for the next in line, Sir Henry Baskerville.
<br><br>
Even though he dismisses the curse story as nonsense, Holmes agrees to meet Sir Henry in London as soon as Sir Henry arrives from Canada, where he has been living. He is a young and jovial good-looking fellow, sceptical toward the grim legend and eager to take possession of Baskerville Hall, even though he has just found an anonymous note in the mail warning him to stay away from the moor. When someone shadows Sir Henry while he is walking down a street, however, Holmes asks Watson to go with the young man and Mortimer to Dartmoor, in order to protect Sir Henry and search for any clues about who is menacing his life.
<br><br>
The trio arrives at Baskerville Hall, an old and imposing manor in the middle of a vast park, managed by a butler and his wife the housekeeper. The estate is surrounded by the moor and borders the Grimpen Mire, where animals and humans can sink to death in quicksand. The news that a convict named Selden, a murderer, has escaped from the nearby Dartmoor Prison and is hiding in the nearby hills adds to the barren landscape and the gloomy atmosphere.
			</p>
			<div class="reldiv">
				<h3>
					Related Books:
				</h3>
				<ul>
					<li>
						<a href="valley.php"><img src="images/valley.jpg" alt="img"></a>
					</li>
					<li>
						<a href="beast.php"><img src="images/beast.jpg" alt="img"></a>
					</li>
					<li>
						<a href="longway.php"><img src="images/longway.jpg" alt="img"></a>
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
$title="The Hound of the Baskervilles";
$email=$_SESSION['add'];
	mysqli_query($con,"INSERT INTO record (`title`, `rt`,`lemail`) VALUES ('$title',Now(),'$email')");
 ?>
