<!DOCTYPE html>
<html>
<head>
  <title>Carrito de Compras-San Fernando</title>
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
      font-size: 25px;
   }
   a{
      color: black;
        text-decoration: none;

    }
    a:hover {
        color: rgb(19, 57, 134,0.8);
    }
    .conten{
      width: 100%;
      background-color: white;
    }
    .menu{
        text-align: center;
        padding: 5px;
        border-bottom: 2px;
        font-size: 15px;
        font-family: Arial black;
    }
  </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <?php
    include('nav.php');
    ?>
    <div class="conten">
    <nav class="menu">
      <a href="gestioncontrol.php?action=pavo" style="padding: 0 12px;transition: all 0.5s ease;">Pavita</a>
      <a href="gestioncontrol.php?action=cerdo" style="padding: 0 12px;transition: all 0.5s ease;">Cerdo</a>
      <a href="gestioncontrol.php?action=congelados" style="padding: 0 12px;transition: all 0.5s ease;">Congelados</a>
      <a href="gestioncontrol.php?action=embutidos" style="padding: 0 12px;transition: all 0.5s ease;">Embutidos</a>
      <a href="gestioncontrol.php?action=pollo" style="padding: 0 12px;transition: all 0.5s ease;">Pollo</a>
      <a href="gestioncontrol.php?action=huevo" style="padding: 0 12px;transition: all 0.5s ease;">Huevo</a>
    </nav>
  </div>
  </hr>
    <h1 style="background-color: #002283 ;margin: 0px"><p id="titulo">CARRITO</p></h1>
<br><br><br>
<table style='border: 2px solid black;margin: 0 auto;width: 70%'>
    <thead>
      <tr style="text-decoration:none">
        <th colspan="7" style="background-color:#005c99;border: 1px solid black"><em>Mi Carrito de Compras</em></th>
      </tr>
      <tr style="text-decoration:none;">
        <th colspan="2" style="background-color:#005c99;border: 1px solid black"><em>total pagar:S/ <?=$cart->get_total_payment();?></em></th>
        <th colspan="4" style="background-color:#005c99;border: 1px solid black"><em>total items: <?=$cart->get_total_items();?></em></th>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr style="text-decoration:none">
          <th style="background-color:#005c99;border:1px solid black"><em>Código</em></th>
          <th style="background-color:#005c99;border:1px solid black"><em>Producto</em></th>
          <th style="background-color:#005c99;border:1px solid black"><em>Precio</em></th>
          <th style="background-color:#005c99;border:1px solid black"><em>Cantidad</em></th>
          <th style="background-color:#005c99;border:1px solid black"><em>Subtotal</em></th>
          <th style="background-color:#005c99;border:1px solid black"><em>Opción</em></th>
        </tr>
            <?=$cart->get_items();?>
    </tbody>
  </table>
  <br>
  <br>
  <?php 
        if($_SESSION["producto1"]=='' && $_SESSION["producto2"]=='' &&$_SESSION["producto3"]=='' && $_SESSION["producto4"]=='' && $_SESSION["producto5"]=='' && $_SESSION["producto6"]==''&&$_SESSION["producto7"]==''&&$_SESSION["producto8"]==''&&$_SESSION["producto9"]==''&&$_SESSION["producto10"]==''&&$_SESSION["producto11"]=='' && $_SESSION["producto12"]=='' &&$_SESSION["producto13"]=='' && $_SESSION["producto14"]=='' && $_SESSION["producto15"]=='' && $_SESSION["producto16"]==''&&$_SESSION["producto17"]==''&&$_SESSION["producto18"]==''&&$_SESSION["producto19"]==''&&$_SESSION["producto20"]==''&&$_SESSION["producto21"]=='' && $_SESSION["producto22"]=='' &&$_SESSION["producto23"]=='' && $_SESSION["producto24"]=='' && $_SESSION["producto25"]=='' && $_SESSION["producto26"]==''&&$_SESSION["producto27"]==''&&$_SESSION["producto28"]==''&&$_SESSION["producto29"]==''&&$_SESSION["producto30"]==''&&$_SESSION["producto31"]=='' && $_SESSION["producto32"]=='' &&$_SESSION["producto33"]=='' && $_SESSION["producto34"]=='' && $_SESSION["producto35"]=='' && $_SESSION["producto36"]==''&&$_SESSION["producto37"]==''&&$_SESSION["producto38"]==''&&$_SESSION["producto39"]==''&&$_SESSION["producto40"]==''&&$_SESSION["producto41"]=='' && $_SESSION["producto42"]=='' &&$_SESSION["producto43"]=='' && $_SESSION["producto44"]=='' && $_SESSION["producto45"]=='' && $_SESSION["producto46"]==''&&$_SESSION["producto47"]==''&&$_SESSION["producto48"]==''&&$_SESSION["producto49"]==''&&$_SESSION["producto50"]==''&&$_SESSION["producto51"]=='' && $_SESSION["producto52"]=='' &&$_SESSION["producto53"]=='' && $_SESSION["producto54"]=='' && $_SESSION["producto55"]=='' && $_SESSION["producto56"]==''){

          echo '<p style="text-align: center;color:red;font-size:20px"><b>(Sus productos apareceran aquí.)</b></p>';
        }else{
          echo '<div style="text-align: center">
          <a href="gestioncontrol.php?action=registroped"><input type="submit" value="Realizar compra" style="padding:10px;font-size:20px;border-radius: 10px;color: white;background-color: black;border: 1px solid white;width:20%;outline: none;"></a>
            </div>';
        }
     ?>
  <br><br><br><br>
  <?php
      include("footer.php")
  ?>
</body>
</html>