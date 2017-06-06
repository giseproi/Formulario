<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de Edición</title>
    <meta charset="UTF-8">
</head>
<body>

  <?php

 $nombre = $_POST["nombre"];

 $cedula = $_POST["cedula"]

 $correo = $_POST["correo"];

 $edad = $_POST["edad"];

 $fecha = $_POST["fecha"];

 $descripcion = $_POST["descripcion"];

 $asunto = "edicion de $nombre";

 $mensaje = "
 Nombre del remitente: ".$nombre."
 cedula: ".$cedula"
 Correo: ".$correo."
 Edad: ".$edad."
 Fecha: ".$fecha."
 Mensaje: ".$descripcion."
 ";



 echo "<p><h2>Edición exitosa.</h2></p>";

?>

</body>
</html>
