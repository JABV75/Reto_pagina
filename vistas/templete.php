<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vistas/style.css">
    <title>MENU</title>
</head>
<body>
    <header>AQUI UN LOGOTIPO</header>

    <section>   
    <?php
        include "modulos/navegacion.php";
    ?>
    <?php
        $mvc=new MvcController;
        $mvc->enlacespaginascontroller();
    ?>
    </section>

</body>
</html>