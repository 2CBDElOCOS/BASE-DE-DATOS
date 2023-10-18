<?php

//AUTENTICACION
//function autenticar($Correo, $Contraseña) {
    //$conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');

    //if (!$conexion) {
        //die("Error al conectar a la base de datos:" . mysqli_connect_error());
    //}

    //$sq = "SELECT * FROM tb_Usuarios WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
   
   // $resultado = $conexion->query($sq);

    //$conexion->close();

   // if ($resultado->num_rows == 1) {
       //die ("Autenticación exitosa");
    //}
    //die ("Datos incorrectos");
   
//}

//autenticar('pepito@gmail.com','123');


//METODO GET
function autenticar($u, $s) {
    $salida=0;
    $conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');
    $sq = "SELECT COUNT(nombre) FROM tb_Usuarios WHERE Correo = '$u' AND contraseña = '$s'";
   
    $resultado = $conexion->query($sq);

    $conexion->close();

   
    $fila = mysqli_fetch_array($resultado);
    $salida=$fila[0];
    return $salida;
     
   

}
function mostrar($u){
    $salida='';
    $conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');
    $sq = "SELECT * FROM tb_Usuarios WHERE Correo = '$u'";
    $resultado = $conexion->query($sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] .'<br>';
        $salida .= $fila[1] .'<br>';
        $salida .= $fila[2] .'<br>';
        $salida .= $fila[3] .'<br>';
        $salida .= '<br>';
    }
   
    $conexion->close();

    return $salida;
}

function mostrarP($u){
    $salida='';
    $conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');
    $sq = "SELECT * FROM tb_Pedido WHERE ID_User  = '$u'";
    $resultado = $conexion->query($sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] .'<br>';
        $salida .= $fila[1] .'<br>';
        $salida .= $fila[2] .'<br>';
        $salida .= $fila[3] .'<br>';
        $salida .= '<br>';
    }
   
    $conexion->close();

    return $salida;
}

function Borrar($u) {
    $salida = '';
    $conexion = mysqli_connect('localhost', 'root', 'root', 'db_guaviareya');
    $sq = "DELETE FROM tb_Usuarios WHERE Correo = '$u'";
    $resultado = $conexion->query($sq);

    if ($resultado) {
        $salida = 'El usuario ha sido borrado exitosamente.';
    } else {
        $salida = 'No se pudo borrar el usuario.';
    }

    $conexion->close();

    return $salida;
}

