<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title>Calculadora - PHP</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php
		
		$a = $_GET['a'];
		$b = $_GET['b'];
		$op = $_GET['op'];
		
		switch($op) {
			
			case 1:
				$r = $a + $b;
				$txt = "$a + $b = $r";
				break;
			
			case 2:
				$r = $a - $b;
				$txt = "$a - $b = $r";
				break;
			
			case 3:
				$r = $a * $b;
				$txt = "$a x $b = $r";
				break;
			
			case 4:
				$r = $a / $b;
				$txt = "$a / $b = $r";
				break;
			
			case 5:
				$r = pow($a, $b);
				$txt = "$a<sup>$b</sup> = $r";
				break;
			
			case 6:
				$r = $a % $b;
				$txt = "O resto da divisão $a / $b = $r";
				break;
			
			default:
				$txt = "<span style='color: #606060;'>Indefinido!</span>";
			
		}
		
		echo "<h1>$txt</h1>\n";
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
