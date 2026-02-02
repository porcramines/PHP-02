<?php
$aMeses=array("void","Enero","Febrero","Marzo","Abril","Mayo",
"Junio","Julio","Agosto","Setiembre","Octubre","Noviembre",
"Diciembre");
$aDias=array("void","Lunes","Martes","Miercoles","Jueves",
"Viernes","Sabado","Domingo");
$fecha=getdate();
$dia=$aDias[$fecha["wday"]];
$mes=$aMeses[$fecha["mon"]];
$m="hoy es $dia".$fecha["mday"]."de".$mes."del año".$fecha["year"].", y son las".$fecha["hours"]."horas con".$fecha["minutes"]."minutos.";
print "<p>$m</p>";
?>