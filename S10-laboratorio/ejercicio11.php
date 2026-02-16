<?php
if(isset($_COOKIE['contador']))
{
    
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
    $mensaje = "Usted ha visitado esta página " . $_COOKIE['contador'] . " veces"; 
}
else
{
   
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido a nuestra pagina web por primera vez'; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
    <p>
        <?php echo $mensaje; ?>
    </p>
</body>
</html>