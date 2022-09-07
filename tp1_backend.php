<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pregunta 1</h1>
        
        echo "Hola mundo";

    <br>
    <hr>

    <H1>Pregunta 2</H1>

        <?php
    
        $conversacion = "Hola mundo";

        echo $conversacion;

        ?>

    <br>
    <hr>

    <h1>Pregunta 3 - suma </h1>
        
        <?php
        $cebollas = 40;
        $zapallos = 20;
        echo $cebollas + $zapallos;

        ?>

    <br>
    <h1>Pregunta 3 - resta </h1>
        
        <?php
        echo $cebollas - $zapallos;
        ?>

    <br>
    <h1>Pregunta 3 - multiplicacion </h1>
        
        <?php
        echo $cebollas * $zapallos;
        ?>  

    <br>
    <h1>Pregunta 3 - division entera </h1>
        
        <?php
        echo $cebollas / $zapallos;
        ?>  

    <br>
    <h1>Pregunta 3 - resto division entera </h1>
        
        <?php
        echo $cebollas % $zapallos;
        ?>  

    <br>
    <hr>
    
    <h1>Pregunta 4</h1>
        <?php
        $fahrenheit = 1.8;
        $celsius = 20;
        $numero = 32;

        echo $fahrenheit * $celsius + $numero;
        ?>

    <br>
    <hr>
    <h1>Pregunta 5 - perimetro</h1>
        <?php
        $base = 18 * 2;
        $altura = 12 * 2;

        echo $base + $altura;
        ?>

    <h1>Pregunta 5 - area</h1>
        <?php
        $base = 18;
        $altura = 12;

        echo $base * $altura;
        ?>

    <br>
    <hr>
    
    <h1>Pregunta 6 - perimetro</h1>
        <?php
        $pi = 3.1416 * 2;
        $radio = 30;

        echo $pi * $radio;
        ?>

    <h1>Pregunta 6 - area</h1>
        <?php
        $perimetro = 188.496;
        $radio= 30;

        echo $perimetro * $radio / 2;
        ?>





</body>
</html>