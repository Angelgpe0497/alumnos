<?php
class Alumnos {
  private $idAlumno;
  private $nombre;
  private $apellido;
  private $carrera;
  private $fechaNac;

  public function getIdAlumno(){
    return $idAlumno;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }

  public function setCarrera($carrera) {
    $this->carrera = $carrera;
  }
  public function getCarrera(){
    return $this->carrera;
  }
  public function setFechaNac($fechaNac) {
    $this->fechaNac = $fechaNac;
  }
  public function getFechaNac(){
    return $this->fechaNac;
  }
}
?>
