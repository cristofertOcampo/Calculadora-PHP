<?php
if($_POST){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operador = $_POST["operador"];

if ($operador == "suma") {
    $resultado = $num1 + $num2;
} elseif ($operador == "resta") {
    $resultado = $num1 - $num2;
} elseif ($operador == "multiplicacion") {
    $resultado = $num1 * $num2;
} elseif ($operador == "division") {
    $resultado = $num1 / $num2;
}

echo "El resultado es: " . $resultado;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./calculadora.css">
</head>
<body>

<div class="calculator">
		<form action="calculadora.php" method="post">
			<input type="text" name="num1" placeholder="Número 1">
			<input type="text" name="num2" placeholder="Número 2">
			<select name="operador">
				<option value="suma">+</option>
				<option value="resta">-</option>
				<option value="multiplicacion">*</option>
				<option value="division">/</option>
			</select>
			<input type="submit" name="calcular" value="Calcular">
		</form>
	</div>
    
</body>
</html>