<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Algoritmos de Cifrado</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
		<link rel="icon" type="image/png" href="icono.png">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>

		<form class="formulario" method="post" action="rsa_funciones.php">
			<h1>Registro</h1>
			<div class="">
				<div class="input-contenedor">
					<i class="fas fa-key icon"></i>
					<input type="text" placeholder="Llave Sectreta" name="key">
				</div>

				<div class="input-contenedor">
					<i class="fas fa-envelope icon"></i>
					<input type="text" placeholder="Correo Electronico" name="email">
				</div>
				
				<div class="input-contenedor">
					<i class="fas fa-key icon"></i>
					<input type="password" placeholder="Contraseña" name="clave">
				</div>	
			</div>
		</form>
		<h1>Consultar Datos</h1>
		<div class="contenedor">
			<table class="table_planes">
				<thead>
					<tr>
						<th>Id</th>
						<th>Mensaje</th>
						<th>email</th>
						<th>contraseña cifrada</th>
						<th>contraseña decifrada</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include("conexion.php");
					$consulta = "SELECT * FROM tbl_rsa";
            		$resultado = mysqli_query($conn,$consulta);
					while($mostrar=mysqli_fetch_array($resultado)){
					?>
					<tr>
						<td><?php echo $mostrar['id']?></td>
						<td><?php echo $mostrar['_key']?></td>
						<td><?php echo $mostrar['correo']?></td>
						<td><?php echo $mostrar['contra']?></td>
						<td><?php echo $mostrar['contra2']?></td>

					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div><br><br><br>
	</body>
</html>
