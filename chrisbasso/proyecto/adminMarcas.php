<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php require 'requires/funcionesMarcas.php' ?>
<?php require 'requires/conexion.php' ?>
<?php 
	$listadoMarcas = listarMarcas();
 ?>

<main class="container">
    <h1>Panel de Administración de marcas</h1>
    <table class="table table-stripped table-haver table-border">
    	<thead class="thead-dark">
    		<tr>
    			<th>ID</th>
    			<th>MARCA</th>
    			<th colspan="2">
					
					<a href="formAgregarMarca.php" class="btn btn-dark">AGREGAR</a>
					
    			</th>
    		</tr>


    	</thead>
    	<tbody>
    	<?php 

    		foreach ($listadoMarcas as $marca) {
    
    	 ?>
    		<tr>
    			<td><?php echo $marca['idMarca'] ?></td>
    			<td><?php echo $marca['mkNombre'] ?></td>
    			<td>
					<a href="#" class="btn btn-light"> modificar</a>
    			</td>
    			<td>
    				<a href="#" class="btn btn-light"> eliminar</a>
    			</td>

    		</tr>

<?php 

			}

 ?>
    	</tbody>
    	



    </table>

</main>

<?php  include 'includes/footer.php';  ?>