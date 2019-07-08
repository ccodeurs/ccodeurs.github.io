
<?php
require "header.php";
include "conexion.php";

$tamanoPagina=2;
$pagina=1;
$empezar=($pagina-1)*$tamanoPagina;
$consultar=" SELECT * FROM contenidos   ";
$resulta=$conexion->query($consultar);
$contar=$resulta->num_rows;
$total=ceil($contar/$tamanoPagina);
       
        
  

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

    <div class="container">
       <h3>blog</h3>
        <div class="row">
           
           
            <div class="col-md-8 mt-5">
             <?php
                 echo $contar;
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
         
            <div class="col-md-4 " >
                <div class="comentario card" id="comment" >
                <button id="btnComent" class=" btn bg-warning ">comenta aqui</button>
                   <div class=" m-4">
                      <form action="comentario.php" method="post"s id="commentForm">
                       <input type="text" name="nombre" id="nombre" class="form-control mb-2 " placeholder="nombre">
                       <input type="email" class="form-control mb-2 " name="coreo" id="coreo" placeholder="email">
                       <textarea name="comentario" class="form-control mb-2" id="comentario" cols="20" rows="10" placeholder="tu comentario aqui"></textarea>
                       <input name="com" type="submit" value="comentar" class="btn btn-block bg-success">
                   </form>
                        <!--mostrando commentario-->
                        
                        <?php
                       
                       $mostrar="  SELECT * FROM comentarios  ";
                       $result=$conexion->query($mostrar);
                       while( $fila1=$result->fetch_assoc()){
                     
                       ?>  
                       <p> <b>nombre: </b> <?php echo $fila1["nombre"] ?></p>
                         <p> <b>coreo:</b>  <?php echo $fila1["email"] ?></p>
                          <p> <b> comentario:</b> <?php echo $fila1["comentario"] ?></p>
                          <hr>
                          <?php }?>
                         <!--mostrando commentario-->
                   </div>
               
                </div>
                 
            </div>
            
        </div>
        
        
           <!--pagination-->
        <?php
  
        for($i=1; $i<$total; $i++){
           echo $i;
        }
        
        ?>
           <!--pagination-->
        
        
    </div>
</div>

   
   









<?php
require "footer.php";
?>
  
    
   <script>
 $(document).ready(function(){
      $("#commentForm").hide();
   $("#btnComent").click(function(){
       $("#commentForm").toggle();
   })
 })

   </script>
</body>
</html>



