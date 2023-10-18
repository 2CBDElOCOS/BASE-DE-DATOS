<?php
include ('Auten.php');
$u=$_GET['Correo'];
$s=$_GET['contraseña'];

if (autenticar($_GET['Correo'],$_GET['contraseña'])== 1) {
    header("location: A2.php?Correo=$u&contraseña=$s");
    exit;
} 
else {
    header("location: A3.php");
    exit;
}
?> 