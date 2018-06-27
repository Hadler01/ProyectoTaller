<?php
	
    require 'funcs/conexion.php';
   
        $id = $_POST['id'];

		$nombre = $_POST['nombre'];	
		$imagen = $_POST['imagen'];	
		$precio = $_POST['precio'];	
		$departamento = $_POST['departamento'];	
		$duracion = $_POST['duracion'];
        $descripcion = $_POST['descripcion'];
        	
		$sql = "UPDATE productos SET nombre='$nombre', imagen='$imagen', precio='$precio', departamento='$departamento', duracion='$duracion', descripcion='$descripcion' WHERE id = '$id'";
	    $resultado = $mysqli->query($sql);
			
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="empresa.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
