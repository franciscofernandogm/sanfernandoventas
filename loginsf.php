<?php
include_once('productos.php');
include_once('carrito.php');
$product=new Product();
$cart= new Cart();
$cart->borrar();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Iniciar Sesión-San Fernando</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/375552df66.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="https://dojiw2m9tvv09.cloudfront.net/38342/1/sf-banderin9884.png">
<style>
  .error {color:#b30000;font-size: 15px;}
  body{
    background-image: url('https://media-exp1.licdn.com/dms/image/C561BAQFW0VeGebvBVw/company-background_10000/0?e=2159024400&v=beta&t=1g_Ngy8kVKQZVGXAUY80GqlD7MpbcPAC6baPRixEu3Y');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>
</head>
<body>
<section class='sf'>
<?php
class y extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return parent::current();
    }

}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "san fernando";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Correo FROM clientes");
    $stmt->execute();
$w=array();
$i=0;
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        $w["$i"]=$v;
        $i=$i+1;
        
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
$a=array();
$emailErr = $contraseñaErr=$loginErr=$login1Err="";
$email = $contraseña=$e=$c="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"])) {
    class x extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
  }
  for ($i=0; $i <count($w) ; $i++) { 
       if($w["$i"]==$_POST["email"]){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT*FROM clientes WHERE Correo='".$w["$i"]."'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $j=0;
    foreach(new x(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      $a["$j"]=$v;
      $j=$j+1;
    }
       
  }catch(PDOException $e1) {
    echo "Error: " . $e1->getMessage();
}
$conn = null;
}
      
    }
  }
  
if (empty($_POST["email"])) {
    $emailErr = "El email es requerido";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato email inválido";
    }else{
      if(isset($a[1])){
    if($_POST["email"]!=$a[1]){
      $emailErr="Su email no esta registrado";
    }
  }elseif($_POST["email"]=="juansantos@gmail.com"){
     $e="1";
  }else{
   $emailErr="Su email no esta registrado";
  }
  }
  }
  if (empty($_POST["contraseña"])) {
    $contraseñaErr = "Se necesita contraseña";
  } else {
    $contraseña = $_POST["contraseña"];
    if(isset($a[2])){
     if($_POST["contraseña"]!=$a[2]){
      $contraseñaErr="Su contraseña es incorrecta";
    }
}elseif($_POST["contraseña"]=="admin"){
  $c="1";
}else{
  $contraseñaErr="Su contraseña es incorrecta";
}
}

  if($emailErr=='El email es requerido' || $contraseñaErr == "Se necesita contraseña"){
  $loginErr="Correo de usuario o Contraseña incorrectos";
  $login1Err="<br>Introduzca su usuario y/o contraseña";
}elseif($emailErr=='Formato email inválido' || $emailErr=='Su email no esta registrado' || $contraseñaErr=='Su contraseña es incorrecta'){
  $loginErr="Correo de usuario o Contraseña incorrectos";
  $login1Err="<br>Por favor intentelo nuevamente";
}
}

 if($emailErr=='El email es requerido'||$emailErr=='Formato email inválido'||$emailErr=='Su email no esta registrado'||$contraseñaErr == "Se necesita contraseña"||$contraseñaErr=='Su contraseña es incorrecta'){echo "";}elseif($email=="" && $contraseña==""){echo "";}else{
  if(isset($a[0])){
    $_SESSION["dniusu"]=$a[0]; 
    $_SESSION["usuario"]=$a[3];
    $_SESSION["usuapell"]=$a[4];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['contraseña']=$_POST['contraseña'];
 header("location: gestioncontrol.php?action=productos");
}else{
  header("location: administrador.php");
}

 }
?>

<br><br><br>
<form method='post' action=''>
  <div class='log'>
        <br>
        <div style="text-align: center;">
           <img src="https://dojiw2m9tvv09.cloudfront.net/38342/1/logo-azul-20052.png" width="200px" height="140px">
        </div>
        <label>INICIO SESIÓN</label>
      <table style="width: 80%;margin: 0 auto;">
      
      <tr>
      <td><span><i class="fas fa-user" style="color:black"></i></span><input type='text' id='email' name='email'  placeholder="Usuario" value="<?php echo $email;?>"></td>
      </tr>
      <tr>
      <td><span><i class="fas fa-unlock" style="color:black"></i></span><input type="password" id="pwd" name="contraseña" placeholder="Contraseña"></td>
      </tr>
  </table>
  <div style="text-align: center"><a href="gestioncontrol.php?action=registrarse">¿No estas registrado?</a></div>
  <br>
  <div class="error" style="padding-left: 65px;"><b> <?php echo $loginErr;?><?php echo $login1Err;?></b></div>
  <div style="text-align: center">
<br>
  <input type="submit" value="INICIA SESIÓN">
</div>
<br>
</div>
       </form>
  </section>
<?php
unset($loginErr);
unset($login1Err);
?>
</body>
</html>
