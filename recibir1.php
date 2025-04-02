<?php

include 'conexion.php';

$Nombre = $_POST ['nombre'];
$Correo_Electronico = $_POST ['correo'];
$Contraseña = $_POST ['contrasena'];
$Direccion = $_POST ['direccion'];
$Telefono = $_POST ['telefono'];
// $Fecha_Registro = $_POST ['Fecha_Registro'];
$Fecha_Registro = date('Y-m-d H:i:s');


$sql = "INSERT INTO usuarios(nombre,correo,contrasena,direccion,telefono,Fecha_registro) VALUES('$Nombre','$Correo_Electronico','$Contraseña','$Direccion','$Telefono','$Fecha_Registro')";

$result = mysqli_query($conn, $sql);

if ($result) {
    $resultado = "Registro exitoso";
}

else{
    $resultado = "Error al registrar";
}

header('Location: Formulario_registro1.php?var='.$resultado);

?>
