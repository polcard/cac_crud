<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos` WHERE `visibilidad` = 'SI'");
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="./images/favicon.png">

    <title>Polcard - Portfolio</title>
  </head>
  <body>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="./images/logo.png" class="img-fluid" alt="Logo">
            </div>
        </div>
        <hr>
    
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
               <h1>Mi Portfolio</h1>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ 
                ?>
                    
                    <div class="col">

                        <div class="card border border-3 shadow w-100">
                            <a>
                                <img class="card-img-top" width="100" src="images/<?php echo $proyecto['imagen'];?>" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-dark">
                                <a href="<?php echo $proyecto['link'];?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo $proyecto['nombre'];?>
                                </a>
                                </h5>
                                <p class="card-text text-dark">
                                    <?php echo $proyecto['descripcion'];?>
                                </p>
                                
                            </div>
                        </div>
                    </div>

                <?php 
                 } 
                ?>
        </div>
            <?php if(count($proyectos) == 0){?>
                <div class="text-center mt-5">
                    <h3>En construcción</h3>
                </div>
            <?php }?>
        <hr>
    </div>

    <div id="contact" class="container text-center">

        <div>
            <h3>Contacto</h3>
        </div>
    
        <div class="container d-flex justify-content-center" id="contacto">
            <div class="border-3 col-8"  >
                <form action="enviar.php" method='post' >
                        <div class="mb-3">
                            
                            <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                            <br>
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                        
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motivo" required>
                            <br>
                            <textarea class="form-control" name="contenido" id="contenido" cols="10" rows="5" placeholder="Mensaje" required></textarea>
                        </div>

                        
                        <button class="btn btn-success" ><a  id='WSP'  arget="_blank">Enviar Whatsapp</a></button>
                </form>
            </div>
        </div>
    </div>

    <hr>
    <footer>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" aria-current="page">By Pablo Cardozo</a>
            </li>
            
        </ul>
    </footer>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="envio.js"></script>
  </body>
</html>