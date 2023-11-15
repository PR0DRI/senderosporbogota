<?php
    function conent(){
        $host = "localhost";
        $base_de_datos = "senderos";
        $usuario = "root";
        $contraseña = "";

        $conexion = mysqli_connect($host,$usuario, $contraseña,$base_de_datos);

        if (!$conexion) {
            die("conexión fallida". mysqli_error($conexion));
        }
        return $conexion;
    }
    function ejeConsul($query) {
        $conexion = conent();
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die("Error al ejecutar la consulta: " . mysqli_error($conexion));
        }

        return $result;
    }

    function desc($conexion) {
        mysqli_close($conexion);
    }



?>