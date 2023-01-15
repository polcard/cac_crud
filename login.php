<?php ob_start(); ?>
<?php session_start();

require_once('conexion.php');
    #validar datos
    if ($_POST){
        
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        $consultaUser = "SELECT * FROM users WHERE (nameUser='".$user."') AND (passUser='".$pass."')";

        //echo $user." ".$pass."<br>".$consultaUser;

        $conexion = new conexion;

        $ejecutaConsulta = $conexion->consultar($consultaUser);

        //var_dump($ejecutaConsulta);

        if(count($ejecutaConsulta) == 0){
            //echo "array vacio";
            echo "<script type=''>
            alert('Usuario o Password Incorrecto - Reintentar');
            window.location='login.php';
            </script>";
            die();
        }else{
            //echo "registro encontrado";
            $_SESSION['usuario']=$user;
            $_SESSION['logueado']='S';
            #redirecciono porque ingreso ok 
            header("location:index_admin.php");
            die();
         // exit;
        }

    }?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    
    <title>Crud - Login</title>

    
</head>
<body>
    <div class="bg-light container-fluid w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="contact-box">
                <h2>Crud PortFolio</h2>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" value="Ingresar" >
                        </div>
                    </form>
        </div>
    </div>

    
</body>
</html>