<html>
<head>
<title>borrar usuario</title>
</head>
<body>
<h1>borrar usuario</h1>
<?php
$dbconn = pg_connect("host=localhost dbname=crud user=phpapache password=phpapache") or die('No se ha podido conectar: ' . pg_last_error());
if ($_POST) {
 $cedula = $_POST["cedula"];
 $queryIng = "DELETE FROM persona WHERE cedula=$cedula;";
	echo "El usuario fue borrado exitosamente!";
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
