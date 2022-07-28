<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $codigo = $_POST['codigo'];

    $conexion = mysqli_connect("localhost", "root", "123456", "base3") or die ("No se pudo conectar a la base de datos");
    mysqli_query($conexion, "insert into alumnos (nombre, mail, codigocurso) values('$nombre', '$email', $codigo)") or die("No se pudo insertar". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "Usuario insertardo correctamente";


?>