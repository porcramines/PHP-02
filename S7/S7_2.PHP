<?php//El comando unlink permite borrar un archivo, pero deben de recordar que, al eliminar este archivo, no habrá forma de recuperarlo
$archivo="datos.txt";
	unlink("datos.txt");
if(file_exists($archivo)){
	unlink("datos.txt");
	print "<p>El archivo"\$archivo\ "ha sido borrado con existo</p>";

}
else{
	print "<p>El archivo"\$archivo\ "no existe</p>";	
}

?>