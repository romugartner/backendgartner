<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pregunta 1 - Mostrar los numeros del 1 al 100</h1>
           
    <?php
        $i = 1;
        
        while ($i < 101) {
            print "<p>$i</p>\n";
            $i++;
        }
        
        ?>
        
    <br>
    <hr>
        <h1>Pregunta 2 - Mostrar los numeros del 100 al 1</h1>
    
        <?php
        $ii = 100;

        while ($ii > 0 ) {
            print "<p>$ii</p>\n";
            $ii--;
        }
        
        ?>
        
    <br>
    <hr>
        <h1>Pregunta 3 - Mostrar los numeros pares del 1 al 100</h1>
    
        <?php
        $iii= 0;
        
        while ($iii < 101) {
            print "<p>$iii</p>\n";
            $iii = $iii + 2;
        }
        
        
        ?>
       
    <br>
    <hr>
        <h1>Pregunta 4 - Mostrar los numeros impares del 1 al 100</h1>
    
        <?php
        $i = 1;
        
        while ($i < 101) {
            print "<p>$i</p>\n";
            $i = $i + 2;
        }
        
        
        ?>

    <br>
    <hr>
        <h1>Pregunta 5 - Mostrar la suma de los numeros de 1 a 20</h1>
    
        <?php
    

      $suma = 0;
  
      for ($i = 1; $i < 21; $i++) {
          $total = $suma + $i;
          print "<p>$suma + $i = $total </p>\n";
          $suma += $i;
      }
        
        ?>

    <br>
    <hr>
        <h1>Pregunta 6 - Mostrar la suma de numeros pares de 1 a 20</h1>
    
        <?php
        
        $suma = 0;
    
        for ($i = 2; $i < 21; $i++) {
            if( $i % 2 == 0 ) {
                $total = $suma + $i;
                print "<p>$suma + $i = $total </p>\n";
                $suma = $suma + 2;
            }
    
        }
         
            
       
       
        ?>


</body>
</html>