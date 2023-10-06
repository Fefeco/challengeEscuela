<?php
spl_autoload_register(function ($class) {
  $ruta = __DIR__ . '/../classes/' . $class . '.class.php';
  require_once $ruta;
});
