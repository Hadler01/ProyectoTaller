<script type="text/javascript"></script>
<?php
	
	require 'funcs/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<head>
		<title>Registrar Reserva</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
    	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
    	<script src="js/bootstrap.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</head>

	<body>
		<header>
			<div class="contenedor">
				<nav class="menu" >
					<ul>
						<li><a href="Turista.php">turistas</a></li>
						<li><a href="welcome.php">Destinos</a></li>
						<li><a  href="index.php">Inicio</a></li>
					</ul>
				</nav>
			</div>
    	</header>

    	<body>
			<div class="container">
				<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="panel-title">Registrar Reserva</div>
							<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" </a></div>
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
										<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
									</div>
								</div>
								
								<div class="form-group">
									<label for="usuario" class="col-md-3 control-label">Correo</label>
									<div class="col-md-9">
										<input type="email" class="form-control" name="correo" placeholder="Correo" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label for="password" class="col-md-3 control-label">Telefono</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="col-md-3 control-label">Dias</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="dias" placeholder="Dias" required>
									</div>
								</div>

								<div class="form-group">
									<label for="usuario" class="col-md-3 control-label">Fecha de Entrada</label>
									<div class="col-md-9">
										<input type="date" class="form-control" name="fecha_entrada" placeholder="" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label for="password" class="col-md-3 control-label">Fecha de Salida</label>
									<div class="col-md-9">
										<input type="date" class="form-control" name="fecha_salida" placeholder="" required>
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-md-3 control-label">Estado</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="estado" placeholder="Estado" required>
									</div>
								</div>

								<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
									<button id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i><a  href="empresa.php">Regresar</button> 
								
								</div>
								</div>
									<?php
										require 'funcs/conexion.php';
										$errors = array();
										
										if(!empty($_POST))
										{
											$nombre = $mysqli->real_escape_string($_POST['nombre']);	
											$correo = $mysqli->real_escape_string($_POST['correo']);	
											$telefono = $mysqli->real_escape_string($_POST['telefono']);
											$dias = $mysqli->real_escape_string($_POST['dias']);	
											$fechaEntrada = $mysqli->real_escape_string($_POST['fecha_entrada']);	
											$FechaSalida = $mysqli->real_escape_string($_POST['fecha_salida']);
											$estado = $mysqli->real_escape_string($_POST['estado']);	
											
											if(count($errors) == 0)
											{							
												$sql = "INSERT INTO reservas (nombre, correo, telefono,dias, fecha_entrada, fecha_salida, estado) 
												VALUES( '$nombre', $correo', '$telefono', '$dias', '$fechaEntrada','$FechaSalida',$estado )";
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