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
?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:35:49 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Resort House | Sobre Nosotros</title>
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
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
                            <li class="nav-item start active">
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
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"></div>
                            </div>
                            <ol>

                            </ol>
                        </div>
                    </div>
                    
                    <!-- chart start -->
                    <i class="00fas fa-dice-d20"></i>
                        <div class="col-md-12">
                            <div class="card card-topline-blue">
                                <div class="card card-box ">
                                    <?php
                                        include ('conexion.php');
                                        $sql = "select * from roombook";
                                        $re = mysqli_query($con,$sql);
                                        $c =0;
                                        while($row=mysqli_fetch_array($re) ){
                                            $new = $row['stat'];
                                            $cin = $row['cin'];
                                            $id = $row['id'];

                                            if($new=="Not Conform"){
                                                $c = $c + 1;
                                            }
                                        }
                                    ?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                            
                                    </div>
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                
                                <div class="panel panel-primary">
                                        <div class="panel-heading" style="color: #fff; background-color: rgba(31, 114, 145); border-color: #428bca;">
                                            <h4 class="" style="margin-top: 0; margin-bottom: 0; font-size: 16px; color: inherit;">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <button class="btn btn-white bg-white"  type="button">
                                                    Nueva reserva de habitaciones
                                                <span class="badge"><?php echo $c ; ?></span>
                                            </button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: auto;"><!--panel-collapse in-->
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Titulo</th>
                                                        <th>Nombre</th>
                                                        <th>Email</th>
                                                        <th>Habitacion</th>
                                                        <th>Cama</th>
                                                        <th>Comida</th>
                                                        <th>Fecha Ingreso</th>
                                                        <th>Fecha Fin</th>
                                                        <th>Estado</th>
                                                        <th>Más</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
									$tsql = "select * from roombook";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	
										$co =$trow['stat']; 
										if($co=="Not Conform")
										{
											echo"<tr>
												<th>".$trow['id']."</th>
												<th>".$trow['Title']."</th>
												<th>".$trow['FName']."</th>
												<th>".$trow['Email']."</th>
												<th>".$trow['TRoom']."</th>
												<th>".$trow['Bed']."</th>
												<th>".$trow['Meal']."</th>
												<th>".$trow['cin']."</th>
												<th>".$trow['cout']."</th>
												<th>Sin Confirmar</th>
												
												<th><a href='roombook.php?rid=".$trow['id']." ' class='btn btn-primary'>Confirmar</a></th>
												</tr>";
										}	
									
									}
                                    ?>
                                    
                                        
                                    </tbody>
                                </table>
								
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                            </div>

								<?php
								
                                    $rsql = "SELECT * FROM `roombook`";
                                    $rre = mysqli_query($con,$rsql);
                                    $r =0;
                                    while($row=mysqli_fetch_array($rre) ){		
                                            $br = $row['stat'];
                                            if($br=="Conform"){
                                                $r = $r + 1;
                                            }
                                    }
						
								?>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="color: #fff; background-color: rgba(31, 114, 145); border-color: #428bca;">
                                        <h4 class="" style="margin-top: 0; margin-bottom: 0; font-size: 16px; color: inherit;">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
											<button class="btn btn-white bg-white" type="button">
												 Cuartos reservados
                                                <span class="badge"><?php echo $r ; ?></span>
											</button>
											
											</a>
                                        </h4>
                                    </div>
                                    <br>
                                    <div id="collapseOne" class="panel-collapse collapse " style=" padding-bottom:750px;">
                                        <div class="panel-body">
										<?php
										$msql = "SELECT * FROM `roombook`";
										$mre = mysqli_query($con,$msql);
										
										while($mrow=mysqli_fetch_array($mre) )
										{		
											$br = $mrow['stat'];
											if($br=="Conform")
											{
												$fid = $mrow['id'];
												 
                                            echo"<div class='col-md-3 col-sm-12 col-xs-12' 
                                                style=' width: 25%;  
                                                        position: relative;
                                                        min-height: 1px;  
                                                        padding-right: 15px;
                                                        padding-left: 15px; 
                                                        padding-bottom: 15px; 
                                                        display: block;
                                                        float: left;'>
                                                    <div class='panel panel-primary text-center no-boder bg-color-blue' 
                                                        style=' margin-bottom: 0;
                                                                overflow: hidden;
                                                                border-radius: 4px;     
                                                                background-color: #fff;
                                                                color: #4CB1CF; 
                                                                text-align: center;     
                                                                border: 1px solid #f3f3f3; 
                                                                width: 90%;' >

                                                        <div class='panel-body' 
                                                            style ='border-top-color: #bce8f1; 
                                                                    padding: 15px;' >
                                                            <i class='fa fa-users fa-5x' 
                                                                style=' font-size: 5em; 
                                                                        display: inline-block;
                                                                        font-family: FontAwesome;
                                                                        font-style: normal;
                                                                        font-weight: normal;
                                                                        line-height: 1; 
                                                                        box-sizing: border-box;'></i>

															<h3 style=' margin-top: 7px;
                                                                        margin-bottom: -5px; 
                                                                        font-size: 24px;     
                                                                        font-family: inherit;
                                                                        font-weight: 500;
                                                                        line-height: 1.1;'>
                                                                ".$mrow['FName']."
                                                            </h3>
														</div>
                                                        <div class='panel-footer back-footer-blue' 
                                                             style='background-color: #4CB1CF;
                                                                    color: #fff; 
                                                                    text-align: center;     
                                                                    font-size: 14px;
                                                                    line-height: 1.42857143; 
                                                                    padding:10px;'>
                                                        ".$mrow['TRoom']."
                                                        <br><br>
                                                        <a href=print.php?id=".$fid .">
                                                            <button  class='btn btn-white bg-white' data-toggle='modal' data-target='#myModal'>
													            Factura
                                                            </button>
                                                            
                                                        </a>
														</div>
													</div>	
											</div>";
											}
										}
										?>

                                        
                                           
										</div>
										
                                    </div>
                                    
									
                                </div>
                            </div>

        <!-- end page content -->
        
    </div>
    
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <?php
                        include ('conexion.php');
                        $sql = "select * from reservationtour";
                        $re = mysqli_query($con,$sql);
                        $c =0;
                        while($row=mysqli_fetch_array($re) ){
                            $new = $row['stat'];
                            $cin = $row['cin'];
                            $id = $row['id'];
                            if($new=="Not Conform"){
                                $c = $c + 1;
                            }
                        }
                    ?>
                                
                    <div class="panel panel-primary">
                            <div class="panel-heading" style="color: #fff; background-color: rgba(31, 114, 145); border-color: #428bca;">
                                <h4 class="" style="margin-top: 0; margin-bottom: 0; font-size: 16px; color: inherit;">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTres">
                                    <button class="btn btn-white bg-white"  type="button">
                                        Nueva reserva de tours
                                    <span class="badge"><?php echo $c ; ?></span>
                                </button>
								</a>
                            </h4>
                        </div>
                        <div id="collapseTres" class="panel-collapse collapse" style="height: auto;"><!--panel-collapse in-->
                            <div class="panel-body">
                               <div class="panel panel-default">
            
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Tour</th>
                                            <th>Fecha</th>
                                            <th>Valor</th>
                                            <th>Estado</th>
                                            <th>Más</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
						$tsql = "select * from reservationtour";
						$tre = mysqli_query($con,$tsql);
						while($trow=mysqli_fetch_array($tre) )
						{	
							$co =$trow['stat']; 
							if($co=="Not Conform")
							{
								echo"<tr>
									<th>".$trow['id']."</th>
									<th>".$trow['Title']."</th>
									<th>".$trow['FName']."</th>
									<th>".$trow['Email']."</th>
									<th>".$trow['Phone']."</th>
									<th>".$trow['TTour']."</th>
									<th>".$trow['cin']."</th>
									<th>".$trow['valor']."</th>
									<th>Sin Confirmar</th>
									
									<th><a href='reservationTour.php?rid=".$trow['id']." ' class='btn btn-primary'>Confirmar</a></th>
									</tr>";
							}	
						
						}
                        ?>
                        
                            
                        </tbody>
                    </table>
								
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

								<?php
								
                                    $rsqll = "SELECT * FROM `reservationtour`";
                                    $rree = mysqli_query($con,$rsqll);
                                    $r =0;
                                    while($row=mysqli_fetch_array($rree) ){		
                                            $br = $row['stat'];
                                            if($br=="Conform"){
                                                $r = $r + 1;
                                            }
                                    }
						
								?>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="color: #fff; background-color: rgba(31, 114, 145); border-color: #428bca;">
                                        <h4 class="" style="margin-top: 0; margin-bottom: 0; font-size: 16px; color: inherit;">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" class="collapsed">
											<button class="btn btn-white bg-white" type="button">
												 Tours reservados
                                                <span class="badge"><?php echo $r ; ?></span>
											</button>
											
											</a>
                                        </h4>
                                    </div>
                                    <br>
                                    <div id="collapseCuatro" class="panel-collapse collapse " style=" padding-bottom:750px;">
                                        <div class="panel-body">
										<?php
										$msqll = "SELECT * FROM `reservationtour`";
										$mree = mysqli_query($con,$msqll);
										
										while($mrow=mysqli_fetch_array($mree) )
										{		
											$br = $mrow['stat'];
											if($br=="Conform")
											{
												$fid = $mrow['id'];
												 
                                            echo"<div class='col-md-3 col-sm-12 col-xs-12' 
                                                style=' width: 25%;  
                                                        position: relative;
                                                        min-height: 1px;  
                                                        padding-right: 15px;
                                                        padding-left: 15px; 
                                                        padding-bottom: 15px; 
                                                        display: block;
                                                        float: left;'>
                                                    <div class='panel panel-primary text-center no-boder bg-color-blue' 
                                                        style=' margin-bottom: 0;
                                                                overflow: hidden;
                                                                border-radius: 4px;     
                                                                background-color: #fff;
                                                                color: #4CB1CF; 
                                                                text-align: center;     
                                                                border: 1px solid #f3f3f3; 
                                                                width: 90%;' >

                                                        <div class='panel-body' 
                                                            style ='border-top-color: #bce8f1; 
                                                                    padding: 15px;' >
                                                            <i class='fa fa-users fa-5x' 
                                                                style=' font-size: 5em; 
                                                                        display: inline-block;
                                                                        font-family: FontAwesome;
                                                                        font-style: normal;
                                                                        font-weight: normal;
                                                                        line-height: 1; 
                                                                        box-sizing: border-box;'></i>

															<h3 style=' margin-top: 7px;
                                                                        margin-bottom: -5px; 
                                                                        font-size: 24px;     
                                                                        font-family: inherit;
                                                                        font-weight: 500;
                                                                        line-height: 1.1;'>
                                                                ".$mrow['FName']."
                                                            </h3>
														</div>
                                                        <div class='panel-footer back-footer-blue' 
                                                             style='background-color: #4CB1CF;
                                                                    color: #fff; 
                                                                    text-align: center;     
                                                                    font-size: 14px;
                                                                    line-height: 1.42857143; 
                                                                    padding:10px;'>
                                                        ".$mrow['TTour']."
                                                        <br><br>
                                                        <a href=printTour.php?id=".$fid .">
                                                            <button  class='btn btn-white bg-white' data-toggle='modal' data-target='#myModal'>
													            Factura
                                                            </button>
                                                            
                                                        </a>
															
														</div>
													</div>	
											</div>";
											}
										}
										?>

                                        
                                           
										</div>
										
                                    </div>
                                    
									
                                </div>
                            </div>


    <!-- end page container -->
    <!-- start footer -->
    <!--<div class="page-footer">
        <div class="page-footer-inner"> 2018 &copy; Spice Hotel Template By
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>-->
    <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js"></script>
    <!-- morris chart -->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/morris/raphael-min.js"></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js"></script>
    <!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:36:48 GMT -->

</html>