<?php
	
	//Aqui va el código PHP del Vídeo
	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	//require 'funcs/funcs1.php';

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
		<link rel="stylesheet" href="css/index.css">
  		<link rel="stylesheet" href="css/estilos-index.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
  		<link rel="stylesheet" href="css/footer.css">
  		<link rel="stylesheet" href="iconos/css/fontello.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		<header>
        <div id="header-inner">
          
          <nav>
            <a href="#" id="menu-icon">
              <i class="fa fa-bars"></i>
            </a>
              <ul>
                <li><a href="index.php">Pagina de Inicio</a></li>
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
									No tiene una cuenta! <a href="registrarEmpresa.php">Registrate aquí</a>
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
		    <label class="icon-twitter"></label>
		    <label class="icon-facebook"></label>
		    <label class="icon-instagram"></label>
		</footer>
	</body>
</html>						