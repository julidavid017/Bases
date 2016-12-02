<?php
$servidor_bd = "sql105.byethost8.com";
$usuario_bd = "b8_19072544";
$contraseña_bd = "naruto1204";
$nombre_bd = "b8_19072544_multas";

$link = mysql_connect($servidor_bd, $usuario_bd, $contraseña_bd)
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($nombre_bd) or die('No se pudo seleccionar la base de datos');
?>