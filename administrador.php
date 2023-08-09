<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
		body{
			background-image: url('https://www.muylinux.com/wp-content/uploads/2020/05/guia-configuracion-ubuntu-1.png');
			background-repeat:no-repeat;
    		background-attachment: fixed; 
    		background-size: 100%;
    		margin: 0px;
		}
		header{
			background-color: rgb(114, 157, 244 ,0.7);
			margin: 0%;
            padding: 0.2%;
		}
		section{
			margin: 0px;
		}
		footer{
			margin: 0px;
			padding: 0px;
		}
		table{
			margin: 0 auto;
		}
		th,td{
			padding: 10px;
		}
		.contenadm{
			background-color: rgb(250, 251, 253,0.9);
			margin-right: 20%;
			margin-left: 20%;
			padding: 1%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}
		.conten{
			width: 50%;
			text-align: center;
		}
		.config{
			margin: 2%;
			padding: 2%;
		}
		.boton{
			text-decoration: none;
		}

		.texto{
			margin: 1.8%;
			padding: 2%;
			background-color: white;
			justify-content: center;
		}
	</style>
</head>
<body>
	 <?php
		class Conexion
		{
			private $_bd = 'san fernando' ;
			private $_server = 'localhost' ;
			private $_user = 'root' ;
			private $_pass = '';
			public function conectar(){
			$conn = new mysqli($this->_server, $this->_user, $this->_pass,$this->_bd);
			if ($conn->connect_error) {
		 		die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
			}
		}
		$obj = new Conexion();
	?>
	<header>
		<i class="material-icons" style="float: left;font-size: 50px;">person</i>
		<a href="gestioncontrol.php?action=login" style="float: right;margin-top: 0.5%;">
    		<button >
    			<i class='fas fa-sign-out-alt' style="padding: 10px;"></i>Salir
    		</button>
    	</a>
    	<h1 style="text-align: center;">Bienvenido Administrador</h1>
	</header>
	<hr>
	<section>
		<div>
			<img src="https://lh3.googleusercontent.com/f35RMXXJjKSlUptfB6DZ9tIqHxEVIS-cszNfZ5fvjHPxnrbgg9hr-KBdIEiUcz1Ba3M" style="float: left; width: 12%; padding: 5px;">
			<p class="texto">
				San Fernando confia en ti y en tus habilidades, sigue cumpliendo con tu buen trabajo que juntos creceremos mas y seremos mejores, juntos saldremos victoriosos de la situacion actual que acontece a nuestro pais. Somos una empresa peruana que ha tenido un crecimiento vertiginoso en los últimos años, nos dedicamos principalmente a la producción y comercialización de alimentos de consumo masivo de las líneas de pollo, pavo cerdo, huevos, etc., nuestro objetivo principal como empresa es la de ofrecer calidad y un servicio de excelencia. Somos líder en todos los mercados en los que participamos a nivel nacional. Ademas destacamos como el mayor productor de carne de aves, huevos, cerdo y embutidos. En el extranjero, exportamos a mercados competitivos como Bolivia, Colombia, Ecuador y Panamá.
		</p>
		</div>
		<div class="contenadm">
			<div class="conten">
				<h2 style="text-align: center;">Usuarios</h2>
				<br>
				<a href="admin/usuarios.php" class="boton">
					<button>
						<i class='fas fa-user-cog' style='font-size:36px; margin-top: 0%; margin-bottom: 0%;margin-left: 1%; margin-right: 5%;'></i>Modificar Usuarios
					</button>
				</a>
			</div>
			<div class="conten">
				<h2 style="text-align: center;">Productos</h2>
				<br>
				<a href="admin/LISTADEPAVOS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px; margin-top: 0%; margin-bottom: 0%; margin-left: 1%; margin-right: 5%;'></i>Pavita
					</button>
				</a>
				<a href="admin/LISTACERDOS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px; margin-top: 0%;margin-bottom: 0%;margin-left: 1%;margin-right: 5%;'></i>Cerdo
					</button>
				</a>
				<a href="admin/LISTADEPOLLOS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px;margin-top: 0%;margin-bottom: 0%;margin-left: 1%;margin-right: 5%;'></i>Pollo
					</button>
				</a>
				
				<br>
				<a href="admin/LISTADEEMBUTIDOS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px;margin-top: 0%;margin-bottom: 0%;margin-left: 1%;margin-right: 5%;'></i>Embutidos
					</button>
				</a>
				<a href="admin/LISTAHUEVOS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px;margin-top: 0%;margin-bottom: 0%;margin-left: 1%;margin-right: 5%;'></i>Huevos
					</button>
				</a>
				<a href="admin/LISTABURGERS.php" class="boton">
					<button class="config">
						<i class='fas fa-cog' style='font-size:24px;margin-top: 0%;margin-bottom: 0%;margin-left: 1%;margin-right: 5%;'></i>Congelados
					</button>
				</a>
				
			</div>
		</div>
	</section>
	<br>
	<footer>
      <p style="text-align: center; background:#002878; color: white; padding: 40px; margin: 0px;"> © San Fernando - Todos los derechos reservados (2020)</p>
	</footer>
</body>
</html>