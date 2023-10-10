<?php

class nota
{
  public string $tipo;
  public float $nota;

  public function __construct(string $_tipo, float $_nota)
  {
    $this->tipo = $_tipo;
    $this->nota = $_nota;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function getNota()
  {
    return $this->nota;
  }
}
