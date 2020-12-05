<?php
    include_once 'conexion.php';

    $nameT = $_REQUEST["nameT"];
    $description = $_REQUEST["description"];
    $time = $_REQUEST["duration"];
    $valor = $_REQUEST["valor"];

    $nameImg1 = $_REQUEST["name_img1"];
    $img1 = $_FILES ["img1"]["name"];

    $nameImg2 = $_REQUEST["name_img2"];
    $img2 = $_FILES ["img2"]["name"];

    $nameImg3 = $_REQUEST["name_img3"];
    $img3 = $_FILES ["img3"]["name"];

    $ruta1 = $_FILES["img1"]["tmp_name"];
    $ruta2 = $_FILES["img2"]["tmp_name"];
    $ruta3 = $_FILES["img3"]["tmp_name"];

    if($img1 == ""){
        $destino1 = "imgTours/default.jpg";
    }else{
        $destino1 = "imgTours/".$img1;
    }

    if($img2 == ""){
        $destino2 = "imgTours/default.jpg";
    }else{
        $destino2 = "imgTours/".$img2;
    }

    if($img3 == ""){
        $destino3 = "imgTours/default.jpg";
    }else{
        $destino3 = "imgTours/".$img3;
    }

    /*$destino1 = "imgTours/".$img1;
    $destino2 = "imgTours/".$img2;
    $destino3 = "imgTours/".$img3;*/

    copy($ruta1, $destino1);
    copy($ruta2, $destino2);
    copy($ruta3, $destino3);

    $newImg = ("INSERT INTO `tours`(`name`, `description`, `duration`, `valor`, `name_img1`, `img1`, `name_img2`, `img2`, `name_img3`, `img3`) VALUES ('$nameT','$description', '$time', '$valor', '$nameImg1', '$destino1', '$nameImg2', '$destino2', '$nameImg3', '$destino3' )");
    mysqli_query($con, $newImg);

    header("Location: toursRegistrar.php");

?>