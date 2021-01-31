<?php
	
	count(); # Pega o tamanho do vetor
	
	# Exemplo!
	function mostraT() {
		
		$vetor = array();
		
		for($i = 0; $i <= 10; $i++) {
			
			$vetor[$i] = (i + i);
		}
		
		$T = count($vetor);
		
		echo "O tamnho do vetor é $T";
	}
?>

<?php
	
	array_push(); # Coloca um novo elemento no final de um array
	
	# Exemplo!
	
	function insertEnd() {
		
		$vetor = array();
		
		for($i = 0; $i <= 10; $i++) {
			
			$vetor[$i] = (i + i);
		}
		
		print_r($vetor);
		
		array_push($vetor, 8);
		
		print_r($vetor);
	}
?>

<?php
	
	array_pop(); # Elimina o último elemento de um vetor
	
	# Exemplo!
	function tiraEnd() {
		
		$vetor = array();
		
		for($i = 0; $i <= 10; $i++) {
			
			$vetor[$i] = (i + i);
		}
		
		print_r($vetor);
		
		array_pop($vetor);
		
		print_r($vetor);
	}
	
?>

<?php
	
	array_unshift(); # Insere elementos no início de um array
	
	# Exemplo!
	function colocaFirst() {
		
		$vetor = array();
		
		for($i = 0; $i <= 10; $i++) {
			
			$vetor[$i] = (i + i);
		}
		
		print_r($vetor);
		
		array_unshift($vetor, "A");
		
		print_r($vetor);
	}
	
?>

<?php
	
	array_shift(); # Remove o primeiro elemento de um array
	
	# Exemplo!
	function tiraFirst() {
		
		$vetor = array();
		
		for($i = 0; $i <= 10; $i++) {
			
			$vetor[$i] = (i + i);
		}
		
		print_r($vetor);
		
		array_shift($vetor);
		
		print_r($vetor);
	}
	
?>

<?php
	
	sort(); # Ordena os elementos de um vetor
	
	# Opções:
	sort(); # Ordem crescente
	rsort(); # Ordem decrescente
	asort(); # Ordem crescente associativa (valores e índices)
	arsort(); # Ordem decrescente associativa (valores e índices)
	ksort(); # Ordem crescente das chaves (índices)
	krsort(); # Ordem decrescente das chaves (índices)
	
	# Exemplo
	function ordena() {
		
		$v = array(6,1,6,291,63,9,4);
		
		print_r($v);
		sort($v);
		print_r($v);
	}
	
?>
