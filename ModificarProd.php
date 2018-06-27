<script type="text/javascript"></script>
<?php
	require 'funcs/conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM productos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html>
	<head>
		<title>Registrar Paquete</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
    	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" 
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
    	<script src="js/bootstrap.min.js" ></script>>
		<script src="js/bootstrap.min.js" ></script>
	</head>
	<body>
		<header>
        <div class="contenedor">
            <nav class="menu" >
                <ul>
                    <li><a href="registrarEmpTurista.php">Regístrate</a></li>
                    <li><a href="loginEmpTurista.php">Accede</a></li>
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
						<div class="panel-title">Modicar Paquete</div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="update.php" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>"  required >
								</div>
							</div>
							
							<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Imagen</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="imagen" placeholder="Imagen" value="<?php echo $row['imagen']; ?>"  required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Precio</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>"  required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Departamento</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="departamento" placeholder="Departamento" value="<?php echo $row['departamento']; ?>"  required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Duracion</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="duracion" placeholder="Duracion" value="<?php echo $row['duracion']; ?>"  required>
								</div>
							</div>

							<div class="form-group">
								<label for="telefono" class="col-md-3 control-label">Descripcion</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']; ?>"  required>
								</div>
							</div>

							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
									<button id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i><a  href="empresa.php">Regresar</button> 
								
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