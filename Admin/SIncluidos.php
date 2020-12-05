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
    <title>Resort House | Servicios | Habitaciones</title>
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
    <link rel="stylesheet" href="./assets/css/shabit.css">
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
                        <img alt="" src="assets/img/LogoC.png" width="45px" height="45px">
                        <span class="logo-default">Resort House</span> </a>
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
                            <li class="nav-item ">
                                <a href="home.php" class="nav-link nav-toggle">
                                    <i class="material-icons">favorite</i>
                                    <span class="title">Inicio</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item start active">
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
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper ">
                <div class="page-content ">

                    <h1 class="">
                        Servicios Incluidos<small>	<?php $curdate=date("d/m/Y"); echo  $curdate; ?> </small>
                    </h1>

                    <div class="card-group" style="padding-right:0px; margin-top:20px;">
                        <div class="card mb-3" >
                           <img style="height:345px;" src="assets/img/servicios/limpieza.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Limpieza asegurada</h4>
                                <p class="card-text"> Sin duda es una de las grandes ventajas de hospedarse en un hotel. Unas vacaciones no terminan de serlo si tienes que andar preocupándote de 
                                mantener la habitación limpia y ordenada. En los hoteles podrás olvidarte por completo de ello, ya que disponen de equipos de limpieza cualificados que dejarán tu habitación como el primer día: cama hecha, toallas nuevas, baño limpio y ni un rastro de desorden. 
                                    
                                     </p> 
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>

                        <div class="card mb-3" style="margin-left:35px">
                            <img style="height:345px;" src="assets/img/servicios/recepcion.jpg"  alt="">
                            <div class="card-body">
                                <h4 class="card-title">Recepción 24h</h4>
                                <p class="card-text">Puede que no vayas a necesitar nada durante la madrugada o que estés fuera del hotel todo el día, pero siempre va a haber mínimo una persona en la recepción del hotel para solventar cualquier inconveniente que tenga algún huésped del hotel. </p> <br>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>

                        <div class="card mb-3" style="margin-left:35px">
                            <img style="height:345px;" src="assets/img/servicios/tranquilidad.jpg"  alt="">

                            <div class="card-body">
                                <h4 class="card-title">Tranquilidad absoluta</h4>
                                <p class="card-text"> La insonoridad que brindan los hoteles le da puntos extra a la hora de buscar el descanso nocturno. Cuando duermes, seguro que te gusta hacerlo en silencio, con una tranquilidad absoluta y sin que nadie te moleste. En nuestros hoteles te aseguramos que aunque te encuentres en pleno centro de la ciudad, no oirás nada de ruido cuando desees descansar.
                                    
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>



                    <div class="card-group" style="padding-right:0px; margin-top:20px;">
                        <div class="card mb-3" >
                           <img style="height:345px;" src="assets/img/servicios/zh.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Zonas Humedas</h4>
                                <p class="card-text"> Finaliza tu día con una sesión de spa, un masaje o un tiempo de calidad en la piscina del hotel.
                                     </p> 
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>

                        <div class="card mb-3" style="margin-left:35px">
                            <img style="height:345px;" src="assets/img/servicios/ubicacion.jpg"  alt="">
                            <div class="card-body">
                                <h4 class="card-title">Ubicación precisa y céntrica</h4>
                                <p class="card-text">La localización es uno de los primeros factores y ventajas de alojarse en un hotel. Los hoteles suelen encontrarse en localizaciones precisas y que le convienen a los huéspedes. </p> <br>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>

                        <div class="card mb-3" style="margin-left:35px">
                            <img style="height:345px;" src="assets/img/servicios/parqueadero.jpg"  alt="">

                            <div class="card-body">
                                <h4 class="card-title">Parqueadero</h4>
                                <p class="card-text">No te preocupor por donde vas a dejar tu automovil o tu moto mientras te hospedas con nosotros, tendras un parqueadero bajo techo donde va a estar seguro
                                </p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!---->
    </div>

    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container " data-close-on-body-click="false ">
        <div class="chat-sidebar ">
            <ul class="nav nav-tabs ">
                <li class="nav-item ">
                    <a href="#quick_sidebar_tab_1 " class="nav-link active tab-icon " data-toggle="tab ">Theme
							</a>
                </li>
                <li class="nav-item ">
                    <a href="#quick_sidebar_tab_2 " class="nav-link tab-icon " data-toggle="tab "> Chat
							</a>
                </li>
                <li class="nav-item ">
                    <a href="#quick_sidebar_tab_3 " class="nav-link tab-icon " data-toggle="tab "> Settings
							</a>
                </li>
            </ul>
            <div class="tab-content ">
                <div class="tab-pane chat-sidebar-settings in show active animated shake " role="tabpanel " id="quick_sidebar_tab_1 ">
                    <div class="slimscroll-style ">
                        <div class="theme-light-dark ">
                            <h6>Sidebar Theme</h6>
                            <button type="button " data-theme="white " class="btn lightColor btn-outline btn-circle m-b-10 theme-button ">Light
										Sidebar</button>
                            <button type="button " data-theme="dark " class="btn dark btn-outline btn-circle m-b-10 theme-button ">Dark
										Sidebar</button>
                        </div>
                        <div class="theme-light-dark ">
                            <h6>Sidebar Color</h6>
                            <ul class="list-unstyled ">
                                <li class="complete ">
                                    <div class="theme-color sidebar-theme ">
                                        <a href="# " data-theme="white "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="dark "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="blue "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="indigo "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="cyan "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="green "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="red "><span class="head "></span><span
														class="cont "></span></a>
                                    </div>
                                </li>
                            </ul>
                            <h6>Header Brand color</h6>
                            <ul class="list-unstyled ">
                                <li class="theme-option ">
                                    <div class="theme-color logo-theme ">
                                        <a href="# " data-theme="logo-white "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-dark "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-blue "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-indigo "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-cyan "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-green "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="logo-red "><span class="head "></span><span
														class="cont "></span></a>
                                    </div>
                                </li>
                            </ul>
                            <h6>Header color</h6>
                            <ul class="list-unstyled ">
                                <li class="theme-option ">
                                    <div class="theme-color header-theme ">
                                        <a href="# " data-theme="header-white "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-dark "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-blue "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-indigo "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-cyan "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-green "><span class="head "></span><span
														class="cont "></span></a>
                                        <a href="# " data-theme="header-red "><span class="head "></span><span
														class="cont "></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Doctor Chat -->
                <div class="tab-pane chat-sidebar-chat animated slideInRight " id="quick_sidebar_tab_2 ">
                    <div class="chat-sidebar-list ">
                        <div class="chat-sidebar-chat-users slimscroll-style " data-rail-color="#ddd " data-wrapper-class="chat-sidebar-list ">
                            <div class="chat-header ">
                                <h5 class="list-heading ">Online</h5>
                            </div>
                            <ul class="media-list list-items ">
                                <li class="media "><img class="media-object " src="assets/img/user/user3.jpg " width="35 " height="35 " alt="... ">
                                    <i class="online dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">John Deo</h5>
                                        <div class="media-heading-sub ">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media ">
                                    <div class="media-status ">
                                        <span class="badge badge-success ">5</span>
                                    </div> <img class="media-object " src="assets/img/user/user1.jpg " width="35 " height="35 " alt="... ">
                                    <i class="busy dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Rajesh</h5>
                                        <div class="media-heading-sub ">Director</div>
                                    </div>
                                </li>
                                <li class="media "><img class="media-object " src="assets/img/user/user5.jpg " width="35 " height="35 " alt="... ">
                                    <i class="away dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Jacob Ryan</h5>
                                        <div class="media-heading-sub ">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media ">
                                    <div class="media-status ">
                                        <span class="badge badge-danger ">8</span>
                                    </div> <img class="media-object " src="assets/img/user/user4.jpg " width="35 " height="35 " alt="... ">
                                    <i class="online dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Kehn Anderson</h5>
                                        <div class="media-heading-sub ">CEO</div>
                                    </div>
                                </li>
                                <li class="media "><img class="media-object " src="assets/img/user/user2.jpg " width="35 " height="35 " alt="... ">
                                    <i class="busy dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Sarah Smith</h5>
                                        <div class="media-heading-sub ">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media "><img class="media-object " src="assets/img/user/user7.jpg " width="35 " height="35 " alt="... ">
                                    <i class="online dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Vlad Cardella</h5>
                                        <div class="media-heading-sub ">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header ">
                                <h5 class="list-heading ">Offline</h5>
                            </div>
                            <ul class="media-list list-items ">
                                <li class="media ">
                                    <div class="media-status ">
                                        <span class="badge badge-warning ">4</span>
                                    </div> <img class="media-object " src="assets/img/user/user6.jpg " width="35 " height="35 " alt="... ">
                                    <i class="offline dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Jennifer Maklen</h5>
                                        <div class="media-heading-sub ">Nurse</div>
                                        <div class="media-heading-small ">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media "><img class="media-object " src="assets/img/user/user8.jpg " width="35 " height="35 " alt="... ">
                                    <i class="offline dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Lina Smith</h5>
                                        <div class="media-heading-sub ">Ortho Surgeon</div>
                                        <div class="media-heading-small ">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media ">
                                    <div class="media-status ">
                                        <span class="badge badge-success ">9</span>
                                    </div> <img class="media-object " src="assets/img/user/user9.jpg " width="35 " height="35 " alt="... ">
                                    <i class="offline dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Jeff Adam</h5>
                                        <div class="media-heading-sub ">Compounder</div>
                                        <div class="media-heading-small ">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media "><img class="media-object " src="assets/img/user/user10.jpg " width="35 " height="35 " alt="... ">
                                    <i class="offline dot "></i>
                                    <div class="media-body ">
                                        <h5 class="media-heading ">Anjelina Cardella</h5>
                                        <div class="media-heading-sub ">Physiotherapist</div>
                                        <div class="media-heading-small ">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings animated slideInUp " id="quick_sidebar_tab_3 ">
                    <div class="chat-sidebar-settings-list slimscroll-style ">
                        <div class="chat-header ">
                            <h5 class="list-heading ">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list ">
                                <div class="setting-item ">
                                    <div class="setting-text ">Sidebar Position</div>
                                    <div class="setting-set ">
                                        <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left " selected="selected ">Left</option>
													<option value="right ">Right</option>
												</select>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Header</div>
                                    <div class="setting-set ">
                                        <select class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed " selected="selected ">Fixed</option>
													<option value="default ">Default</option>
												</select>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Sidebar Menu </div>
                                    <div class="setting-set ">
                                        <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
													<option value="accordion " selected="selected ">Accordion</option>
													<option value="hover ">Hover</option>
												</select>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Footer</div>
                                    <div class="setting-set ">
                                        <select class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed ">Fixed</option>
													<option value="default " selected="selected ">Default</option>
												</select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header ">
                                <h5 class="list-heading ">Account Settings</h5>
                            </div>
                            <div class="settings-list ">
                                <div class="setting-item ">
                                    <div class="setting-text ">Notifications</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-1 ">
														<input type="checkbox " id="switch-1 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Show Online</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-7 ">
														<input type="checkbox " id="switch-7 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Status</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-2 ">
														<input type="checkbox " id="switch-2 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">2 Steps Verification</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-3 ">
														<input type="checkbox " id="switch-3 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header ">
                                <h5 class="list-heading ">General Settings</h5>
                            </div>
                            <div class="settings-list ">
                                <div class="setting-item ">
                                    <div class="setting-text ">Location</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-4 ">
														<input type="checkbox " id="switch-4 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Save Histry</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-5 ">
														<input type="checkbox " id="switch-5 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item ">
                                    <div class="setting-text ">Auto Updates</div>
                                    <div class="setting-set ">
                                        <div class="switch ">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="switch-6 ">
														<input type="checkbox " id="switch-6 " class="mdl-switch__input "
															checked>
													</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    
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