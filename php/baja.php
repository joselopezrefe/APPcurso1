<?php
$nombre = $_POST['nombre'];
$conexion = mysqli_connect("localhost", "root", "123456", "base3") or die("No se pudo conectar a la base de datos");
$registros = mysqli_query($conexion, "select * from alumnos where nombre='$nombre' ") or die("No se pudo conectar a la base de datos");
if(mysqli_fetch_array($registros)){
    mysqli_query($conexion, "delete from alumnos where nombre='$nombre' ") or die("No se pudo eliminar");
    echo "<h1>Alumno eliminado correctamente</h1>";
    echo "<a href='../index.html'>Pagina principal</a>"; 
}else{
    echo "<h1>No existe el alumno</h1>";
    
}
mysqli_close($conexion);

?>