<?php
    session_start();

    if(!isset($_SESSION['user'])){
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


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:38:06 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Resort House | Servicios | Servicios No Incluidos</title>
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
                                <img alt="" class="img-circle " src="..." />
                                <span class="username username-hide-on-mobile"> </span>
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
                            <li class="nav-item start ">
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
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="reservation.php" class="nav-link nav-toggle ">
                                    <i class="material-icons ">vpn_key</i>
                                    <span class="title ">Reserva</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item">
                                        <a href="reservation.php" class="nav-link ">
                                            <i class="material-icons">hotel</i>
                                            <span class="title">Habitación</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="reservationTour.php" class="nav-link ">
                                            <i class="material-icons">terrain</i>
                                            <span class="title">Tour</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  start active">
                                <a href="contact.php" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Contactanos</span>
                                </a>
                            </li>
                            

                            <br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br>

                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper ">
                <div class="page-content ">

                    <h1 class="">
                        Contactanos<small>	<?php $curdate=date("d/m/Y"); echo  $curdate; ?> </small>
                    </h1>
                    <hr>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.6879207308502!2d-75.5186426846669!3d10.446320268055059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef6254312e54b07%3A0x96a76383f1b4c3b1!2sAeropuerto%20Internacional%20Rafael%20N%C3%BA%C3%B1ez!5e0!3m2!1ses!2sco!4v1605184983587!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div style="    position: relative;
                                    margin: 0px auto;
                                    top: -440px;
                                    display: block;
                                ">
                        <article itemscope="" itemtype="http://schema.org/PostalAddress" style=" padding: 20px;
                                                                                                position: absolute;
                                                                                                width: 250px;
                                                                                                right: 10px;
                                                                                                top: 20px;
                                                                                                background: rgba(0, 0, 0, 0.65);
                                                                                                z-index: 2;
                                                                                                color: #fff;
                        
                                                                                                ">
                            <header style="padding-bottom: 15px;
                                            border-bottom: 1px solid #aaa;
                                            text-transform: uppercase;
                                            font: 18px 'Georgia',Serif;
                                            text-align: center;
                                        ">
                                    Datos de contacto
                            </header>
                            <section style="line-height: 20px;
                                            font-size: 14px;
                                            padding: 15px 0 30px;
                                            text-align: center;
                                            font-family: 'Raleway',sans-serif;
                                            ">
                                <div style="margin-bottom: 10px; line-height: 20px;"> <strong></strong> </div>
                                <div style="font-size: 14px; "><span style="line-height: 20px; font-size: 14px;" itemprop="streetAddress">Calle 000 nº 00-00 </span> <span style="line-height: 20px; font-size: 14px;" itemprop="postalCode">110111</span> <span style="line-height: 20px; font-size: 14px;" itemprop="addressLocality">Cartagena</span> <span style="line-height: 20px; font-size: 14px;" itemprop="addressCountry">Colombia</span></div>
                                <div data-display="Reservas: ">Reservas: <span itemprop="telephone">57 000000</span></div>
                                <div data-display=""></div>
                                
                                <!-- -->
                            </section>
                            <section data-display="" style="display: none; line-height: 20px;">
                                <div> <strong></strong> </div>
                                <div><span itemprop="streetAddress"><!--Calle 100 nº 14-26 --></span> <span itemprop="postalCode"><!--110111--></span> <span itemprop="addressLocality"><!--Bogotá--></span> <span itemprop="addressCountry"><!--Colombia--></span></div>
                                <div style="display: none;" data-display=""><span itemprop="telephone"></span></div>
                                <div style="display: none;"  data-display=""></div>
                                <div style="display: none;"  data-display=""></div><a href="mailto:resort.house.h@gmail.com"></a><div>
                            </div></section>
                            <label style="display: block;
                                        border: 2px solid #fff;
                                        margin: 20px auto 0;
                                        padding: 10px;
                                        text-transform: uppercase;
                                        font: bold 14px 'Raleway';
                                        letter-spacing: 1px;
                                        max-width: 200px;
                                        color: #fff;
                                        cursor: pointer;" 
                            tabindex="0" data-text="Contactar ahora" for="tpl-formContact1" data-toggle="modal" data-target="#exampleModal">Contactar ahora</label>

                        </article>
                    </div>

                    <script>
                        function comprobar(obj){   
                            if (obj.checked){
                                document.getElementById('submit').disabled = false;
                            }else{
                                document.getElementById('submit').disabled = true;
                            }
                        }
                    </script>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="margin-top: 200px;">
                        <div class="modal-content"  >
                        <div class="modal-header">
                            <h3 style="padding-left: 35%;" class="modal-title" id="exampleModalLabel">CONTACTO</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" style="padding-left: 6%;">
                                    
                                    <div>
                                        
                                    </div>
                                    <label style="margin-right: 50px;">
                                        <span>Nombre y Apellidos <b style="color: orange;"> * </b></span>
                                        <br>
                                        <input type="text" name="name" placeholder="Nombre y Apellidos" style="width: 350px; margin-top: 15px;" required>
                                    </label>
                                    <label style="margin-right: 50px; margin-top: 10px;">
                                        <span >Email <b style="color: orange;"> * </b></span>
                                        <br>
                                        <input type="email" name="email" placeholder="Email" style="width: 350px; margin-top: 15px;" required>
                                    </label>
                                    <br>
                                    <label style="margin-right: 50px; margin-top: 10px;">
                                        <span>Comentarios <b style="color: orange;"> * </b></span>
                                        <br>
                                        <textarea placeholder="Escribe aquí" name="comentarios" style="width: 350px; height: 100px; margin-top: 15px;" required></textarea>
                                    </label>
                                    <br>
                                    <label style="font-size: 12px;">
                                    <input name="chec" type="checkbox" id="chec" onChange="comprobar(this);"/>
                                        <span for="chec">
                                            Acepto las <a href="aviso-legal.php" target="_blank" style="color: orange;">condiciones legales</a>
                                        </span>
                                    </label>
                                    <div style="font-size: 12px;"><b style="color: orange;"> * </b>Campos Obligatorios </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                            <input  type="submit" id="submit" name="submit" value="Enviar" class="btn btn-outline-info" disabled/> 
                        </div>
                        </div>
                    </div>
                    </div>

                    <?php

                        include_once 'conexion.php';
                        if(isset($_POST['submit'])){
                            									
							$sql="INSERT INTO `contacto`(`name`, `email`,`comentarios`) VALUES ('$_POST[name]','$_POST[email]','$_POST[comentarios]')";
                                      
                            if (mysqli_query($con,$sql)){
                                echo "<script type='text/javascript'> alert('Formulario Enviado! Nos comunicaremos pronto con usted')</script>";
							}else{
								echo "<script type='text/javascript'> alert('Error. Su formuluario no pudo enviarse, intente mas tarde')</script>";		
                            }
                        }
                                    
                    ?>
                    
                    <!---->

                    <div style="margin-top: 20px; margin-left: 8%;">
                        <article>
                            <header>
                                <div><a href="home.php" style="color: orange;"><b>Home</b> </a> <span>&gt;</span> Contactanos</div>
                                <hr>
                            </header>
                        </article>
                    </div>




                    <div style="text-align: center; margin-left:15%; margin-right: 15%;">

                        <h2>Contacto</h2>
                        <div style="color: orange;"> ---- &nbsp;&nbsp;&nbsp;&nbsp; Resort House &nbsp;&nbsp;&nbsp;&nbsp; ---- </div>
                        <br>
                        El Bogotá 100 Design Hotel se encuentra en la Calle 100, una de las avenidas principales de la ciudad. La cercanía a la autopista Norte y a la Carrera 7 garantiza excelentes conexiones por carretera.
                        
                        <h4>Desde el Aeropuerto</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio unde illum perferendis non suscipit earum, esse dolorem impedit amet eos at rerum voluptates sunt cupiditate, molestiae dolorum magnam provident perspiciatis.
                        </p>

                        <h4>Desde la estación de tren</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum exercitationem facere voluptatibus repellat eius perspiciatis perferendis iste officia possimus laborum culpa doloribus suscipit eum aliquid praesentium, quis obcaecati consequuntur? Officia?
                        </p>

                    </div>


                    

                   
                    
                <!--Habitación 4 Queen-->

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