<?php
require_once "conexion.php";

class AlumnosBd {
  public function insertarAlumno($alumno){
    try {
      $pdo = Conexion::getInstancia()->conectar();
      $sql = "INSERT INTO alumnos (nombre,apellidos,carrera,fecha_nac) " .
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

  public function seleccionarTodos($tabla) {
    $sql = "SELECT * FROM " . $tabla;
    try {
      $pdo = Conexion::getInstancia()->conectar();
      return $pdo->query($sql);
       //$query->setFetchMode(PDO::FETCH_ASSOC);
      // $query->fetch();
      //print_r($query->fetch());
    } catch (PDOException $e) {
      echo "Error al realizar la consulta: " . $e;
    }
  }
}
?>
