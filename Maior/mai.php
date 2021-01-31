<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php
		
		$a = $_GET['a'];
		$b = $_GET['b'];
		
		if($a > $b) {
			$res = "$a é maior que $b";
		}
		elseif($a == $b) {
			$res = "$a é igual a $b";
		}
		else {
			$res = "$b é maior que $a";
		}
		
		echo "<h1>$res.</h1>";
		
	?>
</body>
</html>
