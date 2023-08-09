<!DOCTYPE html>
<html>
<head>
  <title>Mis Pedidos-San Fernando</title>
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
  	width: 90%;
      text-align: center;
      color: #D6BC5A;
        font-size: 40px;
  background-size: 100%;
  background-color: #002283 ;
  padding:20px; 
  margin: 0px;
    }
  th{
      text-align: center;
      font-size:25px;
   }
  </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <?php
    include('nav.php');
    ?>
    <h1 style="background-color: #002283 ;margin: 0px"><p id="titulo">MIS PEDIDOS</p></h1>
<br><br>
<br><div style="margin: 0 auto;text-align: left;width: 65%"><a href="gestioncontrol.php?action=mipedi" style="border-radius: 10px;color: white;background-color: black;border: 1px solid white;text-decoration: none;padding: 10px">< Volver</a></div>
<br>
      <?php
  echo "<table style='width: 65%;border:2px solid black;margin:0 auto;'>";
  echo "<tr style='border:2px solid black;'>";
  echo "<th style='border:2px solid black;background-color:#669999' colspan='5'><em>Detalles del pedido N° ".$_GET["val"]."</em></th>";
  echo "</tr>";
  echo "<tr style='border:2px solid black;background-color:#669999'>";
  echo "<th style='border:2px solid black;background-color:#669999;width:18%'><em>Código</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Nombre</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Precio</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999;'><em>Cantidad</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Importe</em></th>";
  echo "</tr>";
  
  class TableRows extends RecursiveIteratorIterator {
  public function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  public function current() {
    return "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><b><em>" . parent::current(). "</em></b></td>";
  }

  public function beginChildren() {
    echo "<tr>";
  }

  public function endChildren() {

    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "san fernando";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT productos.producto_codigo,productos.producto_nombre,productos.producto_precio,detpedido.CANT,detpedido.SUBTOTAL FROM productos INNER JOIN detpedido ON detpedido.PRODUCTO_CODIGO=productos.PRODUCTO_CODIGO WHERE IDPEDIDO=".$_GET["val"]."");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


?>


<br>
<br><br>
<br><br>
<?php
      include("footer.php")
  ?>
</body>
</html>