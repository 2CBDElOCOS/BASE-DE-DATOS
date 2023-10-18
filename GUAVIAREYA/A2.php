<?php
include('Auten.php');

$u = $_GET['Correo'];

echo "<a href='Pedidos.php?Correo=$u'>Ir a tus pedidos</a><br>";
echo "<a href='Borrar.php?Correo=$u'>¿Deseas borrar tu cuenta?</a><br>";

echo mostrar($u);
?>