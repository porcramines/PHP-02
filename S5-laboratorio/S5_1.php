<?php 
print "<table border='1'>";
print "<tr><th>Nombre Producto</th><th>Inventario</th><th>Precio unitario</th></tr>";

print "<tr><td>Producto 1</td><td align='right'>".number_format(1000,0)."</td><td align='right'>$".number_format(450.00,2)."</td></tr>";
print "<tr><td>Producto 2</td><td align='right'>".number_format(6783,0)."</td><td align='right'>$".number_format(1450.00,2)."</td></tr>";
print "<tr><td>Producto 3</td><td align='right'>".number_format(25,0)."</td><td align='right'>$".number_format(2450.00,2)."</td></tr>";
print "<tr><td>Producto 4</td><td align='right'>".number_format(8769,0)."</td><td align='right'>$".number_format(550.00,2)."</td></tr>";
print "<tr><td>Producto 5</td><td align='right'>".number_format(1324,0)."</td><td align='right'>$".number_format(6450.00,2)."</td></tr>";

print "</table>"; 
?>