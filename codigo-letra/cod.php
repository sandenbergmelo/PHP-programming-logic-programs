<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title>Código da letra - PHP</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php
		
		$car = $_GET["l"] ?? 'a';
		
		$c = ord($car);
		
		if($car != " ") {
			echo "<h2>O código do Caractere <span class='c'>$car</span> é: <span class='c'>$c</span></h2>\n";
		}
		else {
			echo "<h2>O código do Caractere <span class='c'>Espaço</span> é: <span class='c'>$c</span></h2>\n";
		}
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
