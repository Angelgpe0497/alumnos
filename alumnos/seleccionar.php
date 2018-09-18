<?php
  require_once "datos/alumnosbd.php";

  $bd = new AlumnosBd();
  $query = $bd->seleccionarTodos("alumnos");
?>
<table border="1">
  <tr>
    <th>idUsuario</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Carrera</th>
    <th>Fecha de Nacimiento</th>
  </tr>
  <?php
  $query->setFetchMode(PDO::FETCH_ASSOC);
  while ($r = $query->fetch()): ?>
    <tr>
      <td><?php echo($r['idalumnos']); ?></td>
      <td><?php echo($r['nombre']); ?></td>
      <td><?php echo($r['apellidos']); ?></td>
      <td><?php echo($r['carrera']); ?></td>
      <td><?php echo($r['fechaNac']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>
