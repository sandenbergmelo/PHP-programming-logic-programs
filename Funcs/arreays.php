<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Vetores - PHP</title>
</head>
<body>
	<pre>
		<?php
			
			$n = array();
			
			for($i = 0; $i <= 10; $i++) {
				
				$n[$i] = ($i + 1);
			}
			
			foreach($n as $v) {
				
				echo "$v<br />";
			}
			
			print_r($n);
			
			
			unset($n[10]);
			
			foreach($n as $v) {
				
				echo "$v<br />";
			}
			
			print_r($n);
			
		?>
	</pre>
</body>
</html>
