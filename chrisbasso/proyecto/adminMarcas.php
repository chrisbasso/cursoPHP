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
            <tr>
                <td>1</td>
                <td>nombre marca</td>
                <td>
                    <a href="#" class="btn btn-light">modificar</a>
                </td>
                <td>
                    <a href="#" class="btn btn-light">eliminara>
                </td>
            </tr>
        </tbody>
    </table>

</main>

<?php  include 'includes/footer.php';  ?>