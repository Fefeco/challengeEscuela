<?php

class alumno
{
  private string $nombre;
  private string $apellido;
  private int $edad;

  public function __construct(string $_nombre, string $_apellido, int $_edad)
  {
    $this->nombre = $_nombre;
    $this->apellido = $_apellido;
    $this->edad = $_edad;
  }

  public function getNombre(): string
  {
    return $this->nombre;
  }
  public function getApellido(): string
  {
    return $this->apellido;
  }
  public function getEdad(): int
  {
    return $this->edad;
  }
}
