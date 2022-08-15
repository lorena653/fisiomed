<?php
include 'conexion.php';
$email2=$_POST['email2'];
$contraseña2=$_POST['contraseña2'];
session_start();
$_SESSION['email2']=$email2;

$jefe="SELECT*FROM administradora where email='$email2' and contraseña='$contraseña2'";
$inicio3=mysqli_query($conec, $jefe);

$admimi=mysqli_num_rows($inicio3);

if($admimi){
  header("location:administracion.php");
}
else{

$consulta="SELECT*FROM registro where email='$email2' and contraseña='$contraseña2'";
$inicio2=mysqli_query($conec, $consulta);

$cuenta=mysqli_num_rows($inicio2);

if($cuenta){
    header("location:index.php");
}
else{  
  header("location:registrarse.php");
  echo"alert('cuenta incorrecta')";
}
mysqli_free_result($inicio2);
}
mysqli_close($conec);
?>