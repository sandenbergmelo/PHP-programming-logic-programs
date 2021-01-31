 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="UTF-8" />
	<title>Teste das Pernas - PHP</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php
		
		$p = $_GET["p"] ?? 2;
		
		switch($p) {
			
			case 0:
				$tipo = "uma Bola";
				break;
			
			case 1:
				$tipo = "um Saci";
				break;
			
			case 2:
				$tipo = "um Bípede";
				break;
			
			case 3:
				$tipo = "um Tripé";
				break;
			
			case 4:
				$tipo = "um Quadrúpede";
				break;
			
			case 6:
				$tipo = "uma Formiga";
				break;
			
			case 8:
				$tipo = "uma Aranha";
				break;

			case 100:
				$tipo = "uma Centopeia";
				break;
			
			default:
				$tipo = "um ET";
			
		}
		
		echo "<h1>Você é $tipo.</h1>\n";
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
