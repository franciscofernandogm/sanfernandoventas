<!DOCTYPE html>
<html>
<head>
	<title>Nosotros | San Fernando</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./css/NavStyle.css">
	<style>
		body{
			background-image:url(https://i.pinimg.com/originals/2c/5d/01/2c5d01f48b81da69f2085ad1fc15ff7d.jpg);
			background-color: opacity : 
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100%;
		}
		header{
			text-align: center;
			background-color: black;
			color: white;
			padding: 10px;
		}
		#titulo{
    width: 85%;
      text-align: center;
      color: #D6BC5A;
        font-size: 40px;
  background-size: 100%;
  background-color: #002283 ;
  padding:20px; 
  margin: 0px;
    }
		.contenedor{
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
		}
		.fam_text{
			width: 50%;
			max-width: 600px;
			background-color: rgba(164, 163, 160,0.5);

		}
		.fam_img{
			width: 50%;
		}
		.video{
			padding-bottom: 2%;
			padding-top: 2%;
			padding-left: 20%;
			padding-right: 20%;
			
		}
		.titumedi{
			text-align: center; 
			font-size: 40px;
		}
		.textmedi{
			font-size: 22px;
			padding: 10px;
		}
		.mision{
			width: 48%;
			margin: 10px;
		}
		.vision{
			width: 50%;
		}
		.texto{
			padding-left: 25px;
		}
		.medida{
			width: 120px;
			padding: 50px;
		}

		div.fam_img {
  width: 20px;
  height: 600px;
  background: green;
  transition: width 2s;
  z-index: 1;
}

div.fam_img:hover {
  width: 1000px;
}

}
	</style>
	<meta charset="utf-8">
  <script src="https://kit.fontawesome.com/375552df66.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

	<?php
    include('nav.php');
    ?>
	<h1 style="background-color: #002283;text-shadow: 4px 4px 14px black ;margin: 0px"><p id="titulo">NOSOTROS</p></h1>
	
	<section >
		<div style="display: flex;">
			<div class="contenedor" style="width: 580px;padding-right: 20px; z-index: 5; margin-right: 10px; color: white">
				<h1 style="text-shadow: 4px 4px 14px black">MISIÓN  </h1>
				<p style="font-size: 20px; text-shadow: 4px 4px 14px black">	Contribuir al bienestar de la humanidad, suministrando alimentos de consumo masivo en el mercado global.</p>
			</div>
			<br><br>
			
			<div  class="contenedor2" style="width: 580px; z-index: 5; adding-right: 20px ; color: white">
				<h1 style="text-shadow: 4px 4px 14px black" >VISIÓN  </h1>
				<p style="font-size: 20px;   text-shadow: 4px 4px 14px black;
">	Ser competitivos a nivel mundial, suministrando productos de valor agregado para la alimentación humana.</p>
			</div>
			<br><br>
		</div>	
		<div class="" style="background-color: #75FBCF;opacity: 0.90 ">
			
			<div class=""; style="padding: 60px; padding-top: 100px;text-align: center; opacity: 0.7; padding-bottom: 50px">
				<h1 class="titumedi">
					El valor de una gran familia</h1>
				</p class="titumedi">

					En 1948, cuando creamos San Fernando, una de las metas que nos pusimos fue crear una gran familia, algo que hemos estado logrando a través de los años.</p>
				</div>
			<div style="text-align: center;">
				<img src="https://img.publimetro.pe/sites/7/2020/07/11/fdtf4gubgne6zfgg3xcyanr6zi.jpg"></div>
		</div>
		
		
		<div class="" style="display: flex; padding-left:230px;text-align: center;">
			<div class="01">
				<img src="https://www.san-fernando.com.pe/images/ISO_9001.png" class="medida">
			</div>
			<div class="02">
				<img src="https://www.san-fernando.com.pe/images/ISO_14001.png" class="medida">
			</div><br>
			<div class="03">
				<img src="https://www.san-fernando.com.pe/images/ISO_18001.png" class="medida">
			</div>
			<div class="04">
				<img src="https://www.san-fernando.com.pe/images/seguridad_alimentaria.jpg" class="medida">
			</div>
		</div>
		
			<div style="background-color: #FBD065; display: flex; opacity: 0.90;">
				<div  >
					<img src="https://novotec.com.pe/lavanderia/wp-content/uploads/2016/10/avicola-sanfernando-proyecto-lavanderia-novotec-peru.jpg" style="width: 600px; height: auto;">
				</div>
				<div style="padding: 25px; padding-top: 60px">
					<h2 class="titumedi">
						Responsabilidad Social
					</h2>
					<p style="font-size: 22px;" class="texto">
						En San Fernando reafirmamos nuestro compromiso no sólo con nuestros clientes, sino con todos nuestros grupos de interés, principalmente con nuestros colaboradores, la comunidad y el medio ambiente.
					</p>
				</div>
			</div>
		
		<div class="video">
			<h2 style="text-align: center;">FAMILIAS UNIDAS LUCHANDO DIA A DIA</h2><p style="text-align: center; ">
			<iframe width="600" height="380" src="https://www.youtube.com/embed/o6Sh31UKjqk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
		</div>
	</section>
	<?php
      include("footer.php")
  ?>
</body>
</html>