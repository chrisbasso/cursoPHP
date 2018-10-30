<?php
    require 'requires/conexion.php';
    require 'requires/funcionesMarcas.php';
    $idMarca = $_GET['idMarca'];
    $detalle = verMarcaPorID($idMarca);
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Confirmación de baja de una marca</h1>

    <div class="card bg-light mb-3 col-md-6" >
    <div class="card-body">
        <div class="card-header alert alert-danger">Confirmación de baja de una marca</div>
        
            <form action="eliminarMarca.php" method="post">
                <h5 class="card-title"><?php echo $detalle['mkNombre'] ?></h5>
                <input type="submit" class="btn btn-danger" value="confirmar baja">
                <input type="hidden" name="idMarca" value="<?php echo $idMarca ?>" class="form-control">
                <a href="adminMarcas.php" class="btn btn-light">volver al panel de marcas</a>
            </form>
        </div>
    </div>

</main>
    <script>
        form = document.querySelector('form[action="eliminarMarca.php"]');
        form.onsubmit = function (evento)
        {
            console.log(evento);
            evento.preventDefault(); //evitamos enviar el form
            var mensaje = 'Si pulsa "Aceptar", se eliminará la marca';
            if(confirm(mensaje)){
                form.submit();
                return;
            }
            window.location = 'adminMarcas.php';
        }

    </script>
<?php  include 'includes/footer.php';  ?>