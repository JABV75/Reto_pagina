<?php
    class EnlacesPaginas
    {
        public static function enlacesPaginasModel($enlacesModel)
        {
            if($enlacesModel=="ingresar"|| $enlacesModel=="usuarios"
             || $enlacesModel=="salir")
            {
                $modulo="vistas/modulos/".$enlacesModel.".php";
            }
                else if($enlacesModel=="index")
                {
                    #llamamos a inicio
                    $modulo="vistas/modulos/registro.php";
                }
                else
                {
                    #lista blanca otra opcion
                    $modulo="vistas/modulos/error404.php";
                }
            return $modulo;
        }
    }
?>