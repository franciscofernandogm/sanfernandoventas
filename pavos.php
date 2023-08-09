<!DOCTYPE html>
<html>
<head>
  <title>Pavos | San Fernando</title>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/375552df66.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="functions.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
  <style>
    body{
    background-image: url('https://img.freepik.com/foto-gratis/mantel-cuadros_127657-12693.jpg?size=626&ext=jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  #titulo{
    width: 88%;
      text-align: center;
      color: #D6BC5A;
        font-size: 40px;
  background-size: 100%;
  background-color: #002283 ;
  padding:20px; 
  margin: 0px;
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
    <h1 style="background-color: #002283 ;margin: 0px"><p id="titulo">PAVOS</p></h1>
<br><br><br>
<table style='margin: 0 auto'>
  <tbody>
    <?=$product->pavo_products();?>
  </tbody>
  </table>
  <br><br>
  <?php
      include("footer.php")
  ?>
</body>
</html>