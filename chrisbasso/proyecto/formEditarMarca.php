<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de modificaciónn de una Marca</h1>

    <form action="editarMarca.php" method="post">
        Nombre de la marca:
        <br>
        <input type="text" name="mkNombre" class="form-control">
        <br>
        <input type="submit" value="Modificar Marca" class="btn btn-success">
    </form>
</main>

<?php  include 'includes/footer.php';  ?>