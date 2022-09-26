<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores de comparación</title>
</head>
<body>
	<h1>Ejemplo de operaciones de comparación en PHP</h1>
	<p>Los operadores de comparación permiten comparar dos valores, tal y como su nombre indica. En general, esto nos servirá para tomar decisiones</p>
	<ul>
		<li>== Comprueba si son iguales</li>
		<li>!= Comprueba si son distintos</li>
		<li>=== Comprueba si son iguales y de exactamente el mismo tipo</li>
		<li>!== Comprueba si son distintos o de distinto tipo</li>
		<li> <> Diferente (igual que !=)</li>
		<li>< Menor qué, comprueba si un valor es menor que otro</li>
		<li>> Mayór qué</li>
		<li><= Menor o igual</li>
		<li>= Mayor o igual</li>
	</ul>
	<table border="5">
    <caption><b>Operadores de Comparación</b></caption>
    <colgroup>

     <thead valign="middle">
      <tr valign="middle">
       <th colspan="1">Ejemplo</th>
       <th colspan="1">Nombre</th>
       <th colspan="1">Resultado</th>
      </tr>

     </thead>

     <tbody valign="middle">
      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a == $b</td>
       <td colspan="1" rowspan="1" align="left">Igual</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a es igual a $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a === $b</td>
       <td colspan="1" rowspan="1" align="left">Idéntico</td>
       <td colspan="1" rowspan="1" align="left">
        <b><tt>TRUE</tt></b> si $a es igual a $b, y son del mismo tipo. (A partir de PHP
        4)
       </td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a != $b</td>
       <td colspan="1" rowspan="1" align="left">Diferente</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a no es igual a $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a &lt;&gt; $b</td>
       <td colspan="1" rowspan="1" align="left">Diferente</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a no es igual a $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a !== $b</td>
       <td colspan="1" rowspan="1" align="left">No idénticos</td>
       <td colspan="1" rowspan="1" align="left">
        <b><tt>TRUE</tt></b> si $a no es igual a $b, o si no son del mismo
        tipo. (A partir de PHP 4)
       </td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a &lt; $b</td>
       <td colspan="1" rowspan="1" align="left">Menor que</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a es escrictamente menor que $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a &gt; $b</td>
       <td colspan="1" rowspan="1" align="left">Mayor que</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a es estrictamente mayor que $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a &lt;= $b</td>
       <td colspan="1" rowspan="1" align="left">Menor o igual que</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a es menor o igual que $b.</td>
      </tr>

      <tr valign="middle">
       <td colspan="1" rowspan="1" align="left">$a &gt;= $b</td>
       <td colspan="1" rowspan="1" align="left">Mayor o igual que</td>
       <td colspan="1" rowspan="1" align="left"><b><tt>TRUE</tt></b> si $a es mayor o igual que $b.</td>
      </tr>

     </tbody>
    </colgroup>

   </table>
</body>
</html>		