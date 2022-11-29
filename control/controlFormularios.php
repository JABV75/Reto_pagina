<?php
    class controladorFormularios
    {
        static public function ctrRegistro()
        {
            if(isset($_POST["nombre"]))
            {
                $tabla="registros1";
                $datos= array("nombre" => $_POST["nombre"] ,"password" => $_POST["password"] ,"email" => $_POST["email"]);
                $respuesta1=ModeloFormularios::mdregistro($tabla,$datos);
                return $respuesta1;
            }
        }

        static public function ctrSeleccionarRegistros()
        {
            $tabla="registros1";
            $respuesta1=ModeloFormularios::mdSeleccionarRegistros($tabla);
            return $respuesta1;
        }
    }
?>