
<script type="text/javascript"></script>
<html>
	<head>
		<title>Registrar Turista</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
    	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    	<script src="http://code.jquery.com/jquery-latest.js"></script> 
    	<link rel="stylesheet" href="iconos/css/fontello.css">
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
						<div class="panel-title">Registrar Turista</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="loginTurista.php">Iniciar Sesi&oacute;n</a></div>
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
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label for="telefono" class="col-md-3 control-label">Telefono</label>
								<div class="col-md-9">
									<input type="tel" class="form-control" name="telefono" placeholder="Telefono" value="<?php if(isset($telefono)) echo $telefono; ?>" required>
								</div>
							</div>

                            <div class="form-group">
								<label for="dni" class="col-md-3 control-label">DNI</label>
								<div class="col-md-9">
									<input type="ruc" class="form-control" name="dni" placeholder="DNI" value="<?php if(isset($ruc)) echo $ruc; ?>" required>
								</div>
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
							<div>
								<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs1.php';
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$usuario = $mysqli->real_escape_string($_POST['usuario']);	
		$password = $mysqli->real_escape_string($_POST['password']);	
		$con_password = $mysqli->real_escape_string($_POST['con_password']);	
		$email = $mysqli->real_escape_string($_POST['email']);
		$dni = $mysqli->real_escape_string($_POST['dni']);	
		$telefono = $mysqli->real_escape_string($_POST['telefono']);
			
		$activo = 1;
		$tipo_usuario = 2;
		
		if(isNull($nombre, $usuario, $password, $con_password, $email, $dni, $telefono))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		if(!isEmail($email))
		{
			$errors[] = "Dirección de correo inválida";
		}
		
		if(!validaPassword($password, $con_password))
		{
			$errors[] = "Las contraseñas no coinciden";
		}
		
		if(usuarioExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
		}
		
		if(emailExiste($email))
		{
			$errors[] = "El correo electronico $email ya existe";
		}
		
		if(count($errors) == 0)
		{
			$pass_hash = hashPassword($password);				
			$registro = registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $tipo_usuario, $dni, $telefono);				
			if($registro > 0 ){
				echo '<div class="alert alert-success"  > <strong>Registtro Exitoso!</strong> Ahora podra ingresar  &#128512;</div>';
				//echo "registro exitoso";		
				//echo "<br><a href='loginTurista.php' >Iniciar Sesion</a>";
				//exit; //no m muestre mas el formulario	
			} else {
				$errors[] = "Error al Registrar";
			}
		}	
	}
?>
							</div>
							
						</form>
						<?php echo resultBlock($errors); ?>
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