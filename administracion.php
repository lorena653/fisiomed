<?php
include 'conexion.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/tabla.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <header>
    <nav>
<div class="logo"><a href="#"> <img class="logo1" src="../lorena/imagenes/imagen3.jpeg" alt=""> </a> </div>

<div class="sesion"> <button botonprimero> <a href="index.html">Cerrar Sesion</a> </button> </div>
    </nav>
    
    </header>
   
   <div class="tabla">   
    <table class="tabla">
     <thead>
         <th>ID</th>
         <th>Nombres</th>
         <th>Email</th>
         <th>Usuario</th>
         <th>Contraseña</th>
     </thead>
     <?php
    
    $sql= "SELECT * FROM `registro`";
    $result=mysqli_query($conec, $sql);

    while($filas=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
            echo "<td>"; echo $filas['id']; echo "</td>";
            echo "<td>"; echo $filas['nombres']; echo "</td>";
            echo "<td>"; echo $filas['email']; echo "</td>";
            echo "<td>"; echo $filas['usuario']; echo "</td>";
            echo "<td>"; echo $filas['contraseña']; echo "</td>";
            echo "<td> <a href='modificar.php?id=".$filas['id']."'><button type='button'>Modificar</button></a> </td>";
            echo "<td> <a href='eliminar.php?id=".$filas['id']."''><button type='button'>Eliminar</button></a> </td>"; 
        echo "</tr>";
    }
     ?>
    </table>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</html>