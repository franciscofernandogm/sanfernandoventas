<?php
class y extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return parent::current();
    }

}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "san fernando";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT producto_codigo FROM productos WHERE producto_codigo IN ('P35','P36','P37','P38','P39','P40','P41','P42','P43')");
    $stmt->execute();
$pc=array();
$i=0;
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        $pc["$i"]=$v;
        $i=$i+1;
        
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
$codproErr=$agrestockErr="";
$codpro=$agrestock="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["codpro"])) {
    $codproErr = "*El código de producto es requerido";
  } else {
    $codpro=$_POST["codpro"];
    $rep=0;
    for ($i=0; $i <count($pc) ; $i++){
             if($pc["$i"]==$_POST["codpro"]){
              $rep=1;
             }
      }
      if($rep==0){
        $codproErr="*Código de producto inválido";
      }
  }
  if (empty($_POST["agrestock"])) {
    $agrestockErr = "*Se necesita el agregado";
  } else {
    $agrestock = $_POST["agrestock"];
  }
  }
  if($codproErr == "*El código de producto es requerido" || $codproErr=="*Código de producto inválido" || $agrestockErr =="*Se necesita el agregado"){echo "";}elseif($codpro=="" && $agrestock==""){echo "";}else{
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
// prepare and bind
$stmt = $conn->prepare("UPDATE productos SET STOCK='".$_POST["agrestock"]."' WHERE producto_codigo='".$_POST["codpro"]."'");
// set parameters and execute
$stmt->execute();

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Burguers | Administrador</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
        body{   
            background-repeat:no-repeat;
            background-attachment: fixed; 
            background-size: 100%; 
            height: 100%;
            width: 100%;
            background-color:white;
        }
        * {
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
            width: 70%;
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
        h1{
            text-align: center;
        }
        #imagen{
            width: 40%;
        }
        a{
            color: black;
            padding: 0 12px;
            text-decoration: none;
            transition: all 0.5s ease;
        }
        a:hover {
            color: rgb(255, 255, 255,0.8);
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
<body style="background-image: url('https://media-exp1.licdn.com/dms/image/C561BAQFW0VeGebvBVw/company-background_10000/0?e=2159024400&v=beta&t=1g_Ngy8kVKQZVGXAUY80GqlD7MpbcPAC6baPRixEu3Y');">
    <div class="conten">
        <a href="http://localhost/sanfernandoventas/administrador.php" style="float: left;">
            <button style="text-decoration: none; background-color: rgb(114, 157, 244 ,0.7); border: 0.2px solid">
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
            <a href="usuarios.php">USUARIOS</a>
        </nav>
    </div>
    <h1 style="background-color: rgb(114, 157, 244 ,0.4);">LISTA DE HAMBURGUESAS Y NUGGETS</h1>
    <br>
    <br>
    <form style="font-size: 20px;" method='post' action='' >
<table style='width: 70%;margin:0 auto;border: none;background: none'>
  <tr>
    <td style="border: none;background: none">Código de Producto:</td>
    <td style="border: none;background: none">Nuevo Stock:</td>
  </tr>
  <tr>
    <td style="border: none;background: none"><input type='text' name='codpro' style="border:1px solid #006600;border-radius:4px;width:90%;font-size: 15px;padding:10px;" placeholder="Ingrese Código"><br><span class="error"><b> <?php echo $codproErr;?></b></span></td>
    <td style="border: none;background: none"><input type='number' name='agrestock' value="1" min="1" style="border:1px solid #006600;border-radius:4px;width:50%;font-size: 15px;padding:10px;" placeholder="Ingrese Stock"><br><span class="error"><b> <?php echo $agrestockErr;?></b></span></td>
    <td style="border: none;background: none"><input type="submit" value="Agregar" style="padding:10px;font-size:20px;border-radius: 10px;color: white;background-color: black;border: 1px solid white;outline: none"></td>
  </tr>

</table>
</form>
    <?php
    include("conexionsanfernando.php");
    $objConexion= new Conexion();
    $conexion=$objConexion-> conectar();
    $solicitud="SELECT * FROM productos WHERE producto_codigo IN ('P35','P36','P37','P38','P39','P40','P41','P42','P43')";
    $resultado=mysqli_query($conexion,$solicitud);
    echo "<table border='1'><tr>
                            <th>Codigo</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th colspan='2'>STOCK</th>
                        </tr>";

    $congelados = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesadeparrilladeres0244.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesaparrillerapavita-10083.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesadepavita-15935.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-49-271847.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_nuggetsdepavita-13017.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_dinonuggets0231.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-28-480571.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-15-509792.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_nuggetspollox10-1-12324.jpg?75');

        $i=0;
    while($fila=mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['producto_codigo']."</td>";
        echo "<td> <img id='imagen' src='".$congelados["$i"]."'></td>";
        echo "<td>".$fila['producto_nombre']."</td>";
        echo "<td>S/".$fila['producto_precio']."</td>";
        echo "<td>".$fila['STOCK']." unidades</td>";
    $i++;
    
    }
    echo "</table>";
    ?>
</body>
</html>

