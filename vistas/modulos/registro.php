<h1>PAGINA DE REGISTRO</h1>
<form method="post" action="">
    <input type="text" id="nombre" placeholder="NOMBRE" name="nombre" required="">
    <input type="password" id="password" placeholder="CONTRASEÑA" name="password" required="">
    <input type="email" id="email" placeholder="EMAIL" name="email"  required="" >
    <input type="submit" name="ENVIAR">


<?php
    $registro1=controladorFormularios::ctrRegistro();
    if ($registro1=="ok")
    {
        echo " <br> <br> usuario registrado";
        echo '<script>
            if(window.history.replaceState)
            {
                window.history.replaceState(null,null,window.location.href);
            }
            <script>';
    }
?>
</form>