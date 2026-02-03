<?php
$monto = 5000;
$tasaIGV = 0.18;
$montoIGV = $monto * $tasaIGV;
$Total = $monto + $montoIGV;

$sMonto = number_format($monto, 2);
$sMontoIGV = number_format($montoIGV, 2);
$sTotal = number_format($Total, 2);

print "<p>Monto: S/.$sMonto</p>";
print "<p>IGV: S/.$sMontoIGV</p>";
print "<p>-----</p>";
print "<p>Total: S/.$sTotal</p>";
?>