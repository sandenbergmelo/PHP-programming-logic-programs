<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo"/>
	<meta charset="UTF-8"/>
	<title>Par ou Ímpar - PHP</title>
	<link rel="stylesheet" href="estilo.css"/>
</head>
<body>
	<?php
		
		$n = $_GET["n"] ?? 1;
		
		switch($n % 2) {
			
			case 0:
				$r = "<h1>O número $n é Par!</h1>";
				break;
			
			case 1:
				$r = "<h1>O número $n é Impar!</h1>";
				break;
			
			default:
				$r = "<h1>O número $n é ?</h1>";
			
		}
		
		echo "$r\n";
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
