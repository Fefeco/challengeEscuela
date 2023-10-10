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

$notas = [];
$notas[0][0] = new nota('Primer parcial', 9);
$notas[0][1] = new nota('Segundo parcial', 5);
$notas[0][2] = new nota('Trabajo Práctico', 8);
$notas[1][0] = new nota('Primer parcial', 6);
$notas[1][1] = new nota('Segundo parcial', 7);
$notas[1][2] = new nota('Trabajo Práctico', 3);
$notas[2][0] = new nota('Primer parcial', 2);
$notas[2][1] = new nota('Segundo parcial', 9);
$notas[2][2] = new nota('Trabajo Práctico', 10);
$notas[3][0] = new nota('Primer parcial', 7);
$notas[3][1] = new nota('Segundo parcial', 4);
$notas[3][2] = new nota('Trabajo Práctico', 8);
$notas[4][0] = new nota('Primer parcial', 5);
$notas[4][1] = new nota('Segundo parcial', 9);
$notas[4][2] = new nota('Trabajo Práctico', 10);
$notas[5][0] = new nota('Primer parcial', 10);
$notas[5][1] = new nota('Segundo parcial', 7);
$notas[5][2] = new nota('Trabajo Práctico', 3);
$notas[6][0] = new nota('Primer parcial', 8);
$notas[6][1] = new nota('Segundo parcial', 9);
$notas[6][2] = new nota('Trabajo Práctico', 1);
$notas[7][0] = new nota('Primer parcial', 6);
$notas[7][1] = new nota('Segundo parcial', 8);
$notas[7][2] = new nota('Trabajo Práctico', 8);
$notas[8][0] = new nota('Primer parcial', 9);
$notas[8][1] = new nota('Segundo parcial', 5);
$notas[8][2] = new nota('Trabajo Práctico', 9);
$notas[9][0] = new nota('Primer parcial', 10);
$notas[9][1] = new nota('Segundo parcial', 10);
$notas[9][2] = new nota('Trabajo Práctico', 10);

$asignaciones = [];
$asignaciones[] = new asignacion($alumnos[0], $materias[0], $notas[0]);
$asignaciones[] = new asignacion($alumnos[0], $materias[2], $notas[1]);
$asignaciones[] = new asignacion($alumnos[1], $materias[2], $notas[2]);
$asignaciones[] = new asignacion($alumnos[1], $materias[4], $notas[3]);
$asignaciones[] = new asignacion($alumnos[2], $materias[6], $notas[4]);
$asignaciones[] = new asignacion($alumnos[2], $materias[0], $notas[4]);
$asignaciones[] = new asignacion($alumnos[3], $materias[0], $notas[6]);
$asignaciones[] = new asignacion($alumnos[3], $materias[4], $notas[7]);
$asignaciones[] = new asignacion($alumnos[4], $materias[2], $notas[8]);
$asignaciones[] = new asignacion($alumnos[4], $materias[6], $notas[9]);

$escuela1 = new escuela('Escuela Normal N°1 - Doctor René Favaloro', $alumnos, $materias, $asignaciones);

$escuela1->mostrarEstadoAsignaciones();