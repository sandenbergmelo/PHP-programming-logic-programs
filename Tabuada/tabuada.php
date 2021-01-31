<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo"/>
	<meta charset="UTF-8"/>
	<title>Tabuada</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<div id="tab">
		<?php
			
			$n = $_GET["n"] ?? 1;
			
			echo "<h1>A tabuada de $n é: </h1>\n";
			
			for($i = 1; $i <= 10; $i++) {
				
				$r = $n * $i;
				
				echo "<h2>$n x $i = $r</h2>\n";
				
			}
			
		?>
	<input id="vol" class="botao" type="button" value="voltar" onclick="history.go(-1)" />
	</div>
</body>
</html>
