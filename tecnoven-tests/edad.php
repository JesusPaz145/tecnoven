<?php
// parzibyte.me/blog

function obtener_edad_segun_fecha($fecha_nacimiento)
{
    $nacimiento = new DateTime($fecha_nacimiento);
    $ahora = new DateTime(date("Y-m-d"));
    var_dump($ahora);
    $diferencia = $ahora->diff($nacimiento);
    return $diferencia->format("%y");
}

// Probar
$fechas = '2020-05-05';
echo obtener_edad_segun_fecha($fechas);
