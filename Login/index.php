<?php
    session_start();

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "resort_house";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("No hay conexion".mysqli_connect_error());
    }
    
    $nombre = $_POST["user"];
    $pass = $_POST["contrasena"];
    $pass = hash('sha512', $pass);

    $query = mysqli_query($conn,"SELECT * FROM cliente WHERE user ='".$nombre."' and contrasena ='".$pass."' ");
    $nr = mysqli_num_rows($query);

    $contrasena = $_POST["contrasena"];

    if($nombre == "Admin" && $contrasena== "12345"){
        $_SESSION['admin'] = $nombre;
        header("Location: ../Admin/home.php");
        exit;
    }else if($nr == 1){
        $_SESSION['user'] = $nombre; //
        header("Location: ../User/home.php");
        exit;
        //echo "Hello: ".$nombre;
    }else if ($nr == 0){
        echo '
            <script> 
                alert("Los Datos no Coinciden");
                window.location = "login.php";
            </script>
        ';
        exit;
    }
?>

