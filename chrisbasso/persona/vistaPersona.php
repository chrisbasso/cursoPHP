<?php 
	require 'persona.php';
	$objPersona = new Persona('juan', 'carlo');
	$detallePersona = $objPersona-> verDatos();
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Vista persona</title>
 </head>
 <body>
 	<h1>vista persona</h1>

	<?php echo $detallePersona;?>


 </body>
 </html>