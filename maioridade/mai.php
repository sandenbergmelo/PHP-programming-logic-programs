<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo" />
	<meta charset="UTF-8" />
	<title>Maioridade - PHP</title>
	<link rel="stylesheet" href="estilo.css" />
</head>
<body>
	<?php
		
		$nome = $_GET["n"] ?? "José";
		$ano = $_GET["a"] ?? 1996;
		$idade = (date("Y") - $ano);
		define('MAI', 18);
		
		if(($idade >= MAI) && ($idade < 70)) {
			$voto = "Voto obrigatório";
		}
		elseif(($idade >= 16) || ($idade >= 70)) {
			$voto = "Voto opcional";
		}
		elseif($idade < 16) {
			$voto = "Não vota";
		}
		else {
			$voto = "???";
		}
		
		
		function mai() {// I don't remember why I did this function
			//$idade = (date("Y") - ($_GET["a"] ?? 1996));
			
			if($idade >= MAI) {
				$mai = "É maior de idade";
			}
			else {
				$mai = "Não é maior de idade";
				
				$f = (MAI - $idade);
				if($f == 1) {
					$m = "Falta $f ano para atingir a maioridade;";
				}
				else {
					$m = "Faltam $f anos para atingir a maioridade;";
				}
			}
		}
		
		if($idade == 1) {
			$i = "Tem $idade ano;";
		}
		else {
			$i = "Tem $idade anos;";
		}
		
		echo "<h1>$nome;</h1>\n";
		
		echo "<h1>$i</h1>\n";
		
		echo "<h1>$mai;</h1>\n";
		
		echo "<h1>$m</h1>\n";
		
		echo "<h1>$voto.</h1>\n";
	?>
	<input class="botao" type="button" value="Voltar" onclick="history.go(-1)"/>
</body>
</html>
