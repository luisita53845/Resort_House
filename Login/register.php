<?php 
    //include_once 'conexion.php';
    $con=mysqli_connect("localhost","root","","resort_house");
	
    if(isset($_POST['guardar'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $userr=$_POST['user'];
        $contrasena=$_POST['contrasena'];

        //Encriptar contraseña
        $contrasena = hash('sha512', $contrasena);

        $check="SELECT * FROM cliente WHERE email = '$_POST[email]'";
        $rs = mysqli_query($con,$check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);

        $checkk="SELECT * FROM cliente WHERE user = '$_POST[user]'";
        $rss = mysqli_query($con,$checkk);
        $dataa = mysqli_fetch_array($rss, MYSQLI_NUM);

        if($data >= 1) {
            echo "<script type='text/javascript'> alert('El correo ya existe, intente con otro')</script>";                             
        }else if($dataa >= 1){
            echo "<script type='text/javascript'> alert('El usuario ya existe, intente con otro')</script>";                                 
        }else{
            include_once 'conexion.php';
            if(!empty($name) && !empty($phone) && !empty($email) && !empty($userr) && !empty($contrasena) ){
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "<script> alert('Correo no valido');</script>";
                }else{
                    $consulta_insert=$con->prepare('INSERT INTO cliente(name,phone,email,user,contrasena) VALUES(:name,:phone,:email,:user,:contrasena)');
                    $consulta_insert->execute(array(
                        ':name' =>$name,
                        ':phone' =>$phone,
                        ':email' =>$email,
                        ':user' =>$userr,
                        ':contrasena' =>$contrasena
                    ));
                    header('Location: validar.php');
                }
            }else{
                echo "<script> alert('Los campos estan vacios');</script>";
            }

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

                        <script>
                            function comprobar(obj){   
                                if (obj.checked){
                                    document.getElementById('submit').disabled = false;
                                }else{
                                    document.getElementById('submit').disabled = true;
                                }
                            }
                        </script>

                        <div class="page-links">
                            <a href="login.php">Iniciar Sesion</a><a href="register2.html" class="active">Registrar</a>
                        </div>
                        <form action="" method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required>
                            <input class="form-control" type="text" name="phone" placeholder="Telefono" required>
                            <input class="form-control" type="email" name="email" placeholder="Correo Electronico " required>
                            <input class="form-control" type="text" pattern=".{6,}" title="Su usuario debe ser superior a 6 caracteres"  name="user" placeholder="Usuario" required>
                            <input class="form-control" type="password" pattern=".{8,}" title="Su contraseña debe ser superior a 8 caracteres" name="contrasena" placeholder="Contraseña" required>
                            <input type="checkbox" id="chec" name="chec" onChange="comprobar(this);"/>
                                <label for="chec" style="color: grey;">Acepto las <a data-toggle="modal" data-target="#staticBackdrop" target="_blank" style="color: white;">Politicas de Privacidad</a></label>

                            <div class="form-button">
								<!--<a href="index.php" class="btn btn__danger">Cancelar</a>
								<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">-->
                                <button id="submit" type="submit" name="guardar" value="Guardar" class="btn btn-outline-light" style="border: white 2px solid;" disabled>Registrar</button>
                            </div>
                        </form>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Politicas de Privacidad</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="padding: 30px;">
                                        <div style="color: orange;"> ---- &nbsp;&nbsp;&nbsp;&nbsp; Resort House &nbsp;&nbsp;&nbsp;&nbsp; ---- </div>
                                        <h4 style="color: black;">Proteccion de Datos</h4>

                                        <p style="text-align: justify; color: black;">
                                            Como consecuencia de la navegación en la web y del cumplimiento de los formularios de la web, el usuario acepta que los datos personales por él facilitados o que se faciliten en el futuro a través de dicho servicio, sean objeto de tratamiento en ficheros de datos de carácter personal del establecimiento, incluyendo la recopilación de datos de acceso y la utilización de cookies y funciones proporcionadas por terceros.
                                        </p>

                                        <h4 style="color: black;">Finalidad del tratamiento, base legal y destinatarios de la información</h4>

                                        <p>
                                            <b>Los datos se utilizan para:</b> 

                                            <ul style="text-align: left;">
                                                <li>Permitir el funcionamiento de la web</li>
                                                <li>Registrar y atender las solicitudes realizadas por los usuarios a través de los formularios de la web</li>
                                                <li>La prestación y administración los servicios del hotel, la tramitación de reservas y el cobro</li>
                                                <li>Elaborar analíticas web y estadísticas</li>
                                                <li>Incluir funciones proporcionadas por terceros (Google Maps, etc)</li>
                                            </ul>
                                            <br>

                                            <b>Navegación en la web y acceso a áreas para usuarios registrados</b> 

                                            <ul style="text-align: left;">
                                                <li>Finalidad: se tratan los datos necesarios para la provisión de los servicios en línea, incluyendo el registro de direcciones IP, páginas visitadas y fecha de acceso, así como información sobre el terminal del usuario. Los datos también se tratan para fines de seguridad y de mejora de la web.</li>
                                                <li>Legitimación: el tratamiento de los datos es necesario para la provisión de los servicios en línea; consentimiento, expresado a través de la utilización de la web</li>
                                                <li>Destinatarios y transferencias: establecimiento, empresas de alojamiento web</li>
                                            </ul>
                                            <br>

                                            <b>Utilización de los formularios de la web</b> 

                                            <ul style="text-align: left;">
                                                <li>Finalidad: atender las solicitudes realizadas a través de los formularios web.</li>
                                                <li>Legitimación: consentimiento expresado al utilizar y enviar el formulario</li>
                                                <li>Destinatarios y transferencias: establecimiento y empresas involucradas en prestar los servicios solicitados</li>
                                            </ul>
                                            <br>

                                            <b>Prestación de Servicios</b> 

                                            <ul style="text-align: left;">
                                                <li>Finalidad: prestar los servicios incluyendo gestión de reservas hoteleras y pago. Enviar información sobre los servicios del establecimiento por medios electrónicos. Encuestas de calidad.</li>
                                                <li>Legitimación: ejecución del contrato o prestación del servicio.</li>
                                                <li>Destinatarios y transferencias: establecimiento y empresas involucradas en prestar los servicios solicitados</li>
                                            </ul>
                                            <br>

                                            <b>Analíticas Web</b> 

                                            <ul style="text-align: left;">
                                                <li>Finalidad: conocer la manera en que la web es buscada, accedida y utilizada por el público. Pueden implicar la recopilación de datos de carácter personal como por ejemplo la dirección IP, la localización de la conexión, la información sobre el software o hardware de navegación, etc.</li>
                                                <li>Legitimación: consentimiento, expresado a través de la utilización de la web</li>
                                                <li>Destinatarios y transferencias: establecimiento</li>
                                            </ul>
                                            <br>

                                            <b>Funciones proporcionadas terceros</b> 

                                            <ul style="text-align: left;">
                                                <li>Finalidad: incorporar funciones proporcionados por terceros, como mapas, analíticas, botones sociales, widget de chat Zendesk, etc</li>
                                                <li>Legitimación: consentimiento, expresado a través de la utilización de la web</li>
                                                <li>Destinatarios y transferencias: Las funciones de terceros establecen una conexión directa entre el navegador del usuario y los dominios de Internet de los terceros, permitiendo la descarga y ejecución de la función, inclusive desde páginas fuera del Espacio Económico Europeo.</li>
                                            </ul>
                                            <br>

                                            Esta web integra funciones de Google Inc, como Google Analytics y Google Maps. Al utilizar esta web el usuario autoriza el tratamiento de sus datos por Google conforme lo establecido en su política de privacidad: https://policies.google.com/privacy

                                            <h4 style="color: black;">Veracidad de los Datos</h4>

                                            <p style="color: black;">
                                            El usuario debe rellenar los formularios con datos verdaderos, exactos, completos y actuales. El usuario no introducirá datos correspondientes a otra persona; se presumirá que los datos han sido facilitados por el titular de los mismos. El usuario será el único responsable de cualquier daño o perjuicio, directo o indirecto que pudiera ocasionar a cualquier persona a causa de la cumplimentación del formulario con datos relativos a otra persona.
                                            </p>

                                            <h4 style="color: black;">Derechos de acceso, rectificación, supresión, oposición y otros</h4>

                                            <p style="color: black;">
                                                El titular de los datos tiene en todo momento el derecho de acceder, rectificar, y suprimir los datos que lo conciernen, así como oponerse al tratamiento de sus datos, en los términos recogidos en la legislación de protección de datos. También tiene derecho a solicitar: la portabilidad de sus datos, la revocación del consentimiento prestado en su caso y la limitación del tratamiento.
                                                <br> El titular de los datos puede ejercer estos derechos mediante escrito dirigido por correo postal al establecimiento.
                                                <br> El solicitante debe incluir esta comunicación solicitud firmada indicando la actuación que se solicita y fotocopia del DNI o pasaporte.
                                                <br> El titular de los datos también puede oponerse a la recepción de e-mails comerciales, para ello bastará que lo solicite mediante un correo electrónico remitido desde la dirección que desea dar de baja y dirigido al establecimiento.
                                                <br> El titular de los datos, si considera que el tratamiento de sus datos infringe la legislación de protección de datos, puede realizar una queja ante las autoridades de control de protección de datos.
                                            </p>

                                            <h4 style="color: black;">Menores de edad</h4>

                                            <p style="color: black;">
                                                Se prohíbe la utilización de los servicios web a personas menores de 18 años.
                                            </p>

                                            <h4 style="color: black;">Seguridad de los datos</h4>

                                            <p style="color: black;">
                                                Esta web tiene una de las tecnologías más seguras en cuanto a la protección de datos de su tarjeta de crédito se refiere. Asimismo, cumple todas las normas internacionales que legislan la materia. Todos los apartados donde solicitamos información sensible utilizan el protocolo de comunicación SSL. Esto quiere decir que la información que viaja a través de Internet desde su ordenador hasta nuestro servidor lo hace codificada, haciéndolos indescifrables a cualquier persona ajena. Esta tecnología asegura y garantiza, que sus datos no podrán ser interceptados, manipulados o suplantados, de ninguna manera. De esta forma el pago a través de Internet es hoy en día tan seguro como la compra directa.
                                            </p>

                                            <h4 style="color: black;">¿Qué significa SSL?</h4>

                                            <p style="color: black;">
                                                El SSL (Secure Socket Layer) es una tecnología estándar de seguridad en Internet. Aplica un sistema de encriptación (codificación) que proporciona la máxima confidencialidad de los datos que nos transmiten. Así se impide la entrada ilícita o intercepción en un sistema mientras los datos circulan por Internet. Para mayor seguridad, estos datos se almacenan en un servidor seguro protegido por un “firewall” en continua vigilancia.
                                            </p>

                                        </p>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>

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