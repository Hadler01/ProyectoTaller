<script type="text/javascript"></script>
<html>
	<head>
		<title>Registrar Paquete</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
    	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    	<script src="js/bootstrap.min.js" ></script>
	</head>
	<body>
		<header>
        <div class="contenedor">
            <nav class="menu" >
                <ul>
					<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
					<li class='active'><a href='empresa.php'>Paquetes</a></li>
                </ul>
            </nav>
        </div>
    	</header>

    	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Registrar Paquete</div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre"  required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Imagen</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="imagen" placeholder="Imagen"  required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Precio</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="precio" placeholder="Precio" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">EmpresaID</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="empresa_id" placeholder="EmpresaID" required>
								</div>
							</div>

							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Departamento</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="departamento" placeholder="Departamento" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Duracion</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="duracion" placeholder="Duracion" required>
								</div>
							</div>

							<div class="form-group">
								<label for="telefono" class="col-md-3 control-label">Descripcion</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required>
								</div>
							</div>

							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
									<button id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i><a  href="empresa.php">Regresar</button> 
								
								</div>
							</div>
							<div>
								<?php
	
	require 'funcs/conexion.php';
	$errors = array();
	
	if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$imagen = $mysqli->real_escape_string($_POST['imagen']);	
		$precio = $mysqli->real_escape_string($_POST['precio']);
		$empresa_id = $mysqli->real_escape_string($_POST['empresa_id']);	
		$departamento = $mysqli->real_escape_string($_POST['departamento']);	
		$duracion = $mysqli->real_escape_string($_POST['duracion']);
		$descripcion = $mysqli->real_escape_string($_POST['descripcion']);	
		
		if(count($errors) == 0)
		{							
			$sql = "INSERT INTO productos (nombre, imagen, precio,empresa_id, departamento, duracion, descripcion) 
			VALUES( '$nombre', '$imagen','$precio', '$empresa_id', '$departamento', '$duracion','$descripcion')";
			$resultado = $mysqli->query($sql);	
	
			if($resultado > 0 ){
				echo '<div class="alert alert-success"  > <strong>Registtro Exitoso!</strong> Ahora podra ingresar  &#128512;</div>';
			} else {
				$errors[] = "Error al Registrar";
			}
		}	
	}
?>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		</body>
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