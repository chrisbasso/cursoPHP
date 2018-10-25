<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$precio = $_POST['numero'];

if($precio < 100){

	echo '<img src="ok.png" alt="">';

}else{

	echo '<img src="error.png" alt="">';

}

 ?>
	
</body>


</html>