<!DOCTYPE html>
<html>
<head>
  <link rel="icon"href="https://www.san-fernando.com.pe/images/logo.png">

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">


</head><style type="text/css">
  .img-contenedor img {
    z-index:0;
-webkit-transition:all .9s ease; /* Safari y Chrome */
-moz-transition:all .9s ease; /* Firefox */
-o-transition:all .9s ease; /* IE 9 */
-ms-transition:all .9s ease; /* Opera */
width:65%;
}
.img-contenedor:hover img {
  z-index:0;
-webkit-transform:scale(1.25);
-moz-transform:scale(1.25);
-ms-transform:scale(1.25);
-o-transform:scale(1.25);
transform:scale(1.25);
}
.img-contenedor {/*Ancho y altura son modificables al requerimiento de cada uno*/
width:90%;
z-index:0;
overflow:hidden;
}
.boton {
  color: rgba(255, 255, 255, 0.9) !important;
  font-size: 20px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: #318aac;
  border: 2px solid;
  border-color: #318aac;
  position: relative;
}
.boton:hover {
  color: rgba(255, 255, 255, 1) !important;
  box-shadow: 0 4px 16px #7B2F2C;
  transition: all 0.2s ease;
}
</style>

<body>

</body>
</html>
<?php
include_once('conexion.php');
class Product extends Model{
  public $code;
  public $product;
  public $price;

  public function __construct() {
        parent::__construct();
    }

    public function pollo_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo IN ('P01','P02','P03','P04','P05','P06','P07','P08','P09','P10','P11','P12','P13')");
      $html='';
      $i=0;
      $pollo = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollo-brasa-v2-copia-11504.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollolightenterosnpiel5379.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_image-11090.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollo_muslo_natural1469.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_piernas4529.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollo_pechugaespecial_natural2717.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_piernita_pollo4446.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_polloconmenudenciac25180.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollo-sin-menudencia8824.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollo-entero-con-menudencia9085.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pollosinmenudenciac2-15835.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_enrrollado_deliziapollo9280.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_enrollado-de-pollo-americano6815.jpg?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
        $code="'".$key['producto_codigo']."'";
           if($key['producto_codigo']=="P01" || $key['producto_codigo']=="P04" || $key['producto_codigo']=="P07" || $key['producto_codigo']=="P10"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height:412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white;height:55px;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pollo["$i"].'"  width="150px" height="155px" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P02" || $key['producto_codigo']=="P05" || $key['producto_codigo']=="P08" ||$key['producto_codigo']=="P11" ||$key['producto_codigo']=="P13"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height:412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 10px; margin: 0px; background-color:#002283;color:white;height:55px;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pollo["$i"].'" width="150px" height="155px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P03" || $key['producto_codigo']=="P06" || $key['producto_codigo']=="P09"  || $key['producto_codigo']=="P12"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height:412px ; text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 10px; margin: 0px; background-color:#002283;color:white; height:55px;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pollo["$i"].'"  width="150px" height="155px"; style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }
        $i=$i+1;
        } 
      return $html;
    }

    public function pavo_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo IN ('P14','P15','P16','P17','P18','P19','P20','P21','P22','P23','P24','P25')");
      $html='';
      $i=0;
      $pavita = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_enrollado-de-pavita-americano4783.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_enrrollado_deliziapavita7197.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_lomitodepavitasalteado_14106.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_corazo-ndepavitaanticuchero_14217.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_carnemolidadepavita_13977.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pechuga-de-pavita-en-trozos-cong6531.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chuleta-de-pavita-cong6383.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_guiso-de-pechuga-de-pavita-cong5978.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_rodajacaseradepavitacong2551.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_brazuelo-de-pavita-en-rodajas-cong6740.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_guisodemuslopavo_01127672.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-03ala-s-13-05-467445.png?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
        $code="'".$key['producto_codigo']."'";
           if($key['producto_codigo']=="P14" || $key['producto_codigo']=="P17" || $key['producto_codigo']=="P20" || $key['producto_codigo']=="P23"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pavita["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P15" || $key['producto_codigo']=="P18" || $key['producto_codigo']=="P21" ||$key['producto_codigo']=="P24"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pavita["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P16" || $key['producto_codigo']=="P19" || $key['producto_codigo']=="P22"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px ;height: 412px ; text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$pavita["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }elseif($key['producto_codigo']=="P25"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ; text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0; padding: 15px; padding-left:20px; padding-bottom:30px;padding-top:50px" ><img src="'.$pavita["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }
        
        $i=$i+1;
        } 
      return $html;
    }

    public function embutidos_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo IN ('P26','P27','P28','P29','P30','P31','P32','P33','P34')");
      $html='';
      $i=0;
      $embutidos = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chorizococidoparrillerox4804245.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chorizococido5000437.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_jamondepavitapequen-o0282.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hotdogahumadox1650601.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hotdogsfx2000353.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_pate12189.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_jamonadadepavita8900.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_jamonetaconpollo6301.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chicharro-n-de-prensa-29867.jpg?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
        $code="'".$key['producto_codigo']."'";
           if($key['producto_codigo']=="P26" || $key['producto_codigo']=="P29" || $key['producto_codigo']=="P32"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$embutidos["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P27" || $key['producto_codigo']=="P30" || $key['producto_codigo']=="P33"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$embutidos["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P28" || $key['producto_codigo']=="P31" || $key['producto_codigo']=="P34"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px ;height: 412px ; text-align: center;border:3px solid #ffbb99">
            <div style="vertical-align: middle; font-size:18px; padding: 13px; background-color:#002283;color:white; height:40px; vertical-align: middle;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$embutidos["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }
        $i=$i+1;
        } 
      return $html;
    }

    public function congelados_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo IN ('P35','P36','P37','P38','P39','P40','P41','P42','P43')");
      $html='';
      $i=0;
      $congelados = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesadeparrilladeres0244.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesaparrillerapavita-10083.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_hamburguesadepavita-15935.png?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-49-271847.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_nuggetsdepavita-13017.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_dinonuggets0231.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-28-480571.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_capturadepantalla2020-04-04ala-s-09-15-509792.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_nuggetspollox10-1-12324.jpg?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
         $code="'".$key['producto_codigo']."'";
           if($key['producto_codigo']=="P35"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; " ><img src="'.$congelados["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P38"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; padding-bottom:50px; padding-top:40px" ><img src="'.$congelados["$i"].'"   width="110px" height="100px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P41"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$congelados["$i"].'"  width="90px" height="170px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P36"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$congelados["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P39"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; padding-bottom:50px; padding-top:40px" ><img src="'.$congelados["$i"].'"  width="110px" height="100px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P42"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$congelados["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P37" || $key['producto_codigo']=="P40" || $key['producto_codigo']=="P43"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px ;height: 412px ; text-align: center;border:3px solid #ffbb99">
            <div style="vertical-align: middle; font-size:18px; padding: 13px; background-color:#002283;color:white; height:40px; vertical-align: middle;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$congelados["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }
        $i=$i+1;
        } 
      return $html;
    }
    public function huevo_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo='P56'");
      $html='';
      $i=0;
      $huevos = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_huevos22505.jpg?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
        $code="'".$key['producto_codigo']."'";
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$huevos["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>
            </tr>';
        } 
      return $html;
    }

    public function cerdo_products(){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo IN ('P44','P45','P46','P47','P48','P49','P50','P51','P52','P53','P54','P55')");
      $html='';
      $i=0;
      $cerdo = array('https://dojiw2m9tvv09.cloudfront.net/38342/product/M_asado-de-cerdo-34762.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_brazuelo-deshuesado-de-cerdo-4kg-14392.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_brazuelo-de-cerdo-6kg4580.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chicharron_panceta4597.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_copiadechuleta_parrillera5492.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_cerdo14610.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_chuleta_lomo5811.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_9-costillita-lomo-jr8993.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_4-bife-de-lomo8240.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_7-enrollado-de-brazuelo-de-cerdo8720.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_6-enrollado-de-bondiola-de-cerdo8640.jpg?75','https://dojiw2m9tvv09.cloudfront.net/38342/product/M_5-solomillo-de-cerdo8502.jpg?75');
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key) {
       $code="'".$key['producto_codigo']."'";
           if($key['producto_codigo']=="P44"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$cerdo["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P47"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; padding-bottom:40px; padding-top:40px" ><img src="'.$cerdo["$i"].'"   width="110px" height="115px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P50"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; padding-bottom:50px; padding-top:40px" ><img src="'.$cerdo["$i"].'"   width="110px" height="100px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }else if( $key['producto_codigo']=="P53"){
           $html.='<tr>
           <td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px;height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$cerdo["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%;  ">
            <tr><td class="cua" style="text-align:center;color:red; font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>

            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">'.'    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P45" ){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$cerdo["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P48"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px; padding-bottom:50px; padding-top:40px" ><img src="'.$cerdo["$i"].'"   width="110px" height="100px" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P48" || $key['producto_codigo']=="P51" || $key['producto_codigo']=="P54"){
               $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px; height: 412px ;text-align: center;border:3px solid #ffbb99">
            <div style="font-size:18px; padding: 13px; margin: 0px; background-color:#002283;color:white; height:40px; vertical-align: middle;
">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$cerdo["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table>
            
            </div>';
        }elseif($key['producto_codigo']=="P46" || $key['producto_codigo']=="P49" || $key['producto_codigo']=="P52" || $key['producto_codigo']=="P55"){
        $html.='<td style="padding:10px">
        <div style=" padding-top: 20px; padding-bottom: 20px; margin:0 auto;overflow:hidden; background-color:white;width:280px ;height: 412px ; text-align: center;border:3px solid #ffbb99">
            <div style="vertical-align: middle; font-size:18px; padding: 13px; background-color:#002283;color:white; height:40px; vertical-align: middle;">'.$key['producto_nombre'].'</div>
            <div class="img-contenedor" style="z-index:0;  padding: 15px; padding-left:20px" ><img src="'.$cerdo["$i"].'"  width="65%" style="z-index:0;"
   ></div>
            <table style="width: 100%; cellpadding:10px ">
            <tr><td class="cua" style="text-align:center;color:red;font-size:23px"><b>S/'.$key['producto_precio'].'</b></td></tr>
            <tr><td class="cua" style="text-align:center;"><b> Stock: '.$key['STOCK'].'</b></td></tr>
            <tr><td style="text-align:center; "><div style="display: flex; padding-left:20px">
            <input type="number" id="'.$key['producto_codigo'].'" value="1" min="1" style="font-size:13px;border-radius:10px;padding:5px; width:35px; border: 0.8px solid gray">    
            <button class="boton" type="button" style="font-size:18px;padding:10px; border:1px solid black;width:180px;color:white;background-color:#F0423A;cursor:pointer; border-radius: 10px" onclick="addProduct('.$code.');"><i class="fas fa-shopping-basket"></i>'.'  '.'Agregar</button>

            </div></td>
        </table></td></tr>';
        }
        $i=$i+1;
        } 
      return $html;
    }



    public function search_code($code){
      $sql=$this->db->query("SELECT * FROM productos WHERE producto_codigo='$code'");
      $product=$sql->fetch_all(MYSQLI_ASSOC);
      $status=0;
      foreach ($product as $key) {
        $this->code =$key['producto_codigo'];
        $this->product =$key['producto_nombre'];
        $this->price =$key['producto_precio'];
        $status++;
      }
      return $status;
    }
}
?>