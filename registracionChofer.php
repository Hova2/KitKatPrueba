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
	 <p>Nombre <input type="text" name="nombre" /></p>
	 <p>Apellido: <input type="text" name="apellido" /></p>
	 <p>Telefono: <input type="text" name="tel" /></p>
	 <p>Email: <input type="text" name="email" /></p>
	 <p>Cantidad de pasajeros: <input type="text" name="pasajeros" /></p>

	 <?php
	 	 
	 	
	 	$nombre = $_POST["nombre"];
	 	$apellido = $_POST["apellido"];
	 	$telefono = $_POST["tel"];
	 	$email = $_POST["email"];
	 	$pasajeros = $_POST["pasajeros"];

		mysql_connect("localhost","root","");
		mysql_select_db("viajes");
		$resul = mysql_query("INSERT INTO chofer (Apellido,CantidadPasajeros,Email,Nombre,Telefono) VALUES ('".$apellido."','".$pasajeros."','".$email."','".$nombre."','".$telefono."')");
	?>
	 <p><input type="submit" /></p>
	</form>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>