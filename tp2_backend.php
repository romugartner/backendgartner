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
        
        <?php
        $positivo = 10;


        if ($positivo > 0) {
            echo "$positivo es un numero positivo";
        }
        ?>
        
    
    <br>
    <hr>
    
    <h1>Pregunta 2 </h1>
        
        <?php
            $cinco = 5;
    
            if ($cinco > 1 && $cinco < 10) {
                echo "$cinco es mayor que 1 y menor que 10";
            }
        ?>
    

    <br>
    <hr>
    
    <h1>Pregunta 3</h1>
        
        <?php
        $variable = 12;
        
        if ($variable > 10 || $variable < 2 ) {
            echo "$variable es mayor a diez y no es menor que dos"; 
        }
        
        ?>
        
    <br>
    <hr>
    
    <h1>Pregunta 4</h1>
    
        <?php
        $numero1 = 25;
        $numero2 = 23;
        
        if ($numero1 > $numero2) {
            echo "$numero1 + $numero2"."<br>";
            echo "$numero1 - $numero2";
            
        }
        
        ?>

</body>
</html>