<?php 
     include("conexion.php");
     $nombre = $_POST['nombre'];
     $cantidad = $_POST['cantidad'];
     $precio = $_POST['precio'];
     $query = "INSERT INTO productos 
     (nombre, 
     cantidad, 
     precio) 
     VALUES 
     ('$nombre', 
     '$cantidad', 
     '$precio')";
     $resultado = $conexion -> query ($query);
     if ($resultado) {  
     	header("Location: tabla.php");
     }
     else {
     	echo "No Insercion";
     }
 ?>
