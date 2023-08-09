<!DOCTYPE html>
<html>
<head>
	<title>Home-San Fernando</title>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/375552df66.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
  <style type="text/css">
    * {
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    z-index: 2;
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
    .logo{
      position:sticky;
      float:left;
      position: relative;
      left: 50px;
    }
   .swiper-container {
      width: 100%;
      padding-top: 200px;
      padding-bottom: 200px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 500px;
      height: 500px;
      background: #fff;
      position: relative;
      top: -220px;
    }
    .imagenes{
      width: 500px;
      height: 500px;

    }
  </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="background-image: url('https://media-exp1.licdn.com/dms/image/C561BAQFW0VeGebvBVw/company-background_10000/0?e=2159024400&v=beta&t=1g_Ngy8kVKQZVGXAUY80GqlD7MpbcPAC6baPRixEu3Y');">
    <?php
    include('nav.php');
    ?>
<h1 style="background-color: #002283 ;margin: 0px"><p  id="titulo">PRODUCTOS</p></h1>
<br><br><br>
 <div class="swiper-container" style="height:650px">
    <div class="swiper-wrapper" style="padding: 20px 5px;">
      <div class="swiper-slide"><a href="gestioncontrol.php?action=pollo"><img class='imagenes' src="https://www.65ymas.com/uploads/s1/36/47/4/por-que-la-carne-de-pollo-gusta-y-se-consume-tanto.jpeg"></a><h1 style="text-align:center">POLLO</h1></div>
      <div class="swiper-slide"><a href="gestioncontrol.php?action=pavo"><img class='imagenes' src="https://www.vanidades.com/wp-content/uploads/2018/06/Pavo-glaseado-con-mostaza-y-miel-de-arce-1280x720.jpg"></a><h1 style="text-align:center">PAVO</h1></div>
      <div class="swiper-slide"><a href="gestioncontrol.php?action=embutidos"><img class='imagenes' src="https://tecnosolucionescr.net/templates/yootheme/cache/7_embutidos-c8a6ff04.png"></a><h1 style="text-align:center">EMBUTIDOS</h1></div>
      <div class="swiper-slide"><a href="gestioncontrol.php?action=congelados"><img class='imagenes' src="https://locosxlaparrilla.com/wp-content/uploads/2015/02/Receta-recetas-locos-x-la-parrilla-locosxlaparrilla-hamburguesa-pollo-nuggets-receta-hamburguesa-pollo-receta-hamburguesa-receta-nuggets-2.jpg"></a><h1 style="text-align:center">BURGERS Y NUGGETS</h1></div>
      <div class="swiper-slide"><a href="gestioncontrol.php?action=cerdo"><img class='imagenes' src="https://elcomercio.pe/resizer/K43eA_D9OnF_314S35sMoaKvW7s=/1200x900/smart/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/XQC5UJJ4S5F5RKEUGCJ2QPBBMM.jpg"></a><h1 style="text-align:center">CERDO</h1></div>
      <div class="swiper-slide"><a href="gestioncontrol.php?action=huevo"><img class='imagenes' src="https://ep01.epimg.net/elpais/imagenes/2020/02/20/estilo/1582190872_291135_1582192738_noticia_normal.jpg"></a><h1 style="text-align:center">HUEVO</h1></div>

    </div>

    <div class="swiper-pagination"></div>
  </div>

 
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

  <footer>
  <div style="display: flex; background-color: #B4DEF9 ">
    <div class="f" style=" padding: 30px 75px; padding-top: 80px;  " >
      <img src="https://www.san-fernando.com.pe/images/logo-footer.png" alt="footer san fernando" class="img-responsive"/>
    </div>
    <div class="f"style="text-align: left;   padding: 30px 75px;padding-top: 58px;">
      <a style="text-decoration: none; color: black" href="">Intranet</a><br><br>
      <a style="text-decoration: none;color: black" href="">Acceso a proveedores y clientes</a><br><br>
      <a style="text-decoration: none;color: black" href="">Libro de reclamaciones</a><br>
      <p style="text-align: center;"><a style="text-decoration: none; color: black;" href="" ><img src="https://www.san-fernando.com.pe/images/libro-reclamaciones.png"></a></p>
    </div>
    <div class="f" style="padding: 30px 75px;padding-top: 55px">
      <p>Lima - Perú</p><br>
      <p>Av. República de Panamá 4295, Surquillo</p><br>
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