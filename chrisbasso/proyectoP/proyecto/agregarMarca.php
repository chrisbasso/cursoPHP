<?php
    require 'requires/conexion.php';
    require 'requires/funcionesMarcas.php';

    $mkNombre = agregarMarca();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Alta de una nueva marca</h1>
<?php
        if($mkNombre){
?>
            <div class="alert alert-success">
                Marca <b><?php echo $mkNombre; ?></b> agregada con éxito
                <br>
                <a href="adminMarcas.php" class="btn btn-light">
                    volver al panel de marcas
                </a>
            </div>
<?php
        }
?>

</main>

<?php  include 'includes/footer.php';  ?>