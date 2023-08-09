<?php
$codigo=array();
$producto=array();
$precio=array();
$amount=array();
$subtotal=array();
include_once('productos.php');
include_once('carrito.php');
$product=new Product();
$cart= new Cart();
for ($i = 1; $i <=56; $i++) {
    if($_SESSION["code$i"]!=''){
$codigo["$i"]=$_SESSION["code$i"];
$producto["$i"]=$_SESSION["producto$i"];
$precio["$i"]=$_SESSION["price$i"];
$amount["$i"]=$_SESSION["amount$i"];
$subtotal["$i"]=$_SESSION["subtotal$i"];
$_SESSION["code$i"]='';
$_SESSION["producto$i"]='';
$_SESSION["price$i"]='';
$_SESSION["amount$i"]='';
$_SESSION["subtotal$i"]='';
    }
  }
$cart->borrar();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Pedido Realizado-San Fernando</title>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/375552df66.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="functions.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
  <style>
    body{
    background-image: url('https://media-exp1.licdn.com/dms/image/C561BAQFW0VeGebvBVw/company-background_10000/0?e=2159024400&v=beta&t=1g_Ngy8kVKQZVGXAUY80GqlD7MpbcPAC6baPRixEu3Y');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  #titulo{
      text-align: center;
      color: #D6BC5A;
        font-size: 40px;
  background-size: 100%;
  background-color: #002283 ;
  padding:20px; 
  margin: 0px;
    }

  </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <?php
    include('nav.php');
    ?>
    <h1 id="titulo">PEDIDO COMPLETO</h1>
<br>
<div style="display:flex;background-color:#0066ff;border: 5px solid #D6BC5A;width: 80%;margin:0 auto"><div style="margin:0px;width: 50%"><img src="https://www.san-fernando.com.pe/images/distribuidor_sanfer.jpg" style="height: 100%;width: 100%"></div><div style='width: 50%'><p style="font-size:50px;text-align: center;padding-top:90px;margin: 20px;">¡GRACIAS POR COMPRAR CON NOSOTROS!</p></div></div>
        <p style='font-size:30px;padding-left: 40px'>Su boleta es:</p>
    <?php
    if(isset($codigo[1]) || isset($codigo[2]) || isset($codigo[3]) || isset($codigo[4]) || isset($codigo[5]) || isset($codigo[6]) || isset($codigo[7]) || isset($codigo[8]) || isset($codigo[9]) || isset($codigo[10]) || isset($codigo[11]) || isset($codigo[12]) || isset($codigo[13]) || isset($codigo[14]) || isset($codigo[15]) || isset($codigo[16]) || isset($codigo[17]) || isset($codigo[18]) || isset($codigo[19]) || isset($codigo[20]) ||isset($codigo[21]) || isset($codigo[22]) || isset($codigo[23]) || isset($codigo[24]) || isset($codigo[25]) || isset($codigo[26]) || isset($codigo[27]) || isset($codigo[28]) || isset($codigo[29]) || isset($codigo[30]) ||isset($codigo[31]) || isset($codigo[32]) || isset($codigo[33]) || isset($codigo[34]) || isset($codigo[35]) || isset($codigo[36]) || isset($codigo[37]) || isset($codigo[38]) || isset($codigo[39]) || isset($codigo[40]) ||isset($codigo[41]) || isset($codigo[42]) || isset($codigo[43]) || isset($codigo[44]) || isset($codigo[45]) || isset($codigo[46]) || isset($codigo[47]) || isset($codigo[48]) || isset($codigo[49]) || isset($codigo[50]) ||isset($codigo[51]) || isset($codigo[52]) || isset($codigo[53]) || isset($codigo[54]) || isset($codigo[55]) || isset($codigo[56])){
    date_default_timezone_set("America/Lima");
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "san fernando";
class y extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return parent::current();
    }

}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
// prepare and bind
$stmt2 = $conn->prepare("INSERT INTO pedido (TOTAL,FECHA,DNI) VALUES (:TOTAL,:FECHA,:DNI)");

$stmt2->bindParam(':TOTAL', $TOTAL);
$stmt2->bindParam(':FECHA', $FECHA);
$stmt2->bindParam(':DNI', $DNI);
// set parameters and execute
$TOTAL=$_SESSION["total"];
$FECHA=date("Y-m-d");
$DNI = $_SESSION["dniusu"];

$stmt2->execute();
$stmt4 = $conn->prepare("SELECT IDPEDIDO FROM pedido order by IDPEDIDO desc");

    $stmt4->execute();
$id=array();
$i=0;
    // set the resulting array to associative
    $result4 = $stmt4->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt4->fetchAll())) as $k=>$v) {
        $id["$i"]=$v;
        $i=$i+1;
        
    }
}catch(PDOException $e4) {
  echo "Error: " . $e4->getMessage();
}
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT STOCK FROM productos");

    $stmt->execute();
$st=array();
$i=0;
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        $st["$i"]=$v;
        $i=$i+1;
        
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
      for ($i = 1; $i <= 56; $i++) {
    if(isset($codigo["$i"])){
      try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
// prepare and bind
$stmt = $conn->prepare("INSERT INTO detpedido (IDPEDIDO,PRODUCTO_CODIGO,CANT,SUBTOTAL) VALUES (:IDPEDIDO, :PRODUCTO_CODIGO,:CANT, :SUBTOTAL)");


$stmt->bindParam(':IDPEDIDO', $IDPEDIDO);
$stmt->bindParam(':PRODUCTO_CODIGO', $PRODUCTO_CODIGO);
$stmt->bindParam(':CANT', $CANT);
$stmt->bindParam(':SUBTOTAL', $SUBTOTAL);

// set parameters and execute
$IDPEDIDO=$id[0];
$PRODUCTO_CODIGO=$codigo["$i"];
$CANT=$amount["$i"];
$SUBTOTAL=$subtotal["$i"];


$stmt->execute();

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
$stmt=null;
$e=null;
}
  }
  for ($i = 1; $i <= 56; $i++) {
    if(isset($codigo["$i"])){
      try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
// prepare and bind
$stmt = $conn->prepare("UPDATE productos SET STOCK='".($st["$i"-1]-$amount["$i"])."' WHERE producto_codigo='".$codigo["$i"]."'");
// set parameters and execute
$stmt->execute();

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
$stmt=null;
$e=null;
}
  }
$_SESSION["boleta"]="<div style='width:80%;background-color:white;margin:0 auto;border: 1px solid black'>
<table style='width: 93%;margin:0 auto;'>
<tr><td style='text-align:center'><br><img style='text-align:center' src='./img/sanfernando.png'></td>
<td><table style='width:100%;border:2px solid black;margin:0 auto;'>
    <tr>
    <td style='border:2px solid black;text-align:center;padding:5px'><b>R.U.C. 10152418596</b></td>
    </tr>
    <tr>
    <td style='border:2px solid black;text-align:center;padding:5px;background-color:#00ffcc'><b>BOLETA DE VENTA</b></td>
    </tr>
    <tr>
    <td style='border:2px solid black;text-align:center;padding:5px'><b>N° ".$id[0]."</b></td>
    </tr>
    </table>
</td>
</tr>
<tr><td><p style='font-size:20px'>Señor(a): ".$_SESSION["usuario"]." ".$_SESSION["usuapell"]."<br><br>Documento de Identidad: ".$_SESSION["dniusu"]."</p></td>
<td style='float:right;width:40%;'>
<table style='width:100%;border:1px solid black;margin:0 auto'>
<tr>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:10px;padding:5px'>Día</th>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:10px;padding:5px'>Mes</th>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:10px;padding:5px'>Año</th>
  </tr>
  <tr>
  
  <td style='border:1px solid black;color:black;background-color:white;font-size:13px;padding:5px'>".date("d")."</td>
  <td style='border:1px solid black;color:black;background-color:white;font-size:13px;padding:5px'>".date("m")."</td>
  <td style='border:1px solid black;color:black;background-color:white;font-size:13px;padding:5px'>".date("Y")."</td>
  </tr>
  </table>
  </td></tr></table>
<table style='width:94%;border:1px solid black;margin:0 auto;'>
<tr style='border:1px solid black;'>
<th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:20px'>Código</th>
<th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:20px; width:50%'>Descripción</th>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:20px'>P. Unitario</th>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:20px'>Cantidad</th>
  <th style='border:1px solid black;color:black;background-color:#00ffcc;font-size:20px'>Importe</th>
  </tr>";

    for ($i = 1; $i <= 56; $i++) {
    if(isset($codigo["$i"])){
      $_SESSION["boleta"].="<tr>
      <td style='border:1px solid black;background-color:white'><em>".$codigo["$i"]."</em></td>
      <td style='border:1px solid black;background-color:white'><em>".$producto["$i"]."</em></td>
<td style='border:1px solid black;background-color:white'><em>".$precio["$i"]." </em></td>
<td style='border:1px solid black;background-color:white'><em>".$amount["$i"]." </em></td>
<td style='border:1px solid black;background-color:white'><em>".number_format($subtotal["$i"],2)." </em></td>
</tr>";
    }
  }
  $_SESSION["boleta"].="<tr><td colspan='3' style='border:1px solid black;background-color:white'></td><td style='border:1px solid black;background-color:white'><em>TOTAL S/</em></td><td style='border:1px solid black;background-color:white'><em>".number_format($_SESSION["total"],2)."</em></td></tr>
  </table><br><br>
  </div>";
}
  echo $_SESSION["boleta"];
  for($i=1;$i<=56;$i++){
    unset($codigo["$i"]);
    unset($producto["$i"]);
    unset($precio["$i"]);
    unset($amount["$i"]);
    unset($subtotal["$i"]);

   }
  ?>
  <br>
  <br>
  
<br><br><br><br><br>
<footer>
  <div style="display: flex; background-color: #B4DEF9;width: 100%">
    <div class="f" style=" padding: 30px 75px; padding-top: 80px;  " >
      <img src="https://www.san-fernando.com.pe/images/logo-footer.png" alt="footer san fernando" class="img-responsive"/>
    </div>
    <div class="f"style="text-align: left;   padding: 30px 75px;padding-top: 58px;">
      <a style="text-decoration: none; color: black" href="">Intranet</a><br><br>
      <a style="text-decoration: none;color: black" href="">Acceso a proveedores y clientes</a><br><br>
      <a style="text-decoration: none;color: black" href="">Libro de reclamaciones</a><br>
      <p style="text-align: center;"><a style="text-decoration: none; color: black;" href="" ><img src="https://www.san-fernando.com.pe/images/libro-reclamaciones.png"></a></p>
    </div>
    <div class="f" style="padding: 30px 75px;padding-top:40px">
      <p>Lima - Perú</p>
      <p>Av. República de Panamá 4295, Surquillo</p>
      <p>Teléfono: 213-5300</p>
    </div>
    <div class="f" style="display: flex;  padding: 30px 75px; padding-top: 80px">
      <div class="red" style=" padding: 10px">
        <img src="https://www.san-fernando.com.pe/images/icon-fb.png" onclick="location.href='https://www.facebook.com/san.fernando.labuenafamilia'">
      </div>
      <div class="red" style="  padding: 10px">
        <img src="https://www.san-fernando.com.pe/images/icon-yt.png" onclick="location.href='https://www.linkedin.com/company/san-fernando/'">
      </div>
      <div class="red" style=" padding: 10px">
        <img src="https://www.san-fernando.com.pe/images/icn-linkedin.png" onclick="location.href='https://www.linkedin.com/company/san-fernando/'">
      </div>
    </div>
  </div>
   <div style="background:#002878; color: white; padding: 30px">
    <div >
      <p style="text-align: center"> © San Fernando - Todos los derechos reservados (2018)</p>
    </div>
</footer>
</body>
</html>