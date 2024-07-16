<DOCTYPE html>
<html lang="en">
<head>
    <title>Embedded PHP</title>
</head>
<body>
    <h1>
         <?php 
         echo "Hello, world!";
         echo "<br>";
         ?>
    </h1>

    <?php // abrimos sección de código PHP dentro del documento HTML : entiendo que mi index debe tener extensión PHP, no HTML.

    // Estoy trasteando con lo que explican en este enlace : https://dev.to/educative/php-tutorial-get-started-with-php-from-scratch-f0n

    /*
    DEBERES :
    1. Terminar el enlace anterior, leer la parte de GIT y hacer la Primera Entrega
    https://rogerdudler.github.io/git-guide/
    https://stackoverflow.com/questions/22724921/do-i-need-to-do-git-init-before-doing-git-clone-on-a-project
    En la entrega se pide hacer control de versiones (commits) que puede hacerse por VS Code o por consola (Terminal) :
    https://code.visualstudio.com/docs/sourcecontrol/overview
    IMPORTANTE : BitBucket es especial para código Python
    2. Ejercicio evenORodd del enlace anterior e intentar también el de número primo
    3. Continuar con la parte de HTML-CSS
    */

    // Debería hacer este otro : https://www.w3schools.com/php/default.asp

    /*
    mysqli : investigar... Rubén habló de ello
    Leer las "noticias de la emana" en Discord --recursos--#php fecha 2024 07 16 @ 11:04
    Sobre los line braks : https://www.delftstack.com/es/howto/php/php-echo-line-break/
    */

    $myName = "My name is Frank.";
    $startText = " I have ";
    $age = 54;
    $endText = " years old.";
    echo $myName;
    echo "<br>";
    echo $startText;
    echo $age;
    echo $endText;
    echo "<br>";


    $foo = array(1, 2, 3); // An array of integers created using array function
    echo $foo[0] , "<br>";
    echo $foo[1] , "<br>";
    echo $foo[2] , "<br>";

    $usuario1 = array();
    $usuario1["nombre"] = "Frank";
    $usuario1["apellido"] = "Pulido";
    $usuario1["edad"] = 54;
    echo $usuario1["nombre"];
    echo " ";
    echo $usuario1["apellido"] , "<br>";
    echo "Edad : ";
    echo $usuario1["edad"];
    echo "<br>";

    echo nl2br("Primera línea \n Segunda Línea \n Tercera Línea \n");
    
    echo "<br>" . "<br>";
    $a = 18;
    $b = 4;
    echo "Vamos a operar con una calculadora. Usaremos los operandos " . $a . " y " . $b . " : ";
    echo "<br>";

    echo "$a + $b = " . ($a + $b) . "<br>"; //addition
    echo "$a - $b = " . ($a - $b) . "<br>"; //subtraction
    echo "($a * $b) = " . ($a * $b) . "<br>"; //multiplication
    echo "$a / $b = " . ($a / $b) . "<br>"; //division
    echo "$a % $b = " . ($a % $b) . "<br>"; //modulus

    echo "<br>" . "<br>";

    if (($a + $b) > (2 * ($a - $b))) {
        echo "La suma de los operandos es más del doble de la diferencia";
    } else {
        echo "El residuo de dividir la suma de los operandos (" . ($a + $b) . ") entre su diferencia (" . ($a - $b) . ") es de : " . ($a + $b)%($a - $b);
    }

    echo "<br>" . "<br>";

     // A continuación cerramos sección del documento con código PHP dentro de HTML
    ?>
</body>
</html>