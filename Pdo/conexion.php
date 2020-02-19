<?php 
    $conexion = new PDO ("mysql:host=localhost;dbname=tienda","root","");
    if ($conexion) {
    	echo "Conexion exitosa mediante PDO";
    }
    else{
    	echo "No Conectado";
    }
 ?>    
