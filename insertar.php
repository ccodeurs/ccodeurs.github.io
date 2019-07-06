
<?php
include "conexion.php";
if (isset($_POST["insta"]))
{
         $tito=$_POST["titulo1"];
     $contenido=$_POST["contenido"];
     $img=$_FILES["foto"]["name"];
     $fecha=date("y-m-d H:i:s");
    if(empty($tito) && empty($contenido)){
        echo "estes campos son obligatorio";
        exit();
    }else{
        
     $destino=$_SERVER["DOCUMENT_ROOT"]."/php/blog/imagenblog/";
     move_uploaded_file($_FILES["foto"]["tmp_name"], $destino.$img);

   
    $insertar=" INSERT INTO contenidos(titulo,contenido,imagen,fecha)value('$tito','$contenido','$img',' $fecha')";
    
    $resulta=$conexion->query($insertar);
    if($resulta){
        echo "datos insertado";
    }else{
        echo "datos no insertado";
        
    }

        
        
        
    }
    
    
    
    
}



$conexion->close();

?>
<br>
<a href="finsert.php">nuevo</a>
<a href="index1.php">ir ver  el blog</a>
