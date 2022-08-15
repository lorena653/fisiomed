<?php
if(isset($_POST['registrarse'])){
include 'conexion.php';

$nombres = $_POST["nombres"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$insertar ="INSERT INTO `registro`(`nombres`, `email`, `usuario`, `contraseña`) VALUES ('$nombres','$email','$usuario','$contraseña')";

$resultado = mysqli_query($conec, $insertar);
mysqli_close($conec);
}
?>