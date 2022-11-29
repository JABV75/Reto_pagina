<?php
    class MvcController
    {
        public function plantilla()
        { 
            include "vistas/templete.php";
        }
        public function enlacespaginascontroller()
        {
            if (isset($_GET["action"]))
            {
                $enlacescontroller=$_GET["action"];
            }
            else 
            {
                $enlacescontroller="index";
            }
            
            echo $enlacescontroller;
            $respuesta=EnlacesPaginas::enlacesPaginasModel($enlacescontroller);
            include $respuesta;
        }
    }
?>