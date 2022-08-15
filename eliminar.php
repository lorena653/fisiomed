<?php
include "conexion.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conec, "DELETE FROM `registro` WHERE `id`='$id'");
}
?>
<script type="text/javascript">
    alert("datos eliminados");
    window.location.href='administracion.php';
</script>