<?php  
session_start();  
if(!isset($_SESSION["admin"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('conexion.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from reservationtour where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$email = $row['Email'];
					$Phone = $row['Phone'];
					$ttour = $row['TTour'];
					$valor = $row['valor'];
					$npeople = $row['NPeople'];
					$cin = $row['cin'];
					$sta = $row['stat'];
				
				}
					
				
		
    }
    
    $resss = ($valor * $npeople);
		
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
    <title>Clientes | Reservas | Solicitud</title>
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
                                        <a class="tooltips" data-placement="top" data-original-title="Profile">
                                            <i class="material-icons">person_outline</i>
                                        </a>
                                        <a class="tooltips" data-placement="top" data-original-title="Mail">
                                            <i class="material-icons">mail_outline</i>
                                        </a>
                                        <a class="tooltips" data-placement="top" data-original-title="Chat">
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
                            <li class="nav-item">
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
                            <li class="nav-item start active">
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
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper ">
                <div class="page-content ">
                    <div class="page-bar ">
                        <div class="page-title-breadcrumb ">
                            <div class=" pull-left ">
                                <div class="page-title "></div>
                            </div>
                            <ol>

                            </ol>
                        </div>
                    </div>
                    <!---->

                    <h1 class="">
                            Reserva de Tour<small>	<?php echo  $curdate; ?> </small>
                    </h1>

                    

                    <div class="row" >
                        <div class="col-md-12">
                            <div class="card card-topline-blue">
                                <div class="card-head">
                                    <header></header>
                                </div>
                                <div class="card-body ">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <tr>
                                            <th>DESCRIPCIÓN</th>
                                            <th>INFORMACIÓN</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>nombre</th>
                                            <th><?php echo $title." ".$fname ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th> No Telefono</th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Tour</th>
                                            <th><?php echo $ttour; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Nº De personas </th>
                                            <th><?php echo $npeople; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Fecha</th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Estado</th>
                                            <th>Sin Confirmar</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Valor del Tour</th>
                                            <th>$ <?php echo $valor; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Valor Total</th>
                                            <th>$ <?php echo $resss; ?></th>
                                        </tr>
                                        </table>
                                    </div>
                                </div>


                                <div class="" style="margin-left: 2%; width: 95%;">
                                    <form method="POST">
                                    <div class="form-group">
														<label>¿ Desea confirmar la reserva ?</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Confirmar</option>
															
															
														</select>
										 </div>
                                        
                                        <a href="reservasEstado.php" class="btn btn-circle btn-danger">Cancelar</a>
                                        <input type="submit" name="co" value="Confirmar" class="btn btn-circle btn-success">
                                    
                                    </form>
                                    <br>
                                </div>
                                <br>
                                
                            </div>
                        </div>
                    </div>

                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>

                    <!-- end page content -->
                   
                </div>
                <!-- end page container -->
                <!-- start footer -->
                <!--<div class="page-footer ">
                    <div class="page-footer-inner "> 2018 &copy; Spice Hotel Template By
                        <a href="mailto:redstartheme@gmail.com " target="_top " class="makerCss ">RedStar Theme</a>
                    </div>
                    <div class="scroll-to-top ">
                        <i class="icon-arrow-up "></i>
                    </div>
                </div>-->
                <!-- end footer -->
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
<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Conform")
							{
									$urb = "UPDATE `reservationtour` SET `stat`='$st' WHERE id = '$id'";
									
									if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $type_tour = $valor;       
                                                
                                                 $personas = $npeople;
                                                        
												$ttot = $type_tour * $personas;
													
															
													//echo "<script type='text/javascript'> alert('$count_date')</script>";
												$psql = "INSERT INTO `paymenttour`(`id`, `title`, `fname`, `ttour`, `npeople`, `cin`, `tot`, `ttot`) VALUES ('$id','$title','$fname','$ttour','$npeople','$cin','$type_tour','$ttot')";
												
												if(mysqli_query($con,$psql))
												{	
													echo "<script type='text/javascript'> alert('Reserva Confirmada')</script>";
													echo "<script type='text/javascript'> window.location='reservasEstado.php'</script>";
													
												}
												
											}
									
                                        
							}	
					
						}
					
?>