<html>
<head>
<title>borrar usuario</title>
</head>
<body>
<h1>borrar usuario</h1>
<?php
$dbconn = pg_connect("host=localhost dbname=crud user=phpapache password=phpapache") or die('No se ha podido conectar: ' . pg_last_error());
if ($_POST) {
 $nombre = $_POST["nombre"];
 $cedula = $_POST["cedula"];
 $correo = $_POST["correo"];
 $edad = $_POST["edad"];

 $queryIng = "UPDATE persona SET nombre='$nombre', correo='$correo', edad=$edad WHERE cedula=$cedula;";
        echo "El usuario fue modificado correctamente";
 pg_query($queryIng) or die('El usuario no existe: ' . pg_last_error());
}
?>

<form action="index.php">
<table>
<tr>
 <td>&nbsp;</td>
 <td><input id="btnatras" type="submit" name="bntatras" value="Atras"></td>
 </tr>
 </tr>
</table>
</form>
</body>
</html>
