<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "san fernando";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("UPDATE clientes SET DNI='".$_POST["dni"]."' WHERE DNI='".$_POST["dnius"]."'");
    $stmt->execute();
    $stmt1 = $conn->prepare("UPDATE clientes SET Correo='".$_POST["correo"]."' WHERE DNI='".$_POST["dnius"]."'");
    $stmt1->execute();
    $stmt2 = $conn->prepare("UPDATE clientes SET Contra='".$_POST["contra"]."' WHERE DNI='".$_POST["dnius"]."'");
    $stmt2->execute();
    $stmt3 = $conn->prepare("UPDATE clientes SET Nombre='".$_POST["nombre"]."' WHERE DNI='".$_POST["dnius"]."'");
    $stmt3->execute();
    $stmt4 = $conn->prepare("UPDATE clientes SET Apellidos='".$_POST["apellido"]."' WHERE DNI='".$_POST["dnius"]."'");
    $stmt4->execute();
    // set the resulting array to associative
    
       
  }catch(PDOException $e1) {
    echo "Error: " . $e1->getMessage();
}
$conn = null;
 header("location:usuarios.php");

 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Usuario | Administrador</title>
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
    <h1 style="background-color: rgb(114, 157, 244 ,0.4); text-align: center;">MODIFICAR USUARIO</h1>
	<hr>
	<br>
	<br>
<?php
include("conexionsanfernando.php");
        $objConexion= new Conexion();
        $conexion=$objConexion-> conectar();
        $solicitud="SELECT * FROM clientes WHERE DNI=".$_GET["val"];
        $resultado=mysqli_query($conexion,$solicitud);
 ?>
 <div style="width: 30%;text-align:center"><a href='usuarios.php'><input type="submit" value="Volver" style="padding:10px 20px;font-size:20px;border-radius: 10px;color: white;background-color: black;border: 1px solid white;outline: none"></a></div>
 <br><br>
<form action="" method="POST">
<?php while($row=mysqli_fetch_array($resultado)){	?>
	<table>
		<tr>
	<td>DNI</td><td><input type="text" name="dni" value="<?php echo $row['DNI'] ?>" style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;"></td>
</tr>
<tr>
	<td>CORREO</td><td><input type="text" name="correo" value="<?php echo $row['Correo'] ?>" style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;"></td>
	</tr>
	<tr>
	<td>CONTRASEÑA</td><td><input type="text" name="contra" value="<?php echo $row['Contra'] ?>" style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;"></td>
</tr>
<tr>
	<td>NOMBRE</td><td><input type="text" name="nombre" value="<?php echo $row['Nombre'] ?>" style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;"></td>
</tr>
<tr>
	<td>APELLIDOS</td><td><input type="text" name="apellido" value="<?php echo $row['Apellidos'] ?>" style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;"></td>
</tr>

<table>


	<?php } ?>
	<input type="hidden" name="dnius" value="<?php echo $_GET["val"]; ?>">
    <br><br>
	<div style="text-align: center"><input type="submit" value="Modificar" style="padding:10px 20px;font-size:20px;border-radius: 10px;color: white;background-color: black;border: 1px solid white;outline: none"></div>
</form>
</body>
</html>