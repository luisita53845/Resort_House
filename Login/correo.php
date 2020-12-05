<?php

    if (isset($_POST['guardar'])){
        if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['user']) && !empty($_POST['contrasena']) ){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $user=$_POST['user'];
            $contrasena=$_POST['contrasena'];
            $asunto = "¡¡¡ Bienvenido a La familia Resort House !!!";
            $header = "From : noreply@example.com" . "\r\n";
            $header = "Reply-To : noreply@example.com" . "\r\n";
            $header = "X-Mailer : PHP/". phpversion();
            $mail = @mail($email, $asunto, $user, $header);
            if ($mail){
                echo "<h4> Verifique su correo </h4>";
            }
        }
    }

?>