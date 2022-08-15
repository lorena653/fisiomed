<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/forma.css">
</head>
<body>
    
<header>
    <nav>
<div class="logo"><a href="#"> <img class="logo1" src="../lorena/imagenes/imagen3.jpeg" alt=""> </a> </div>

<div class="sesion"> <button botonprimero> <a href="index.html">Cerrar Sesion</a> </button> </div>
    </nav>
    
    </header>
  


    <div>
            <br>
            <?php

$id=$_REQUEST['id'];

$query="SELECT*FROM registro WHERE id='$id'";
$resultado= $conec->query($query);
$filas=$resultado->fetch_assoc();


?>
    
          <form action="proceso.php?id=<?php echo $filas['id']; ?>" method="POST">
          <p> Nombres </p>
              <input type="text" class="field" id="nombres"  name="nombres" value="<?php echo $filas['nombres']; ?>"><br>

            <p> Email </p>
              <input type="email" class="field" id="email" name="email" value="<?php echo $filas['email']; ?>"><br>

             <p> Usuario </p>
              <input type="text" class="field" id="usuario" name="usuario" value="<?php echo $filas['usuario']; ?>" ><br>

              <p> Contraseña</p>
              <input type="text" class="field" id="contraseña" name="contraseña" value="<?php echo $filas['contraseña']; ?>" ><br>
              <br>
              <button type="submit">Guardar</button>
              
          </form>  
     </div>

</body>
</html>