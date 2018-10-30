<?php
        require 'requires/conexion.php';
        require 'requires/funcionesMarcas.php';
        $idMarca = $_GET['idMarca'];
        $detalleMarca = verMarcaPorId($idMarca);
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de modificación de una Marca</h1>

    <form action="editarMarca.php" method="post">
        Nombre de la marca:
        <br>
        <input type="text" name="mkNombre" value="<?php echo $detalleMarca['mkNombre'] ?>" class="form-control">
        <br>
        <input type="hidden" name="idMarca" value="<?php echo $idMarca ?>" class="form-control">
        <input type="submit" value="Modificar Marca" class="btn btn-warning">
        <a href="adminMarcas.php" class="btn btn-light">Volver al panel de Marcas</a>
    </form>
</main>

<?php  include 'includes/footer.php';  ?>