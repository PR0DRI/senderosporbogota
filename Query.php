<?php
include('Conex.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = conent();

    if(isset($_POST["Enviar"])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
       
        $query = "INSERT INTO usuarios ( Nombre, Correo, Mensaje) VALUES ('$nombre', '$email',  '$mensaje')";
        $result = mysqli_query($conexion, $query);
        
        if ($result) {
         echo "Mensaje Enviado";
        } else {
            echo "No se pudo enviar el mensaje Error: " . mysqli_error($conexion);
        }
    }
}
?>