<?php 
$input1="";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Formulario</title>
 </head>
 <body>
 	<form action="" method="get"> <!-- Definimos el metodo get-->
 		<input type="text" name="input1" placeholder="Introduce tu nombre">
 		<input type="password" name="input2" placeholder="Introduce una contraseña">
 		<input type="submit" name="input3">
 	</form>
 	<?php 
 		if(isset($_GET['input1']) and isset($_GET['input2'])){
 			$input1=$_GET['input1'];
 			echo "Usuario: ".$input1;
 			echo "<br>";

 			$input2=$_GET['input2'];
 			echo "Contraseña: ".$input2;
 			echo "<br>";
 		}else{
 			echo "No existe ningun dato introducido en el campo";
 		}

 	 ?>
 </body>
 </html>