<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $contrasena=$_POST['contrasena']; 

		if(!empty($name) && !empty($phone) && !empty($email) && !empty($user) && !empty($contrasena) ){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO cliente(name,phone,email,user,contrasena) VALUES(:name,:phone,:email,:user,:contrasena)');
				$consulta_insert->execute(array(
					':name' =>$name,
					':phone' =>$phone,
                    ':email' =>$email,
                    ':user' =>$user,
                    ':contrasena' =>$contrasena
				));
				header('Location: index.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	} 


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>CRUD EN PHP CON MYSQL</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="name" placeholder="Nombre" class="input__text">
				<input type="text" name="phone" placeholder="Teléfono" class="input__text">
			</div>
			<div class="form-group">
            <input type="text" name="email" placeholder="Correo electrónico" class="input__text">
				<input type="text" name="user" placeholder="Usuario" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="contrasena" placeholder="Contraseña" class="input__text">
			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
