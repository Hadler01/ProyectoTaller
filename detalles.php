<?php
	require 'funcs/conexion.php';
	$id =$_GET['id'];
	$sql = "SELECT * FROM productos where id = '$id'";
	$resultado = $mysqli->query($sql);	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Catalogo de paquetes</title>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css"> 
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/cssinicio/estiloindex.css">
	<link rel="stylesheet" href="css/cssfooter/estilos-footer.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<div class="contenedor">
            <nav class="menu" >
                <ul>
                    <li><a href="registrarEmpTurista.php">Regístrate</a></li>
                    <li><a href="loginEmpTurista.php">Ver reservas</a></li>
                    <li><a  href="index.php">Inicio</a></li>
                </ul>
            </nav>
        </div>
	</header>
	<section>		
	<?php
		while ($f=$resultado->fetch_array(MYSQLI_ASSOC)) {
		?>
			<div class="">
				<center>
					<img src="./images/<?php echo $f['imagen'];?>"><br>
					<span><?php echo $f['nombre'];?></span><br>
					<span>Precio: <?php echo $f['precio'];?></span><br>
                    <span>Lugar: <?php echo $f['departamento'];?></span><br>
                    <span>Descripcion: <?php echo $f['descripcion'];?></span><br>
					<a href="./reservar.php?id=<?php  echo $f['id'];?>">Reservar</a>
				</center>
		    </div>
	<?php
		}
	?>
	</section>
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