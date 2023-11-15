
<!DOCTYPE html>
<html lang="es">
   <head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no initial-scale=1, maximum-scale=1">
    <title>Contactenos</title>
    <link rel="stylesheet" href=".\css\Contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   </head>
   <body>
    <h1>Comentanoss!!!</h1>
    <form action="contact.php" method="post">
        <div class="video-container">
            <video autoplay muted loop id="myVideo">
                <source src="./images/Drone3.mp4" type="video/mp4">
            </video>
        </div>
        <label for="name">Nombre y Apellido:</label>
        <input type="text" name="nombre" id="nombre" minlength="5" maxlength="30" required><br><br>
       
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" required><br><br>
        
        <label for="mensaje">Escribe un Mensaje u Opinión:</label>
	    <textarea  name="mensaje" id="mensaje"></textarea><br><br>
        
        <button type="submit" name="Enviar" value="Enviar">Enviar</button>
</form>
<?php 
include ('Query.php');
?>
</body>
</html>