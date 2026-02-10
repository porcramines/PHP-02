<?php//El comando touch permite actualizar la fecha de modificación de un archivo que exista en el mismo directorio

$archivo ="datos.txt";
touch($archivo);
echo 'El momento de modificación de ' . $archivo. ' ha sido cambiada a la hora actual';
?>
