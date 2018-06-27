<?php
	require 'funcs/conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM turista $where";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">
<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<title>Destinos Turisticos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript"  href="./js/scripts.js"></script>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<header>
			<div class="contenedor">
				<nav class="menu" >
					<ul>
						<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						<li class='active'><a href='empresa.php'>Inicio</a></li>	
					</ul>
				</nav>
			</div>
		</header>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Lista de Turistas</h2>
			</div>
			
			<div class="row">
				<a href="registrarTurista.php" class="btn btn-primary">Nuevo Registro</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Usuario</th>
							<th>Nombre</th>
							<th>DNI</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						 while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['usuario']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['dni']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modaal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		<footer>
        <div class="footer-container">
            <div class="footer-main">
                <div class="footer-columna">
                    <h3>Suscríbete</h3>
                    <input type="email" placeholder="Escriba su correo">
                    <input type="submit" placeholder="Suscribirse">
                </div>
                
                <div class="footer-columna">
                    <h3>Contáctanos</h3>
                    <span class="fa fa-phone"><p>(+51) 67437345</p></span>
                    <span class="fa fa-envelope"><p>info@turismoperu.com</p></span>
                </div>
                
                <div class="footer-columna">
                    <h3>Sobre Nosotros</h3>
                    <p>Nuestros más de 30 años de experiencias como agencia de viajes, y nuestra pasión por el turismo, nos convierten en una empresa sobresaliente que brinda los mejores programas de viajes tanto en el Perú como en el mundo.</p>
                </div>  
            </div>
        </div>
        <div class="footer-copy-redes">
            <div class="main-copy-redes">
                <div class="footer-copy">
                    &copy; 2018, Todos los derechos reservados - | Turismo Perú |.
                </div>
                <div class="footer-redes">
                   <i class="fas fa-play"></i>
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
            </div>
        </div>
    </footer>	
	</body>
</html>	