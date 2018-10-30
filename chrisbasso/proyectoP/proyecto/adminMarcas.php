<?php
        require 'requires/conexion.php';
        require 'requires/funcionesMarcas.php';
        $listadoMarcas = listarMarcas();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administración de marcas</h1>
    <table class="table table-stripped table-hover table-border">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>marca</th>
                <th colspan="2">
                    <a href="formAgregarMarca.php" class="btn btn-dark">agregar</a>
                </th>
            </tr>
        </thead>
        <tbody>
<?php
         foreach ( $listadoMarcas as $marca ){
?>
            <tr>
                <td><?php echo $marca['idMarca']; ?></td>
                <td><?php echo $marca['mkNombre']; ?></td>
                <td>
                    <a href="formEditarMarca.php?idMarca=<?php echo $marca['idMarca'] ?>" class="btn btn-light">modificar</a>
                </td>
                <td>
                    <a href="formEliminarMarca.php?idMarca=<?php echo $marca['idMarca'] ?>" class="btn btn-light">eliminar</a>
                </td>
            </tr>
<?php
         }
?>
        </tbody>
    </table>

</main>

<?php  include 'includes/footer.php';  ?>