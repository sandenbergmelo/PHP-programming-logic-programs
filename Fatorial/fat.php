<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title>Fatorial - PHP</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php

		$n = $_GET['n'] ?? 0;
		$f = 1;
		
		for($c = $n; $c > 1; $c--) {
			$f *= $c;
		}
		
		echo "<h1>$n<span style='color: #f00;'>!</span> = $f</h1>\n";
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
