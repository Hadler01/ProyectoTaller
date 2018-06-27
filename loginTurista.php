<?php
	
	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs1.php';

	$errors = array();
	
	if(!empty($_POST))
	{
		$usuario = $mysqli-> real_escape_string($_POST['usuario']);
		$password = $mysqli-> real_escape_string($_POST['password']);
		if (isNullLogin($usuario,$password)) {
			$errors[] = "Debe llenar todos los campos";
		}
		$errors[] = login($usuario,$password);
	}	
?>

<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
    	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
    	<link rel="stylesheet" href="css/bootstrap.min.css" >
    	<link rel="stylesheet" href="iconos/css/fontello.css">
    	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
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
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
					</div>     
				
				<div style="padding-top:30px" class="panel-body" >
					
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					
					<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
						
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
						</div>
						
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
						</div>
						
						<div style="margin-top:10px" class="form-group">
							<div class="col-sm-12 controls">
								<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									No tiene una cuenta! <a href="registrarTurista.php">Registrate aquí</a>
								</div>
							</div>
						</div>    
					</form>
					<?php echo resultBlock($errors); ?>
				</div>                     
				</div>  
				</div>
				</div>
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