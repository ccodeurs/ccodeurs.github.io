

<?php
require "header.php";
include "conexion.php";
$buscar=$_POST["buscar"];
$consultar=" SELECT * FROM contenidos WHERE titulo like'%$buscar%' ";
$resulta=$conexion->query($consultar);
?>

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
                    <a href="completo.php?id=<?php echo $fila["id"];?>">ler mas..</a>
                </div> 
                 <br>
                 
                  <?php }?>
   
                
              
             
            </div>
        </div>
    </div>
</div>

