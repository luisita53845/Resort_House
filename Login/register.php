<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $contrasena=$_POST['contrasena'];

        //Encriptar contraseña
        $contrasena = hash('sha512', $contrasena);

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
    <link rel="shortcut icon" href="images/LogoC.png">
</head>

<body>
    <div class="form-body" class="container-fluid">

        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <img src="images/LogoC.png" width="75px" height="75px">
                        <h3>Resort House</h3>
                        <p>El mejor Hotel que puedas imaginar</p>
                        <div class="page-links">
                            <a href="login.php">Iniciar Sesion</a><a href="register2.html" class="active">Registrar</a>
                        </div>
                        <form action="" method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required>
                            <input class="form-control" type="text" name="phone" placeholder="Telefono" required>
                            <input class="form-control" type="email" name="email" placeholder="Correo Electronico " required>
                            <input class="form-control" type="text" name="user" placeholder="Usuario" required>
                            <input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
                            <div class="form-button">
								<!--<a href="index.php" class="btn btn__danger">Cancelar</a>
								<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">-->
                                <button id="submit" type="submit" name="guardar" value="Guardar" class="ibtn">Registrar</button>
                            </div>
                        </form>
                        <?php 
                            
                        ?>
                        <div class="other-links">
                            <span>O registrese con</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
						</div>
		
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>