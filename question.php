<?php
$qst = array("Q_Arisa","Q_Saaya","Q_Aya","Q_Yukina","Q_Rinko","Q_Tae","Q_Kokoro","Q_Kanon","Q_Rimi","Q_Tomoe","Q_Michelle","Q_Hina","Q_Himari","Q_Hagumi","Q_Kasumi","Q_Kaoru","Q_Sayo","Q_Eve","Q_Ran");
$fld = $qst[array_rand($qst)];
$name = substr($fld,2);
?>

<html>
<head>
	<link rel="stylesheet" href="/stylesheets/arisachan.css">
	<link rel="stylesheet" href="/stylesheets/intro.css">
	<title>Answer Wisely</title>
</head>
<body>
	<div class="question"> 
		<img class="center-half" src="/<?php echo $fld;?>/question.jpg"/>
		<form action="checkans.php" method="POST">
			<input class="q1" name="<?php echo $name?>_A" type="image" src="/<?php echo $fld;?>/q0.jpg"/>
			<input class="q2" name="<?php echo $name?>_B" type="image" src="/<?php echo $fld;?>/q1.jpg"/>
			<input class="q3" name="<?php echo $name?>_C" type="image" src="/<?php echo $fld;?>/q2.jpg"/>
			<input class="q4" name="<?php echo $name?>_D" type="image" src="/<?php echo $fld;?>/q3.jpg"/>
		</form>

	</div>
	

</body>

</html>
