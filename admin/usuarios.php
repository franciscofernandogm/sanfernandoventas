<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>
		Usuarios | Administrador
	</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
		body{
			background: url('https://media-exp1.licdn.com/dms/image/C561BAQFW0VeGebvBVw/company-background_10000/0?e=2159024400&v=beta&t=1g_Ngy8kVKQZVGXAUY80GqlD7MpbcPAC6baPRixEu3Y');
			background-repeat:no-repeat;
    		background-attachment: fixed; 
    		background-size: 100% 100%; 
		}
		*{
			margin:0px;
    		padding:0px;
    		box-sizing: border-box;
    		z-index: 2;
		}
		table {
    		border: 4px solid black;
    		border-collapse: collapse; 
  			margin: 0 auto;
    		text-align: center;
    		font-size: 25px;
    		background-color: white;
    		width: 80%;
        }
        td{
    		border: 4px solid black;
    		border-collapse: collapse; 
    		text-align: center;
    		font-size: 25px;
    		background-color: white;
    		padding: 10px;
		}
		th{
    		background-color: lightblue;
    		border: 4px solid black;
    		padding: 10px;
		}
		a{
            color: black;
            padding: 12px;
            text-decoration: none;
            transition: all 0.5s ease;
        }
        a:hover {
            color: rgb(19, 57, 134,0.8);
        }
        .conten{
            margin: 0%;
            padding: 1%;
            background-color: rgb(114, 157, 244 ,0.7);
        }
        .menu{
            width: 100%;
            text-align: center;
            padding: 5px;
            border-bottom: 2px;
            font-size: 15px;
            font-family: Arial black;
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
	<div class="conten">
        <a href="http://localhost/sanfernandoventas/administrador.php" style="float: left; padding: 0px;">
            <button style="text-decoration: none; background-color: rgb(114, 157, 244 ,0.7); border: 0.2px solid;">
                <i class='far fa-caret-square-left' style='font-size:24px; margin: 1%;'></i>Volver
            </button>
        </a>
        	<nav class="menu">
            	<a href="LISTADEPAVOS.php">Pavita</a>
            	<a href="LISTACERDOS.php">Cerdo</a>
            	<a href="LISTABURGERS.php">Congelados</a>
            	<a href="LISTADEEMBUTIDOS.php">Embutidos</a>
            	<a href="LISTADEPOLLOS.php">Pollo</a>
            	<a href="LISTAHUEVOS.php">Huevo</a>
        		</nav>
    	</div>
    <h1 style="background-color: rgb(114, 157, 244 ,0.4); text-align: center;">LISTA DE USUARIOS</h1>
	<hr>
	<br>
	<br>
	<div>
			<?php
			$objConexion= new Conexion();
			$conexion=$objConexion-> conectar();
			$solicitud="SELECT * FROM clientes";
			$resultado=mysqli_query($conexion,$solicitud);
			echo "<table border='1'><tr>
                            <td>DNI</td>
                            <td>CORREO</td>
                            <td>PASSWORD</td>
                            <td>NOMBRE</td>
                            <td>APELLIDO</td>
                            <td>MODIFICAR</td>
                        </tr>";
			while($fila=mysqli_fetch_array($resultado)){
    			echo "<tr>";
    			echo "<td>".$fila['DNI']."</td>";
    			echo "<td>".$fila['Correo']."</td>";
    			echo "<td>".$fila['Contra']."</td>";
    			echo "<td>".$fila['Nombre']."</td>";
    			echo "<td>".$fila['Apellidos']."</td>";
    			echo "<td><a href='editar.php?val=".$fila['DNI']."'><input type='submit' value='EDITAR' style='padding:10px;font-size:20px;border-radius: 10px;color: white;background-color: black;border: 1px solid white;outline: none'></a></td>";
			}
			echo "</table>";
			?>
		</div>
</body>
</html>