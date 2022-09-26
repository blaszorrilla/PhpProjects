<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condicional IF</title>
</head>
<body>
	<h1>Condicional IF</h1>
	<p>Una sentencia if en  se utiliza para evaluar una expresión condicional: si se cumple la condición (es verdadera), ejecutará un bloque de código. Si es falsa, es posible ejecutar otras sentencias.</p>
		<?php
		$a = 8;
		$b = 3;
		echo "Valor de a: ",$a," y el valor de b:",$b,"<br>";
		if ($a<$b)
		{
		echo "a es menor que b";
		}
		else
		{
		echo " a no es menor que b";
		}
	?>
</body>
</html>