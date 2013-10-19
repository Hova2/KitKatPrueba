<html>
  <head>
    <title>Localizing the Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <form action="" method="post">
	 <p>Origen <input type="text" name="origen" /></p>
	 <p>Destino: <input type="text" name="destino" /></p>
	 <p>Chofer: <?php mysql_connect("localhost","root","");
					mysql_select_db("viajes");
					$resul = mysql_query("SELECT Id,Nombre,Apellido FROM chofer"); 
					if($resul){
						while($res = mysql_fetch_assoc($resul)){
							echo "<option value='".$res["Id"]."'>".$res["Nombre"]. $res["Apellido"]."</option>";
						}
					} ?></p>

	 <p>Fecha: <input type="text" name="dia"/> / <input type="text" name="mes"/> / <input type="text" name="año"/> </p>
	 <p>Hora: <input type="text" name="horas"/> : <input type="text" name="minutos"/> </p>
	 <?php
	 	 $fecha = $_POST["año"]."-".$_POST["mes"]."-".$_POST["dia"];
	 	$hora = $_POST["horas"].":".$_POST["minutos"];
	 	$destino = $_POST["destino"];
	 	$origen = $_POST["origen"];

		mysql_connect("localhost","root","");
		mysql_select_db("viajes");
		$resul = mysql_query("INSERT INTO viaje (Destino,Fecha,Hora,Pasajeros,Salida) VALUES ('".$destino."','".$fecha."','".$hora."','".$origen."')");
	?>
	 <p><input type="submit" /></p>
	</form>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>

