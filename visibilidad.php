<?php

require_once('_header.php');

if($_GET){
    if(isset($_GET['visibilidad'])){
        $id = $_GET['visibilidad'];
       /*
        $_SESSION['id_proyecto'] = $id;
        #vamos a consultar para llenar la tabla 
        $conexion = new conexion();
        $proyecto= $conexion->consultar("SELECT * FROM `proyectos` where id=".$id);
     */
        //var_dump($_GET);
        $sentencia = "SELECT * FROM `proyectos` where id=".$id;
        //echo $sentencia;

        $conexion = new conexion;

        $proyecto = $conexion->consultar($sentencia);

        //var_dump($proyecto);
        //echo $proyecto[0]['visibilidad'];


        if($proyecto[0]['visibilidad']=='SI'){
            echo "el proyecto actualmente es visible -> pasa a ser oculto";
            $sql = "UPDATE `proyectos` SET `visibilidad` = 'NO' WHERE `proyectos`.`id` = '$id';";
            
            $proyecto = $conexion->ejecutar($sql);

            header("location:edit_galeria.php");
            die();
        
        }else{
            echo "el proyecto actualmente esta oculto -> pasa a ser visible";
            $sql = "UPDATE `proyectos` SET `visibilidad` = 'SI' WHERE `proyectos`.`id` = '$id';";
            
            $proyecto = $conexion->ejecutar($sql);

            header("location:edit_galeria.php");
            die();
        }
    }
}
?>