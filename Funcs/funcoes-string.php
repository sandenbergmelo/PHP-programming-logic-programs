<!-- List of PHP functions and their examples for handling strings -->

<?php
	
	echo ; // Escreve na tela
	// Pode ser substituido por
	print();
	
	// Exemplo
	function ola() {
		
		echo "<h1>Olá, Mundo</h1>";
	}
	
?>

<?php
	
	printf(); // Escreve um texto já com formatação
	// Opções
	// %d - Valor decimal (positivo ou negativo)
	// %u - Valor decimal sem sinal (apenas positivo)
	// %s - String
	// %f - Valor Real
	
	// Exemplo!
	function mostraPreco() {
		
		$produto = "Leite";
		$precoL = 4.5;
		
		printf("O preço do %s é de %.2f", $produto, $precoL);
	}
?>

<?php
	
	print_r(); // Mostra detalhes de variáveis (principalmente vetores)
	// Útil para testes
	// Pode ser substituido por:
	var_dump();
	var_export();
	
	
	// Exemplo!
	function mostraVetor() {
		
		echo "<pre>";
		
		$v = array(6,8,5,9,2,3,15,957,648,58,2,6);
		
		print_r($v);
		echo "<br/><br/>";
		var_dump($v);
		echo "<br/><br/>";
		var_export($v);
		
		echo "</pre>";
	}
?>

<?php
	
	wordwrap(); // Faz quebra de linhas
	
	// Exemplo!
	function txtG() {
		
		$txt = "Aqui temos um texto gigante que vai ser usado para mostrar o funcionamento da função wordwrap(); Accusamus qui qui. Molestiae ut veritatis. Nostrum consectetur iusto amet reiciendis ut nostrum facere. Reprehenderit eum at voluptatem est saepe. Sint explicabo quaerat voluptas blanditiis. Aut velit autem omnis quia modi aut porro magnam velit. Est deserunt deleniti saepe. Quasi molestiae ea rerum et delectus sit aut facere.";
		$txtF = wordwrap($txt, 20, "<br/>\n", false);
		
		echo $txtF;
		
	}
?>

<?php
	
	strlen(); // Pega o tamanho de uma variável
	
	// Exemplo!
	function pegaTamanho() {
		
		$txt = "Texto de exemplo";
		$Ttxt = strlen($txt);
		
		echo $Ttxt;
	}
	
?>

<?php
	
	trim(); // Remove os espaços do começo e do final
	ltrim(); // Remove os espaços do começo
	rtrim(); // Remove os espaços do final
	
	// Exemplo!
	function reparaNome() {
		
		$nome = "   Sandenberg Ferreira Melo   ";
		echo strlen($nome) . "<br/><br/>";
		
		$novoNome = trim($nome);
		
		echo strlen($novoNome);
	}
	
?>

<?php
	
	str_word_count(); // Verifica a quantidade de palavras
	// Opções
	// 0 - Pega a quantidade de palabras
	// 1 - Coloca cada palavra em uma posição de um Array
	// 2 - Coloca cada palavra em uma posição de um Array de acordo com a posição das palavras na string
	
	// Exemplo!
	function armWords() {
		
		$txt = "Testando mais uma função em PHP";
		$txt2 = str_word_count($txt, 1);
		
		print_r($txt2);
	}
	
?>

<?php
	
	explode(); // Quebra uma string e armazena em um vetor
	
	// Exemplo!
	function quebraString() {
		
		$txt = "Ja tô de saco cheio de testar tanta coisa";
		$vetor = explode(" ", $txt);
		
		echo "<pre>";
		
		print_r($vetor);
		
		echo "</pre>";
	}
	
?>

<?php
	
	str_split(); // Quebra cada letra de uma string e coloca em um vetor
	
	// Exemplo!
	function quebraLetra() {
		
		$txt = "Maria";
		$vetor = str_split(txt);
		
		echo "<pre>";
		
		print_r($vetor);
		
		echo "</pre>";
	}
	
?>

<?php
	
	implode(); // Junta os contúdos de um vetor
	// Pode ser sibstituida por:
	join();
	
	// Exemplo!
	function juntaVetor() {
		
		$vetor[0] = "Texto";
		$vetor[1] = "de";
		$vetor[2] = "Exemplo";
		
		$txt = implode(" ", $vetor);
		echo $txt;
	}
	
?>

<?php
	
	chr(); // Mostra a letra do código
	
	// Exemplo!
	function mostraLetra() {
		
		$c = chr(99);
		$C = chr(67);
		
		echo "A letra do código 99 é $c <br/>";
		echo "A letra do código 67 é $C";
	}
	
?>

<?php
	
	ord(); // Mostra o código da letra
	
	// Exemplo!
	function mostraCod() {
		$c = "c";
		$C = "C";
		
		$cc = ord($c);
		$CC = ord($C);
		
		echo "A letra $c tem o códico $cc <br/>";
		echo "A letra $C tem o códico $CC";
		
	}
	
?>

<?php
	
	strtolower(); // Deixa uma string em letras minusculas
	
	// Exemplo!
	function minusculas() {
		$t = "São Paulo";
		$td = strtolower($t2);
		
		echo "O único time brasileiro que tem 3 mundiais é o $td";
	}
	
?>

<?php
	
	strtoupper(); // Deixa todas as letras de uma string maiusculas
	
	// Exemplo!
	function maiusculas() {
		
		$t = "São Paulo";
		$tU = strtoupper($t);
		
		echo "O único time brasileiro que tem 3 mundiais é o $tU";
	}
	
?>

<?php
	
	ucfirst(); // Deixa a primeira letra da primeira palavra de um string em maiuscula
	
	// Exemplo!
	function maifirst() {
		
		$t = "são paulo";
		$t2 = ucfirst($t);
		
		echo "O único time brasileiro a ter 3 mundiais é o $t2";
	}
	
?>

<?php
	
	ucwords(); // Deixa a primeira letra de todas as palavras de uma string em maiusculo
	
	// Exemplo!
	function maiwords() {
		
		$t = "são paulo";
		$t2 = ucwords($t2);
		
		echo "O único time brasileiro que tem 3 mundiais é o $t2";
	}
	
?>

<?php
	
	strrev(); // Inverte a ordem das letras de uma string
	
	// Exemplo
	
	function tudoIgual() {
		
		$txt = "anotaram a data da maratona";
		
		print(strrev($txt));
	}
	
?>

<?php
	
	strpos(); # Mostra a posição de um texto em uma string
	
	# Exemplo!
	
	function posicao() {
		
		$txt = "Aprendendo PHP";
		$p = strpos($txt, "PHP");
		
		print("$txt <br/><br/>");
		print("O texto PHP está na posição $p do texto $txt");
	}
?>

<?php
	
	stripos(); # Mostra a posição de um texto em uma string ignorando a caixa da letra
	
	# Exemplo!
	
	function posicao() {
		
		$txt = "Aprendendo PHP";
		$p = stripos($txt, "php");
		
		print("$txt <br/><br/>");
		print("O texto php está na posição $p do texto $txt");
	}
	
?>

<?php
	
	substr_count(); # Mostra quantas veses um determinado texto foi repido em uma string
	
	# Exemplo!
	function contaVeses() {
		
		$txt = "PHP PHP PHP PHP PHP PHP PHP";
		$v = substr_count($txt);
		
		echo "A sigla PHP se repitiu $v veses";
	}
	
?>

<?php
	
	str_pad(); # Faz com que uma string fique com determibado tamanho
	
	# opções
	STR_PAD_LEFT # Aumenta na esquerda
	STR_PAD_RIGHT # Aumenta na direita
	STR_PAD_CENTER # Aumenta proporcionalmente na esquerna e na direita
	
	# Exemplo!
	function completa() {
		
		$txt = "É muita função!";
		$saco = str_pad($txt, 35, " ", STR_PAD_CENTER);
		
		print($saco);
	}
	
?>

<?php
	
	str_repeat(); # Repete uma determinada string
	
	# Exemplo!
	function petRepete() {
		
		$php = str_repeat("PHP ", 5);
		$linha = str_repeat("-", 20);
		
		echo "$php <br/>";
		echo "$linha";
	}
?>
<?php
	
	str_replace(); # Substitui um texto de uma string por outra coisa
	str_ireplace(); # Faz o mesmo do anterior ignorando a caixa das letras
	# Exemplo
	function muda() {
		
		$O = "Gosto de Oppais. Oppais sãp legais!!";
		$l = str_replace("Oppais", "Lolis", $O);
		
		print($l);
	}
	
?>
