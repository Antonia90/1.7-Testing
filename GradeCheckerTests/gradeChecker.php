
<?php

function gradeChecker(int|float $nota): string
{
    if ($nota < 0 || $nota > 10) {
        return "Nota inválida";
    }
    $porcentaje = $nota * 10;

    if ($porcentaje >= 60) {
        return "Primera División";
    } elseif ($porcentaje >= 45) {
        return "Segunda División";
    } elseif ($porcentaje >= 33) {
        return "Tercera División";
    } else {
        return "Debe repetir la cursada";
    }
}