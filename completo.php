<?php
require "header.php";
include "conexion.php";
$id=$_GET["id"];
$consultar=" SELECT * FROM contenidos WHERE id='$id' ";
$resulta=$conexion->query($consultar);

  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="body">
   
   
   
   
<div class="container-fluid">
   <h1>blog</h1>
    <div class="container">
        <div class="row">
           
           
            <div class="col-md-8 mt-5">
             <?php
                  while($fila=$resulta->fetch_assoc()){
                 $rutaimagen=$fila["imagen"];
                
                ?>
              
                 
               <div class="card p-2">
                   <p><?php echo $fila["titulo"];?></p>
                    <p><?php echo $fila["fecha"];?>  </p>
                    <div id="dimagen">
                       
                        <img src="/php/blog/imagenblog/<?php echo $rutaimagen;?>" style="width:200px" >
                    </div>
                    <p><?php echo $fila["contenido"];?></p>  
                    <a href="index1.php?id=<?php echo $fila["id"];?>">ver menos..</a>
                </div> 
                 <br>
                 
                  <?php }?>
   
                
              
             
            </div>
        </div>
    </div>
</div>

    
</body>
</html>







