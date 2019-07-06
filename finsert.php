



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>blog</title>
  </head>
<body id="ibody">
    <div class="container">
   <a href="index1.php" class="btn bg-dark text-white mt-3" >ver contenidos</a>
 
        <div class="row justify-content-center">
            <div class="col">
                  <h4 class="text-center text-white">formulario insertar</h4>
                  <form action="insertar.php" method="post" enctype="multipart/form-data">
                  
        <div class="form-group card p-3 mt-1">
           <label for="titulo">titulo</label>
            <input type="text" class="form-control" name="titulo1" placeholder="titulo" id="titulo">
            <label for="contenido">contenido</label>
             <textarea name="contenido" id="contenido" cols="20" rows="5" class="form-control" placeholder="contenido"></textarea>
                  <label class="py-2 text-center text-white mt-2" id="lb" for="imagen"> selectiona imagen</label>
             <input type="file" name="foto" class="form-control mb-2" id="imagen">
            <input type="submit" class="btn  bg-primary text-white" value="insertar" name="insta">
         
        </div>
    </form>
                
            </div>
        </div>
    </div>
     <script src="ckeditor/ckeditor.js"></script>
   <script src="js/main.js"></script>
   
</body>
</html>