<!DOCTYPE html>
<html lang="es">
<?php
// 
require_once("inc/config.sistema.php");
require_once(RUTA_SISTEMA."inc/head_sistema.php");
?>
<body>
	
	<div  id="container">
		<!-- <div class="row"> -->
			<!-- <div class="col-sm-4"></div> -->
			<!-- <div class="col"> -->
				<!-- <br><br> -->
				<form action="" method="POST" role="form">
					<h3>Iniciar Sesión</h3>
					<!-- <div class="form-group"> -->
						<img src="img/login.png" alt="login">
					<!-- </div> -->
					<div class="form-group">
						
						<input type="text" class="form-control" id="usuario" placeholder="Usuario">
					</div>

					<div class="form-group">
						
						<input type="text" class="form-control" id="contraseña" placeholder="Conteseña">
					</div>

					<input type="submit" class="btn btn-primary" id="ingresar" value="INGRESAR">
				</form>
				
				<!-- </div> -->
				<!-- <div class="col-sm-4"></div> -->
				<!-- </div> -->
			</div>


			<?php include_once(RUTA_SISTEMA."inc/script.php");  ?>
		</body>
		</html>