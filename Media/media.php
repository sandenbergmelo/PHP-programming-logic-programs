<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo"/>
	<meta charset="UTF-8"/>
	<title>Média - PHP</title>
	<link rel="stylesheet" href="estilo.css"/>
</head>
<body>
	<?php
		
		$a = $_GET["a"];
		
		$n[1] = $_GET["n1"];
		$n[2] = $_GET["n2"];
		$n[3] = $_GET["n3"];
		$n[4] = $_GET["n4"];
		
		define('QN', count($n));
		
		$m = (($n[1] + $n[2] + $n[3] + $n[4]) / QN);
		
		if($m >= 6) {
			$s = "<strong><span style='color: #0f0;'>Aprovado!</strong></span><br/>";
		}
		elseif($m < 60) {
			$s = "<strong><span style='color: #f00;'>Reprovado!</strong></span><br/>";
		}
		else {
			$s = "<strong><span style='color: #606060;'>Indefinido!</strong></span><br/>";
		}
		
		printf("<span>O aluno %s tem média %.1f; &nbsp </span> &nbsp ", $a, $m);
		print("$s\n");
		
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)" />
</body>
</html>
