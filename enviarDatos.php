<?php
include 'conexion.php';

$name = utf8_decode($_POST['name']);
$correoEle = utf8_decode($_POST['correoEle']);
$celular = utf8_decode($_POST['celular']);
$vehiculo = utf8_decode($_POST['vehiculo']);


if (!empty($name) && !empty($correoEle) && !empty($celular) && !empty($vehiculo) ){
    $query = "INSERT INTO cotizar(name, correoEle, celular, vehiculo) VALUES ('$name', '$correoEle', '$celular', '$vehiculo')";
    if ( $conexion->query($query)){
        echo "<script>location='gracias.php'</script>";
    }else{
        die($conexion->error);
    }
}else{
    echo 'hubo un error al procesar la solicitud';
}