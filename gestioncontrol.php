<?php
if(isset($_GET['action'])){
	switch ($_GET['action']) {
		case 'login':
			include("loginsf.php");
			break;
		case 'productos':
		include_once('productos.php');
include_once('carrito.php');
$product=new Product();
$cart= new Cart();
			include("home.php");
			break;
		case 'registrarse':
			include("registro.php");
			break;
		case 'pollo':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("pollo.php");
			break;
		case 'pavo':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("pavos.php");
			break;
		case 'embutidos':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("embutidos.php");
			break;
		case 'congelados':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("congelados.php");
			break;
		case 'cerdo':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("cerdo.php");
			break;
		case 'huevo':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("huevo.php");
			break;
		case 'carrito':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
		if(isset($_GET['q'])){
	          switch ($_GET['q']) {
		      case 'add':
			     $cart ->add_item($_GET['code'],$_GET['amount']);
			      break;
		      case 'remove':
			      $cart->remove_item($_GET['code']);
			     break;
	              }
                }
			include("carritodecompras.php");
			break;
		case 'registroped':
			include("pedidorealizado.php");
			break;
		case 'mipedi':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("mispedidossf.php");
			break;
		case 'midetpedido':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("midetped.php");
			break;
        case 'vision-mision':
		include_once('productos.php');
        include_once('carrito.php');
        $product=new Product();
        $cart= new Cart();
			include("mision_vision.php");
			break;
	}
}
?>