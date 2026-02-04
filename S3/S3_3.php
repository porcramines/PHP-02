<?php
$cadena1 = "Bienvenidos al curso de PHP";
$cadena2 = "e";
$pos = 0;
$aPos = array();

while ($pos = strpos($cadena1, $cadena2, $pos)) {
    array_push($aPos, $pos);
    $pos++;
}

print "<p>El número de ocurrencias de la cadena '$cadena2' en la cadena '$cadena1' es de: " . count($aPos) . "</p>";

for ($i=0; $i < count($aPos); $i++) {
    print "<p>En el caracter num: " . $aPos[$i] . "<br></p>";
}
?>