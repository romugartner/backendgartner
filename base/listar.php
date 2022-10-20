<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de ropa</title>
</head>
<body>
    <h1>Tienda de ropa</h1>

    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Lista de ropa</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>


    <h1>Lista de ropa</h1>
    <p>Lista de ropa en stock</p>

    <table border="1">

    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>


    </tr>


    <?php
    
    //aca es donde va la conexion. lleva el nombre de la base de datos. En este caso es "tienda_ropa".
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    //aca es donde se selecciona la tabla. lleva el nombre de la tabla. En este caso es "ropa".
    $consulta= "SELECT*FROM ropa";

    //guarda en la variable datos, lo que se consulto en consulta. transforma la variable datos, convertidos en un array. 
    //Conviente la variable datos a fila en este caso. Puede colocarse en esta parte o en la parte de abajo en el array.
    $datos= mysqli_query ($conexion, $consulta);


   while ( $reg =mysqli_fetch_array($datos)) {?> 
    
        <tr>
            <td><?php echo $reg ['id']; ?></td>
            <td><?php echo $reg ['tipo_de_prenda']; ?></td>
            <td><?php echo $reg ['marca']; ?></td>
            <td><?php echo $reg ['talle']; ?></td>
            <td><?php echo $reg ['precio']; ?></td>
   
        </tr>
        <?php } ?> 
    
    </table>



</body>
</html>