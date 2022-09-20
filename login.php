<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $usuario = $_POST ["user"];
        $clave = $_POST ["pass"];

        $eluser = "usuarios";
        $elpass = "37680628";

        if ($usuario == $eluser && $clave == $elpass) {
           header ("location: https://www.ole.com.ar/");
        }
        
        else {
            header ("location: error.html");

        }

    
    ?>



</body>
</html>