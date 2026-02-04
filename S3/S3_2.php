<?php
$cadena1 = "Bienvenidos al curso de PHP";
$cadena2 = "curso";

$resultado = strstr($cadena1, $cadena2);

if ($resultado == false) {
    print "No se encontró la cadena '$cadena2' en la frase '$cadena1'";
} else {
    print "Si se encontró la cadena '$cadena2' en la frase '$cadena1'";
}

print "<p>El resultado es '$resultado'</p>";
?>