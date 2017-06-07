<?php
	// petición SQL
	$peticion = "SELECT nombre, cedula, correo, edad, fecha, descripcion FROM persona";

	//Conexión a la base de datos
	$host="127.0.0.1";
    $port="5432";
	$user ="phpapache";
	$pass="phpapache";
	$dbname="crud";

	$connect=pg_connect("host=$host, port=$port, user=$user, pass=$pass, dbname=$dbname");

    if(!$connect)
        echo "<p><i>No me conecte</i></p>";
    else
        echo "<p><i>Me conecte</i></p>";

	if(count($peticion)>0){
		echo "Ingreso";
		echo "<table>";
		echo "<thead>";
		echo "<tr>";
			echo "<th>cedula</th>";
			echo "<th>nombre</th>";			
			echo "<th>correo</th>";
			echo "<th>edad</th>";			
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	while($row = array pg_fetch_row(resource $peticion [, NULL )){
	echo "<tr>
		<td>".$row[0]."</td>
		<td>".$row[1]."</td>
		<td>".$row[2]."</td>
		<td>".$row[3]."</td>		
		</tr>"
	}
	echo "</tbody>";
	echo "</table>";
	}else{
		echo "No ha ingresado";
	}

