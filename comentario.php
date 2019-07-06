<?php
include "conexion.php";

if(isset($_POST["com"])){
    
$nombre=$_POST["nombre"];
$coreo=$_POST["coreo"];
$comentario=$_POST["comentario"];
    
    if(empty($nombre) && empty($coreo) && empty($comentario)){
        echo "rellena todas las campos por favor";
        exit();
        
    }else{
        $insertar=" INSERT INTO comentarios(nombre,email,comentario)value('$nombre','$coreo','$comentario') ";
$resulta=$conexion->query($insertar);
if($resulta){
    header("location:index1.php");
}

    
}

        
    }
    




$conexion->close();