<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bucle Do while</title>
</head>
<body>
	<p>El bucle do-while funciona de la misma manera que el bucle while, con la salvedad de que expresion se evalúa
al final de la iteracción. Las sentencias que encierran el bucle do-while, por tanto, se ejecutan como mínimo
una vez.</p>
	<?php
		$i = 0;
		do {
		echo "El valor de i es ", $i,"<br>"; $i++;
		} while( $i < 10 )
	?>
</body>
</html>