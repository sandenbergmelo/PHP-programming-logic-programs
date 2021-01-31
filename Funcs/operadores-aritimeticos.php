<?php
	
	$n1 = $_GET['a']; // Ler o valor pelo método GET
	$n2 = $_POST['b']; // Ler o valor pelo método POST
	
	$soma = $n1 + $n2; // Soma
	$sub = $n1 - $n2; // Subtração
	$mul = $n1 * $n2; // Multiplicação
	$div = $n1 / $n2; // Divsão
	$mod = $n1 % $n2; // Módulo (Resto da divisão)
	
	$a = abs($n1); // Valor absoluto
	$pot = pow($n1, $n2); // Potenciação
	$rq = sqrt($n1); // Raiz quadrada
	$arr = round($n1); // Arredondar
	$arrc = ceil($n1); // Arredondar Pra cima
	$arrb = floor($n2); // Arredondar Pra baixo
	$inte = intval($n2); // Valor inteiro
	$cash = number_format($n1, 2, ",", "."); // Formato do valor
	
?>
