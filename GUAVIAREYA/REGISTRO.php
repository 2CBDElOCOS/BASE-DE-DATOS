
<?php

function registro_get()
{
    $Correo = $_GET['Correo'];
    $Nombre = $_GET['Nombre'];
    $Apellido = $_GET['Apellido'];
    $Contraseña = $_GET['Contraseña'];
    $Telefono = $_GET['Telefono'];

    $salida = "";
    $conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');

    // verificacion de conexion
    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $sq = "INSERT INTO tb_Usuarios (Correo,Nombre,Apellido,Contraseña,Telefono) VALUES ('$Correo', '$Nombre', '$Apellido','$Contraseña','$Telefono')";

    // Ejecutar la consulta
    $resultado = $conexion->query($sq);

    if ($resultado) {
        $salida = "Registro exitoso";
        echo "<a href='A1.php'>Autenticate</a><br>";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}

echo registro_get();

?>