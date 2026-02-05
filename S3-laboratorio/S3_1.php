<?php
function edad($fecha_nac){
    // Obtener fecha actual
    $dia = date("j"); 
    $mes = date("n");
    $anno = date("Y");

    // Descomponer fecha de nacimiento
    $anno_nac = substr($fecha_nac, 0, 4);
    $mes_nac = substr($fecha_nac, 5, 2);
    $dia_nac = substr($fecha_nac, 8, 2);

    if ($mes_nac > $mes) {
        // Aún no es el mes de su cumpleaños
        $calc_edad = $anno - $anno_nac - 1;
    } else {
        if ($mes == $mes_nac && $dia_nac > $dia) {
            // Es el mes de su cumple, pero aún no llega el día
            $calc_edad = $anno - $anno_nac - 1;
        } else {
            // Ya cumplió años este año
            $calc_edad = $anno - $anno_nac;
        }
    }
    return $calc_edad;
}

print "Actualmente tengo " . edad("2000-02-05") . " años";
?>