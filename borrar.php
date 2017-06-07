<html>
<head>
<title>hola</title>
</head>
<body>
<h1>kkk</h1>
<?php
$dbconn = pg_connect("host=localhost dbname=crud user=phpapache password=phpapache") or die('No se ha podido conectar: ' . pg_last_error());
if ($_POST) {

 $cedula = $_POST["cedula"];

 $queryIng = "DELETE FROM persona WHERE cedula=$cedula;";

 pg_query($queryIng) or die('La consulta fallo: ' . pg_last_error());
}

?>
</body>
</html>
