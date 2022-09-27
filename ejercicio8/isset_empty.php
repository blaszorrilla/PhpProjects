<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Isset - empty</title>
</head>
<body>
	<p>La función isset() determina si una variable ha sido declarada y su valor no es NULO.<br>empty(): Determina si la variable tiene un valor vacío</p>
	<?php 
		$num1 = 7;
		$num2 = "";
		
		if(isset($num1)){
			echo "La variable existe y es: ".$num1."<br>";
		}else{
			echo "La variable no existe";
		}

		if(empty($num2)){
			echo "La variable esta vacía";
		}
	 ?>
</body>
</html>