<?php
include "conexion.php";

$id=$_REQUEST['id'];
$nombres = $_POST["nombres"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$query ="UPDATE registro SET nombres='$nombres', email='$email', usuario='$usuario', contraseña='$contraseña' WHERE id='$id'";
$resultado= $conec->query($query);

if($resultado){
    header("location: administracion.php");
}
else{
    echo "Insercion no exitosa";
}


?>