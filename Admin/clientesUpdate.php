<?php

session_start();

if(!isset($_SESSION['admin'])){
    echo '
        <script> 
            alert("Debes iniciar sesion");
            window.location = "../Login/login.php";
        </script>
    ';
    session_destroy();
    die();
}
    $database="resort_house";
    $user='root';
    $password='';


    try {

    $con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

    } catch (PDOException $e) {
    echo "Error".$e->getMessage();
    }



	if(isset($_GET['id'])){
        $id=(int) $_GET['id'];
    
        /*$buscar_id = "SELECT * FROM cliente WHERE id=:id LIMIT 1";
        $resultado = mysqli_query($con,$buscar_id);*/


        $buscar_id=$con->prepare('SELECT * FROM cliente WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();


	}else{
		header('Location: clientesHistorial.php');
	}


	if(isset($_POST['guardar'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $contrasena=$_POST['contrasena'];
		$id=(int) $_GET['id'];

		if(!empty($name) && !empty($phone) && !empty($email) && !empty($user) && !empty($contrasena)){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$con->prepare('UPDATE cliente SET  
					name =:name,
                    phone =:phone,
                    email =:email,
                    user =:user,
                    contrasena =:contrasena
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':name' =>$name,
					':phone' =>$phone,
                    ':email' =>$email,
                    ':user' =>$user,
                    ':contrasena' =>$contrasena,
					':id' =>$id
				));
				header('Location: clientesHistorial.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:38:06 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Clientes | Editar</title>
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/LogoC.png" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                        <img alt="" src="assets/img/LogoC.png" width="45px" height="45px" style="filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.7));">
                        <span class="logo-default" style="font-family: poppins sans-serif;">&nbsp;&nbsp;Resort House</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                 <!-- start header menu -->
                 <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="cerrar_sesion.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <!--<li class="dropdown dropdown-quick-sidebar-toggler">
                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                <i class="material-icons">settings</i>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <br>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    
                                    <div class="sidebar-userpic-btn">
                                        <a class="tooltips"  data-placement="top" data-original-title="Profile">
                                            <i class="material-icons">person_outline</i>
                                        </a>
                                        <a class="tooltips"  data-placement="top" data-original-title="Mail">
                                            <i class="material-icons">mail_outline</i>
                                        </a>
                                        <a class="tooltips"  data-placement="top" data-original-title="Chat">
                                            <i class="material-icons">chat</i>
                                        </a>
                                        <a class="tooltips" href="cerrar_sesion.php" data-placement="top" data-original-title="Logout">
                                            <i class="material-icons">input</i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="menu-heading">
                                <span>-- Menu --</span>
                            </li>
                            <li class="nav-item">
                                <a href="home.php" class="nav-link nav-toggle">
                                    <i class="material-icons">favorite</i>
                                    <span class="title">Inicio</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">assignment_turned_in</i>
                                    <span class="title ">Servicios</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="SIncluidos.php" class="nav-link ">
                                            <i class="material-icons">favorite</i>
                                            <span class="title">Incluidos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="SNoIncluidos.php" class="nav-link ">
                                            <i class="material-icons">terrain</i>
                                            <span class="title">No Incluidos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="SRegistrar.php" class="nav-link ">
                                            <i class="material-icons">info</i>
                                            <span class="title">Registrar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                            <a href="SListar.php" class="nav-link ">
                                                <i class="material-icons">info</i>
                                                <span class="title">Listar</span>
                                            </a>
                                        </li>
                                </ul>
                            </li>
                            <li class="nav-item start active">
                                <a href="#" class="nav-link nav-toggle ">
                                    <i class="material-icons ">account_circle</i>
                                    <span class="title ">Clientes</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="clientesHistorial.php" class="nav-link ">
                                            <i class="material-icons">info</i>
                                            <span class="title">Historial</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item start ">
                                <a href="# " class="nav-link nav-toggle ">
                                    <i class="material-icons ">vpn_key</i>
                                    <span class="title ">Reserva</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu ">
                                    <li class="nav-item">
                                        <a href="reservasEstado.php" class="nav-link ">
                                            <span class="title">Por confirmar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="reservaConfirmada.php" class="nav-link ">
                                            <span class="title">Confirmadas</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper ">
                <div class="page-content ">
                
                <h1 class="">
                    Modificar Cliente<small>	<?php $curdate=date("d/m/Y"); echo  $curdate; ?> </small>
                </h1>
                    <!-- start widget -->
                    
                    <!-- end widget -->
					
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-blue">
                                <div class="card-head">
                                    <header>&nbsp;&nbsp;&nbsp;CLIENTE</header>
                                </div>
                                <div class="card-body ">
                                    <div class="table-responsive">
										<form action="" method="post" style="margin-left:34%; margin-top:1%; margin-bottom:3%;">
											<div class="">
												<div class="col-md-6 col-sm-6" style="text-align:center;">
													<div class="form-group">
														<label>Nombre</label>
														<input type="text" class="form-control" name="name" value="<?php if($resultado) echo $resultado['name']; ?>" >
													</div>
													<div class="form-group">
														<label>Telefono</label>
														<input type="text" class="form-control" name="phone" value="<?php if($resultado) echo $resultado['phone']; ?>" >
													</div>
													<div class="form-group">
														<label>Correo</label>
														<input type="text" class="form-control" name="email" value="<?php if($resultado) echo $resultado['email']; ?>" disabled>
													</div>
													<div class="form-group">
														<label>Usuario</label>
														<input type="text" class="form-control" name="user" value="<?php if($resultado) echo $resultado['user']; ?>" disabled>
													</div>
												</div>
											</div></br>
											<div class="btn__group" style=" margin-left: 14%; " >
												<a href="clientesHistorial.php" class="btn btn-circle btn-danger">Cancelar</a>
                                                <input type="submit" name="guardar" value="Guardar" class="btn btn-circle btn-success">
                                            </div>
										</form>
                                    </div>
                                </div>
							</div>
                        </div>
					</div>
            </div>
                    <!-- end page content -->
                   
                </div>
                <!-- end page container -->
            </div>
            <!-- start js include path -->
            <script src="assets/plugins/jquery/jquery.min.js "></script>
            <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js "></script>
            <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js "></script>
            <script src="assets/plugins/popper/popper.min.js "></script>
            <!-- bootstrap -->
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js "></script>
            <!-- Common js-->
            <script src="assets/js/app.js "></script>
            <script src="assets/js/layout.js "></script>
            <script src="assets/js/theme-color.js "></script>
            <!-- Material -->
            <script src="assets/plugins/material/material.min.js "></script>
            <!-- animation -->
            <script src="assets/js/pages/ui/animations.js "></script>
            <!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:38:07 GMT -->

</html>