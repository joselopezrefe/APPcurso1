<?php 
$nombre = $_POST['nombre'];
   $conexion = mysqli_connect("localhost", "root", "123456", "base3") or die("No se pudo conectar a la base de datos");
   $registros = mysqli_query($conexion, "select * from alumnos where nombre='$nombre'") or die("No se pudo obtener los datos");
   if(mysqli_fetch_array($registros)){
   
    ?>
    <form action="modificar2.php" method="post">
      <input type="hidden" name="nombre1" value="<?php echo $nombre; ?>">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre2" value="<?php echo $nombre; ?>">
      <label for="email">Email:</label>
      <input type="text" name="email" value="<?php echo $reg['mail']; ?>">
      <label for="codigo">Codigo de curso:</label>
      <select name="codigo" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
            <option class="dropdown-item" value="1">PHP</option>
            <option class="dropdown-item" value="2">htlm5</option>
            <option class="dropdown-item" value="3">CSS</option>
            <option class="dropdown-item" value="4">SQL</option>
          </select>
      <input type="submit" value="Modificar">
    </form>



      <?php
    }else{
      echo "No existe el alumno";
      echo "<br/><a href='../html/modificar.html'>Volver a pagina modificar</a>"; 
    }


?>