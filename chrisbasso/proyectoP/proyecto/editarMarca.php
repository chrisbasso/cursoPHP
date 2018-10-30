<?php
    require 'requires/conexion.php';
    require 'requires/funcionesMarcas.php';
    $chequeo = editarMarca();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Modificación de una marca</h1>
<?php
    if($chequeo==1){
?>
        <div class="alert alert-success">
            Marca modificada con éxito
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-2">Volver a panel de marcas</a>
        </div>
<?php
    }else{
?>
        <div class="alert alert-warning">
            no se han modificado datos
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-2">Volver a panel de marcas</a>
        </div>
<?php
    }
?>
</main>

<?php  include 'includes/footer.php';  ?>