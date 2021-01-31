<?php
	
	function soma() {
		$p = func_get_args();
		$t = func_num_args();
		$s = 0;
		
		for($i = 0; $i < $t; $i++) {
			$s += $p[$i];
		}
		return $s;
	}
	
	$r = soma(2,2,2,2,3,3,4,5,65,6,7,78,9);
	
	echo "<h1>$r</h1>";
?>
