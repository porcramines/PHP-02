<?php
$monto = 5000;
$tasaIGV = 0.18; // Nota: Corregido de 8.18 según lógica contable y ejemplos posteriores
$montoIGV = $monto * $tasaIGV;
$Total = $monto + $montoIGV;

printf("<p>Monto: S/.%6.2f</p>", $monto);
printf("<p>IGV: S/.%6.2f</p>", $montoIGV);
print "<p>-----------</p>";
printf("<p>Total: S/.%6.4f</p>", $Total);
?>