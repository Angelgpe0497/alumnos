<!DOCTYPE html>

<?php
  require_once 'entidades/alumnos.php';
  require_once 'datos/alumnosbd.php';
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardar Alumno</title>
  </head>
  <body>
      <?php
        if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'):
          //echo "Viene del POST (Formulario).";
          $alumno = new Alumnos();
          $alumno->setNombre($_POST['nombre']);
          $alumno->setApellido($_POST['apellidos']);
          $alumno->setCarrera($_POST['carrera']);
          $alumno->setFechaNac($_POST['fechaNac']);
          $bd = new AlumnosBd();
          $bd->insertarAlumno($alumno);
        else:
      ?>
    <form action="guardar.php" method="post">
      <fieldset>
        <legend>Crear Alumno</legend>
        <div>
          <input type="text" name="nombre" placeholder="Nombre">
        </div><br>
        <div>
          <input type="text" name="apellidos" placeholder="Apellidos">
        </div><br>
        <div>
          <input type="text" name="carrera" placeholder="Carrera">
        </div><br>
        <div>
          <input type="date" name="fechaNac" placeholder="Fecha de Nacimiento">
        </div><br>
        <div>
          <input type="submit" value="Guardar">
          <input type="reset" value="Limpiar">
        </div><br>
      </fieldset>
    </form>
    <?php
      endif;
    ?>
  </body>
</html>
