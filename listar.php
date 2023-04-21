<?php
    include("conexion.php");

    $pru = conexion();

    $sql = "SELECT idpersona, documento, nombre, apellido, direccion, celular FROM persona";
    $resultado = pg_query($pru, $sql);

    pg_close($pru);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de registros</title>
</head>
<body>
<h1>Listado de personas</h1>

  <table>
      <tr>
         <th>ID</th>
         <th>Documentos</th>
         <th>Nombre</th>
         <th>Apellidos</th>
         <th>Email</th>
         <th>Celular</th>

      
       </tr>
       <?php while($fila = pg_fetch_assoc($resultado)) { ?>
           <tr>
               <td><?php echo $fila['idpersona']; ?></td>
               <td><?php echo $fila['documento']; ?></td>
               <td><?php echo $fila['nombre']; ?></td>
               <td><?php echo $fila['apellido']; ?></td>
               <td><?php echo $fila['direccion']; ?></td>
               <td><?php echo $fila['celular']; ?></td>
       </tr>

    <?php } ?>
  </table>
</body>
</html>


