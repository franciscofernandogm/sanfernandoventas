
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
<br>


<?php
  echo "<table style='width:60%;border:2px solid black;margin:0 auto;'>";
  echo "<tr style='border:2px solid black;'>";
  echo "<th style='border:2px solid black;background-color:#669999' colspan='5'><em>Lista De Mis Pedidos</em></th>";
  echo "</tr>";
  echo "<tr style='border:2px solid black;background-color:#669999'>";
  echo "<th style='border:2px solid black;background-color:#669999;width:18%'><em>Mi pedido</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999;width:18%'><em>N° boleta</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Total</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Fecha</em></th>";
  echo "<th style='border:2px solid black;background-color:#669999'><em>Opción</em></th>";
  echo "</tr>";
  
include("conexion2.php");
$objConexion= new Conexion();
$conexion=$objConexion-> conectar();

$solicitud="SELECT IDPEDIDO,TOTAL,FECHA FROM pedido WHERE DNI=".$_SESSION["dniusu"];

$resultado=mysqli_query($conexion,$solicitud);
$i=1;
while($fila=mysqli_fetch_array($resultado)){

    echo "<tr>";
    echo "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><b><em>".$i."</b></em></td>";
    echo "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><b><em>N°".$fila['IDPEDIDO']."</b></em></td>";
    echo "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><b><em>".$fila['TOTAL']."</b></em></td>";
    echo "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><b><em>".$fila['FECHA']."</b></em></td>";
    echo "<td style='border:2px solid black;background-color:#ccffff;text-align:center'><a href='gestioncontrol.php?action=midetpedido&val=".$fila['IDPEDIDO']."'><input type='submit' value='Ver detalles' style='padding:6px;border-radius: 10px;color: white;background-color: black;border: 2px solid white;text-decoration: none;outline: none;'></a></td>";
    echo "</tr>";
    $i=$i+1;
    
}

echo "</table>";
?>
<br>
<br>
<br>
<br>
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