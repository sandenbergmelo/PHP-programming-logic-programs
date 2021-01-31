<?php
	
	function soma($a, $b) {
		$s = $a + $b;
		return $s;
	}
	
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];
	
	$r = soma($n1, $n2);
	
	echo "A soma entre $n1 e $n2 vale $r";
?>
