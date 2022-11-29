<h1>PAGINA DE USUARIOS</h1>
<?php
    $usuarios=ControladorFormularios::ctrSeleccionarRegistros();
?>
<table border="1" bgcolor="#00ccff">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $key => $value): ?>
                <tr>
                    <td><?php echo ($key+1); ?></td>
                    <td><?php echo $value["nombre"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td><?php echo $value["fecha"]; ?></td>
                    <td><button>Editar</button></td>
                    <td><button>Borrar</button></td>
                </tr>	
                <?php endforeach ?>
            </tbody>
    </table>

