<?php
	$firstnumber = 0;
	$secondnumber = 0;
	$ergebnis = 0;
	$name = "";	

	if(isset($_POST['firstnumber'])){
		$firstnumber = $_POST['firstnumber'];
	}
	if(isset($_POST['secondnumber'])){
		$secondnumber = $_POST['secondnumber'];
	}
	if(isset($_POST['name'])){
		$name = $_GET['name'];
	}
	
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST">
		<input type="text" name="firstnumber">
		<input type="text" name="secondnumber">	
		<input type="submit">
	</form>

	<?php
		$ergebnis = $firstnumber * $secondnumber;
		echo "<h1>Das Ergebnis ist:".$ergebnis."</h1>";	
	?>

</body>
</html>