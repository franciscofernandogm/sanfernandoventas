<link rel="stylesheet" href="./css/NavStyle.css">
<nav id="menu-fixed">
    <div>
        <a href="https://www.san-fernando.com.pe"><img src="./img/logo.png" alt="logo"></a>
    </div>
    <ul>
        <li class="navegador"><a href='gestioncontrol.php?action=vision-mision'>NOSOTROS</a></li>
        <li class="navegador"><a href='gestioncontrol.php?action=productos'>PRODUCTOS</a></li>
        <li class="navegador"><a href='gestioncontrol.php?action=mipedi'>MIS PEDIDOS</a></li>
        <li class="navegador"><a href='gestioncontrol.php?action=carrito'><i class="fas fa-shopping-cart"></i> <?=$cart->get_total_items();?></a></li>
        <li class="navegador"><a><i class='fas fa-user-circle'></i><?php echo $_SESSION["usuario"];?></a></li>
        <li class="navegador"><a href='gestioncontrol.php?action=login'><button type="button">Salir</button></a></li>
    </ul>
</nav>