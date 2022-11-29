<?php
    require_once "conexion.php";
    class ModeloFormularios
    {
        static public function mdregistro($tabla, $datos)
        {
            $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");
            $stmt->bindparam(":nombre",$datos["nombre"], PDO::PARAM_STR);
            $stmt->bindparam(":email",$datos["email"], PDO::PARAM_STR);
            $stmt->bindparam(":password",$datos["password"], PDO::PARAM_STR);

            if($stmt -> execute())
            {
                return "ok";
            }
            else
            {
                print_r(conexion::conectar()->errorInfo());
            }
       #   $stmt -> close();
        #    $stmt->null;
        }

        static public function mdSeleccionarRegistros($tabla)
        {
                $stmt= Conexion::conectar()->prepare("SELECT *,date_format(fecha, '%d/%m/%y') AS fecha FROM $tabla ORDER BY id DESC");
                $stmt->execute();
                return $stmt -> fetchAll();
             #  $stmt ->close();
               # $stmt = null;
        }
    }
?>