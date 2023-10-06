<?php

declare(strict_types=1);
require_once 'includes/autoload.php';

$materias = [];
$materias[] = new materia('Matematicas', 'PRIMER CUATRIMESTRE');
$materias[] = new materia('Matematicas', 'SEGUNDO CUATRIMESTRE');
$materias[] = new materia('Física', 'PRIMER CUATRIMESTRE');
$materias[] = new materia('Física', 'SEGUNDO CUATRIMESTRE');
$materias[] = new materia('Biología', 'PRIMER CUATRIMESTRE');
$materias[] = new materia('Biología', 'SEGUNDO CUATRIMESTRE');
$materias[] = new materia('Anatomía', 'PRIMER CUATRIMESTRE');
$materias[] = new materia('Anatomía', 'SEGUNDO CUATRIMESTRE');

$alumnos = [];
$alumnos[] = new alumno('Paola', 'Cruz', 19);
$alumnos[] = new alumno('Julieta', 'Mendez', 23);
$alumnos[] = new alumno('Patricio', 'Fernandez', 20);
$alumnos[] = new alumno('Juan Sebastian', 'Almirón', 21);
$alumnos[] = new alumno('Cristian', 'Ramirez', 23);

$asignaciones = [];
$asignaciones[] = new asignacion($alumnos[0], $materias[0], 4, 6, 8);
$asignaciones[] = new asignacion($alumnos[0], $materias[2], 7, 7, 5);
$asignaciones[] = new asignacion($alumnos[1], $materias[2], 5, 6, 8);
$asignaciones[] = new asignacion($alumnos[1], $materias[4], 7, 7, 3);
$asignaciones[] = new asignacion($alumnos[2], $materias[6], 2, 4, 8);
$asignaciones[] = new asignacion($alumnos[2], $materias[0], 9, 8, 9);
$asignaciones[] = new asignacion($alumnos[3], $materias[0], 10, 9, 5);
$asignaciones[] = new asignacion($alumnos[3], $materias[4], 8, 10, 10);
$asignaciones[] = new asignacion($alumnos[4], $materias[2], 9, 5, 7);
$asignaciones[] = new asignacion($alumnos[4], $materias[6], 4, 6, 6);

$escuela1 = new escuela('Escuela Normal N°1 - Doctor René Favaloro', $alumnos, $materias, $asignaciones);

$escuela1->mostrarEstadoAsignaciones();
