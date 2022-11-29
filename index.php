<?php
    require_once "control/controller.php";
    require_once "modelo/model.php";
    require_once "control/controlFormularios.php";
    require_once "modelo/conexion.php";
    require_once "modelo/formulariosModelo.php";
    #Este es el archivo de index
    $conexion=Conexion::conectar();
    #crear un objeto de classs MvcController
    $mvc=new MvcController();

    #llamas a la clase

    $mvc->plantilla();
?>