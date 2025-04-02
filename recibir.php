<?php

include 'conexion.php';

$ID = $_POST['id'];
$Nombre = $_POST ['nombre'];
$Correo_Electronico = $_POST ['correo'];
$Contraseña = $_POST ['contrasena'];
$Direccion = $_POST ['direccion'];
$Telefono = $_POST ['telefono'];
$Fecha_Registro = $_POST ['Fecha_Registro'];

$sql = "INSERT INTO users(id,nombre,email,contraseña,direccion,telefono,fecha_registro) VALUES('$Nombre','$Correo_Electronico','$Contraseña','$Direccion','$Telefono','$Fecha_Registro')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Registro exitoso";
}

else{
    echo "Fallo al registrar";
}


?>
