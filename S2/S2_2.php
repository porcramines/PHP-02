<?php
$monto = 5000;
$tasaIGV = 0.18;
$montoIGV = $monto * $tasaIGV;
$Total = $monto + $montoIGV;

$sTotal = sprintf("<p>Monto: S/.%6.2f IGV: S/.%6.2f Total: S/.%6.2f </p>", $monto, $montoIGV, $Total);

print $sTotal;
?>