<?php

class escuela
{
  private string $nombre;
  private array $materias = [];
  private array $alumnos = [];
  private array $asignaciones = [];

  public function __construct(string $_nombre, array $_alumno, array $_materia, array $_asignaciones)
  {
    $this->nombre = $_nombre;
    $this->alumnos = $_alumno;
    $this->materias = $_materia;
    $this->asignaciones = $_asignaciones;
  }

  public function mostrarEstadoAsignaciones()
  {
    foreach ($this->asignaciones as $asignacion) {
      echo 'Nombre alumno: ' . $asignacion->getAlumno() . '<br />';
      echo 'Nombre materia: ' . $asignacion->getMateria() . '<br />';
      echo 'Cuatrimestre: ' . $asignacion->getCuatrimestre() . '<br />';
      echo 'Calificaciones: ' . $asignacion->getCalificaciones() . '<br />';
      echo 'Promedio: ' . number_format($asignacion->getPromedio(), 2) . '<br />';
      echo 'Estado: ' . $asignacion->getEstado() . '<br /><br />';
    }
  }
}
