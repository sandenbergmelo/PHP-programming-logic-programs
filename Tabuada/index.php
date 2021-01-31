<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="author" content="Sandenberg Ferreira Melo"/>
	<meta charset="UTF-8"/>
	<title>Escolha</title>
	<link rel="stylesheet" href="estilo.css"/>
</head>
<body>
	<div id="tab">
		<form method="get" action="tabuada.php">
			<select id="nu" name="n">
				<?php
					
					for($c = 1; $c <= 10; $c++) {
						echo "<option>$c</option>";
					}
					
				?>
			</select>
			<input class="botao" type="submit" value="Tabuada"/>
		</form>
	</div>
</body>
</html>
