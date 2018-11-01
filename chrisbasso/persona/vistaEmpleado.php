<?php 
	require 'persona.php';
	require 'empleado.php';
	$objEmpleado = new Empleado('Bruce', 'Willis', 80000);
	$detalleEmpleado = $objEmpleado-> verDatos();
	$pagaImpuesto = $objEmpleado->pagaImpuestoPorGanancias();
	$mensajeImpuesto = 'No paga impuesto a las ganancias';
	if($pagaImpuesto)
	{
	    $mensajeImpuesto = 'Paga impuesto a las ganancias';
    }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Vista empleado</title>
 </head>
 <body>	
 	<h1>Vista Empleado</h1>

	<?php echo $detalleEmpleado; ?>
    <br>
    <?php echo $mensajeImpuesto; ?>


 </body>
 </html>