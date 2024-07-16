<DOCTYPE html>
<html lang="en">
<head>
    <title>Embedded PHP : EVEN OR ODD</title>
</head>
<body>
    <h1>
         <?php 
         echo "Un número es par cuando al dividirlo por 2 el residuo es cero.";
         echo "<br>";
         ?>
    </h1>

    <?php

$number = 11; // Debo modificar este ejercicio para que el usuario ingrese el número por pantalla
$residuo = -1;

$residuo = $number % 2;

if($residuo == 0) {
    echo "el número " . $number . " es par";
} else {
    echo "el número " . $number . " es impar";
}

?>
</body>
</html>