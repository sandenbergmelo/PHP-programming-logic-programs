<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta charset="UTF-8" />
	<title>Contagem - PHP</title>
</head>
<body>
	<?php
		
		$d = $_GET["d"] ?? 1;
		$a = $_GET["a"] ?? 10;
		$s = $_GET["s"] ?? 1;
		
		if($d < $a) {
			
			for($c = $d; $c <= $a; $c += $s) {
				echo "<h2>$c</h2>\n";
			}
		}
		elseif($d > $a) {
			
			for($c = $d; $c >= $a; $c -= $s) {
				echo "<h2>$c</h2>\n";
			}
		}
		elseif($a == $d) {
			echo "<h2>$a</h2>\n";
		}
		else {
			echo "<h1 style='color: #606060;'>indefinido</h1>\n";
		}
		
	?>
</body>
</html>
