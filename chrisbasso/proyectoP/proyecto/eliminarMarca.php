<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php
        require 'requires/conexion.php';
        require 'requires/funcionesMarcas.php';
        $idMarca = $_POST['idMarca'];
        $chequeo = eliminarMarca($idMarca);
?>

<main class="container">
    <h1>Baja de una Marca</h1>
<?php
    if($chequeo==1){
?>
        <div class="alert alert-success">
            Marca eliminada con éxito
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-2">Volver a panel de marcas</a>
        </div>
<?php
    }else{
?>
        <div class="alert alert-warning">
            No se ha eliminado la Marca
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-2">Volver a panel de marcas</a>
        </div>
<?php
    }
?>
</main>

<?php  include 'includes/footer.php';  ?>