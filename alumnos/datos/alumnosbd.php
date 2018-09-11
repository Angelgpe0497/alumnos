<?php
require_once 'conexion.php';
class AlumnosBd {
  public function insertarAlumno($alumno){
    try {
      $pdo = Conexion::getInstancia()->conectar();
      $sql = "INSERT INTO alumnos (nombre, apellidos, carrera, fechaNac) " .
              "VALUES(?,?,?,?)";

      $query = $pdo->prepare($sql);
      $query->bindParam(1, $alumno->getNombre());
      $query->bindParam(2, $alumno->getApellido());
      $query->bindParam(3, $alumno->getCarrera());
      $query->bindParam(4, $alumno->getFechaNac());

      $resultado = $query->execute();

      if ($resultado) {
        echo "Registro exitoso.";
      } else {
        echo "Error al registrar Alumno.";
      }
    } catch(PDOException $e) {
      echo "Error al insertar Alumno. " . $e;
    }
  }
}
?>
