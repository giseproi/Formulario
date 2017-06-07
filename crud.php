<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h1>hhhh</h1>
<?php
//	$dbcon = pg_connect("host=localhost dbname=rud user=phpApache password=phpApache123") or die('No se pudo conectar').pg_last_error

$dbconn = pg_connect("host=localhost dbname=crud user=phpapache password=phpapache") or die('No se ha podido conectar: ' . pg_last_error());
if ($_POST) {
	
 $nombre = $_POST["nombre"];
 $cedula = $_POST["cedula"];
 $correo = $_POST["correo"];
 $edad = $_POST["edad"];

 $queryIng = "INSERT INTO persona VALUES ( $cedula, '$nombre', '$correo', $edad);"; 
 
 pg_query($queryIng) or die('La consulta fallo: ' . pg_last_error());
}

$query = 'SELECT * FROM persona';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
echo "<table>\n";
echo "<tr>";
                       echo "<th>Cedula</th>";
                        echo "<th>Nombre</th>";                 
                        echo "<th>Correo</th>";
                        echo "<th>Edad</th>";                   
                echo "</tr>";

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);

?>
<form action="crud.php" method="post">

<table width="400" border="0" cellspacing="0" cellpadding="0" align="center">

 <tr>
 <td>Nombre:</td>
 <td><input type="text" name="nombre" placeholder="Escribe Tu nombre" required></td>

 </tr>

 <tr>
 <td>Cedula:</td>
 <td><input type="number" name="cedula" placeholder="Escribe Tu cedula" required></td>

 </tr>

<tr>
 <td>E-mail:</td>
 <td><input type="email" name="correo" placeholder="Aqui@tucorreo.com" required></td>
 </tr>

<tr>
 <td>Edad:</td>
 <td><input type="number" name="edad" max="100" min="0" placeholder="Escribe Tu Edad" required></td>
 </tr>
<tr>


<tr>
 <td>&nbsp;</td>
 <td><input id="boton" type="submit" name="boton" value="Guardar"></td>
 </tr>
<tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 </tr>
 </table>
</form>

</body>


</html>
