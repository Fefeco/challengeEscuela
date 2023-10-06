<?php

class asignacion
{
  private alumno $alumno;
  private materia $materia;
  private float $primerParcial;
  private float $segundoParcial;
  private float $trabajoPractico;
  private float $promedio;
  private string $estado;

  public function __construct(alumno $_alumno, materia $_materia, float $_primerParcial, float $_segundoParcial, float $_trabajoPractico)
  {
    $this->alumno = $_alumno;
    $this->materia = $_materia;
    $this->primerParcial = number_format($_primerParcial, 2);
    $this->segundoParcial = number_format($_segundoParcial, 2);
    $this->trabajoPractico = number_format($_trabajoPractico, 2);
    $this->calcularPromedio();
    $this->estado();
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

  public function getCalificaciones(): string
  {
    return
      '- Primer parcial: ' . $this->primerParcial . '<br />' .
      '- Segundo parcial: ' . $this->segundoParcial . '<br />' .
      '- Trabajo práctico: ' . $this->trabajoPractico;
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
    $this->promedio = number_format(($this->primerParcial +
      $this->segundoParcial +
      $this->trabajoPractico
    ) / 3, 2);
  }

  public function estado(): void
  {
    $this->estado = ($this->promedio >= 6) ? 'APROBADO' : 'DESAPROBADO';
  }
}
