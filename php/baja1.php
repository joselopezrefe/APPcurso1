<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
$$conexion = mysqli_connect("localhost", "root", "123456", "base3") or die("No se pudo conectar a la base de datos");
?>
<?php
$$conexion = "DELETE FROM usuarios WHERE id=".$nombre1;
mysqli_query($conexion, "DELETE FROM (nombre, mail, codigocurso) values('$nombre', '$email', $codigo)") or die("No se pudo insertar". mysqli_error($conexion));
mysqli_close($conexion);
?>