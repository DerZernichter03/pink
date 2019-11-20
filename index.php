<?php
	$name = "";
	if(isset($_GET['name'])){
		$name = $_GET['name'];
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
		echo "<h1>Hallo ".$name."</h1>";
	?>
	<form>
		<input type="text" name="name">
	</form>
</body>
</html>
