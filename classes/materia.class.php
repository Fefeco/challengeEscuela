<?php

class materia
{

  private string $nombre;
  private string $cuatrimestre;

  public function __construct(string $_nombre, string $_cuatrimestre)
  {
    $this->nombre = $_nombre;
    $this->cuatrimestre = $_cuatrimestre;
  }

  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function getCuatrimestre(): string
  {
    return $this->cuatrimestre;
  }
}
