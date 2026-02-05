<?php
function comprasTotales($monto) {
    $salida = "No hay compras";
    
    if ($monto > 0) {
        // Formatea con signo de pesos y dos decimales
        $salida = sprintf("$%.2f compras", $monto);
    }
    
    return $salida;
}

$monto = 0; // Prueba con monto cero
print comprasTotales($monto);
?>