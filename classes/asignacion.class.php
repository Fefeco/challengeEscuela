<?php

class asignacion
{
  private alumno $alumno;
  private materia $materia;
  private array $notas = [];
  private float $promedio;
  private string $estado;

  public function __construct(alumno $_alumno, materia $_materia, array $_notas)
  {
    $this->alumno = $_alumno;
    $this->materia = $_materia;
    $this->notas = $_notas;
    $this->calcularPromedio();
    $this->estado();
  }

  public function getCalificaciones(): string
  {
    $stringNotas = '';
    foreach ($this->notas as $nota) {
      $stringNotas .= '<br />' . ' - ' . $nota->getTipo() . ' ' . $nota->getNota();
    }
    return $stringNotas;
  }

  public function getAlumno(): string
  {
    return $this->alumno->getNombre() . ' ' . $this->alumno->getApellido();
  }

  public function getMateria(): string
  {
    return $this->materia->getNombre();
  }

  public function getCuatrimestre(): string
  {
    return $this->materia->getCuatrimestre();
  }

  public function getPromedio(): float
  {
    return $this->promedio;
  }

  public function getEstado(): string
  {
    return $this->estado;
  }

  public function calcularPromedio(): void
  {
    $total = 0;
    foreach ($this->notas as $nota) {
      $total += $nota->getNota();
    }
    $this->promedio = $total / count($this->notas);
  }

  public function estado(): void
  {
    $this->estado = ($this->promedio >= 6) ? 'APROBADO' : 'DESAPROBADO';
  }
}
