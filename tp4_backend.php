<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>Pregunta 1 - Almacenar en un array los 10 primeros numeros pares y mostrar en pantalla uno debajo del otro</h4>

        <?php

        $pares= ["0","2","4","6","8","10","12","14","16","18",];
        print"<pre>\n";
        print_r($pares);


        ?>

    



    <h4>Pregunta 2 - Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el indice de la
        matriz. Mostrar el esquema del array con print_r()</h4>

        <?php   

        $denominacion = ["Pedro","Ana","34","1"];
        print"<pre>\n";
        print_r($denominacion);

        ?>


    <h4>Pregunta 3 - Crear un array asociativo e introducir los siguientes valores</h4>

        <?php   

        $documentacion = ['Nombre'=> "Pedro", 'Apellido'=>"Torres", 'Direccion'=> "Av. Mayor 3703", 'Telefono'=>"1122334455",];
        print"<pre>\n";
        print_r($documentacion);

        ?>




    <h4>Pregunta 4 - Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Angeles y
        Chicago, sin asignar indices al array. A continuacion, muestra el contenido del array.
        Ejemplo: La ciudad con el indice 0 tiene el nombre Madrid</h4>

        <?php   

        $ciudades = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
        print"<pre>\n";
        print_r($ciudades);
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[0]</p>\n";
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[1]</p>\n";
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[2]</p>\n";
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[3]</p>\n";
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[4]</p>\n";
        print "<p> La ciudad con el indice 0 tiene el nombre de  $ciudades[5]</p>\n";


        ?>


    <h4>Pregunta 5 - Repite el ejercicio anterior pero ahora se ha de crear indices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Angeles y CCG para Chicago.
        Ejemplo: El indice de Madrid es MD.</h4>
    
        <?php   

        $ciudades2 = ['Madrid'=>"MD",'Barcelona'=>"BCL",'Londres'=>"LD",'Nueva_York'=>"NY",'Los_Angeles'=>"LA",'Chicago'=>"CCG"];
        print"<pre>\n";
        print_r($ciudades2);
        print "<p> El indice de Madrid es $ciudades2[Madrid]</p>\n";
        print "<p> El indice de Barcelona es $ciudades2[Barcelona]</p>\n";
        print "<p> El indice de Londres es $ciudades2[Londres]</p>\n";
        print "<p> El indice de New York es $ciudades2[Nueva_York]</p>\n";
        print "<p> El indice de Los Angeles es $ciudades2[Los_Angeles]</p>\n";
        print "<p> El indice de Chicago es $ciudades2[Chicago]</p>\n";
        ?>


    
</body>
    