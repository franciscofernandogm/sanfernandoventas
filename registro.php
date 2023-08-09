<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registro-San Fernando</title>
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
$co=array();
$i=0;
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        $co["$i"]=$v;
        $i=$i+1;
        
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt2 = $conn->prepare("SELECT DNI FROM clientes");

    $stmt2->execute();
$dn=array();
$i=0;
    // set the resulting array to associative
    $result = $stmt2->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new y(new RecursiveArrayIterator($stmt2->fetchAll())) as $k=>$v) {
        $dn["$i"]=$v;
        $i=$i+1;
        
    }
}
catch(PDOException $e2) {
    echo "Error: " . $e2->getMessage();
}
$conn = null;
$fnameErr = $fapellErr = $emailErr = $dniErr= $contraseñaErr=$contraseña1Err=$aceptoErr="";
$fname= $fapell= $email = $dni= $contraseña=$contraseña1="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "*El nombre es requerido";
  } else {
    $fname = $_POST["fname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "*Solo se permiten letras y espacios en blanco";
    }
  }

  if (empty($_POST["fapell"])) {
    $fapellErr = "*Los apellidos son requeridos";
  } else {
    $fapell = $_POST["fapell"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fapell)) {
      $fapellErr = "*Solo se permiten letras y espacios en blanco";
    }
  }

if (empty($_POST["email"])) {
    $emailErr = "*El email es requerido";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Formato email inválido";
    }else{
      $rep=0;
      for ($i=0; $i <count($co) ; $i++){
             if($co["$i"]==$_POST["email"]){
              $rep=1;
             }
      }
      if($rep==1){
        $emailErr="*El correo ya esta registrado";
      }
    }
  }

  if (empty($_POST["dni"])) {
    $dniErr = "*El DNI es requerido";
  } else {
    $dni = $_POST["dni"];
    // check if e-mail address is well-formed
    if (preg_match("/^[a-zA-Z ]*$/",$dni)) {
      $dniErr = "*Formato DNI inválido";
    }else{
      $repdni=0;
      for ($i=0; $i <count($dn) ; $i++){
             if($dn["$i"]==$_POST["dni"]){
              $repdni=1;
             }
      }
      if($repdni==1){
        $dniErr="*El DNI ya esta registrado";
      }
    }
  }
  if (empty($_POST["contraseña"])) {
    $contraseñaErr = "*Se necesita contraseña";
  } else {
    $contraseña = $_POST["contraseña"];
  }
  if (empty($_POST["contraseña1"])) {
    if (empty($_POST["contraseña"])){
    $contraseña1Err = "*Se necesita contraseña";
}else{$contraseña1Err = "*Se necesita volver a escribir contraseña";}
  } else {
    $contraseña1 = $_POST["contraseña1"];
    if (isset($_POST["contraseña"])){
        if($_POST["contraseña"]!=$_POST["contraseña1"]){
            $contraseña1Err = "*Contraseña incorrecta";
        }
    }else{$contraseña1Err = "*Se necesita contraseña";}
  }
  if (empty($_POST["Acepto"])){
    $aceptoErr="Se debe aceptar términos y condiciones";
  }
  }
if( $fnameErr=='*El nombre es requerido'||$fnameErr=='*Solo se permiten letras y espacios en blanco'||$emailErr=='*El email es requerido'||$emailErr=='*Formato email inválido'||$emailErr=="*El correo ya esta registrado"||$contraseñaErr == "*Se necesita contraseña"||$contraseña1Err == "*Se necesita contraseña"||$contraseña1Err == "*Se necesita volver a escribir contraseña"||$contraseña1Err == "*Contraseña incorrecta" || $dniErr=="*El DNI ya esta registrado" || $dniErr == "*Formato DNI inválido" || $dniErr == "*El DNI es requerido" || $fapellErr == "*Los apellidos son requeridos" || $fapellErr == "*Solo se permiten letras y espacios en blanco" || $aceptoErr=="Se debe aceptar términos y condiciones"){echo "";}elseif($fname=="" && $email=="" && $contraseña=="" && $contraseña1=="" && $fapell=="" && $dni==""){echo "";}else{
    session_start();
    $_SESSION['usuario']=$_POST['fname'];
    $_SESSION['usuapell']=$_POST['fapell'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['dniusu']=$_POST['dni'];
    $_SESSION['contraseña']=$_POST['contraseña'];
// Check connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
// prepare and bind
$stmt = $conn->prepare("INSERT INTO clientes (DNI,Correo,Contra,Nombre,Apellidos) VALUES (:DNI, :Correo, :Contra,:Nombre,:Apellidos)");
$stmt->bindParam(':DNI', $DNI);
$stmt->bindParam(':Correo', $CORREO);
$stmt->bindParam(':Contra', $CONTRA);
  $stmt->bindParam(':Nombre', $NOMBRE);
  $stmt->bindParam(':Apellidos', $APELLIDOS);
  

// set parameters and execute
$DNI = $_SESSION["dniusu"];
$CORREO = $_SESSION["email"];
$NOMBRE =$_SESSION["usuario"];
$APELLIDOS = $_SESSION["usuapell"];
$CONTRA = $_SESSION["contraseña"];

$stmt->execute();

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
header("location: gestioncontrol.php?action=productos");
}


?>

<a href="gestioncontrol.php?action=login" style="color:black;padding: 20px;font-size: 20px">< Volver</a><br><br>
<form class='ho' method='post' action=''>
 <div class='log' style="width:60%">
        <br>
        <div style="text-align: center;">
           <img src="https://dojiw2m9tvv09.cloudfront.net/38342/1/logo-azul-20052.png" width="200px" height="140px">
        </div>
        <label>REGISTRO</label>
        <br>
  
            <table style="width: 85%;margin: 0 auto;" class="re">
            <tr>
      <td><label for='fname' style="text-align: left"><i class="fas fa-user" style="color:black;"></i> Nombre: </label></td>
      <td><label for='fapell'><i class="fas fa-user" style="color:black"></i> Apellidos: </label></td>
      </tr>
      <tr>
      <td><input type='text' id='fname' name='fname' placeholder="Ingrese Nombre" value="<?php echo $fname;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $fnameErr;?></b></span></td>
      <td><input type='text' id='fapell' name='fapell' placeholder="Ingrese Apellidos" value="<?php echo $fapell;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $fapellErr;?></b></span></td>
      
      </tr>
      <tr>
      <td><label for='email'><i class="fas fa-at" style="color:black"></i> Correo eletronico: </label></td>
      <td><label for='dni'><i class="fas fa-address-card" style="color:black"></i> DNI: </label></td>
      </tr>
      <tr>
      <td><input type='text' id='email' name='email' placeholder="Ingrese Correo" value="<?php echo $email;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $emailErr;?></b></span></td>
      <td><input type='text' id='dni' name='dni' placeholder="Ingrese DNI" value="<?php echo $dni;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $dniErr;?></b></span></td>
      </tr>
      <tr>
      <td><label for="pwd"><i class="fas fa-unlock" style="color:black"></i> Contraseña: </label></td>
      </tr>
      <tr>
      <td><input type="password" id="pwd" name="contraseña" placeholder="Ingrese Contraseña" value="<?php echo $contraseña;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $contraseñaErr;?></b></span></td>
      </tr>
      <tr>
      <td><label for="pwd1"><i class="fas fa-unlock" style="color:black"></i> Repetir contraseña: </label></td>
      </tr>
      <tr>
      <td><input type="password" id="pwd1" name="contraseña1" placeholder="Ingrese Contraseña" value="<?php echo $contraseña1;?>"><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $contraseña1Err;?></b></span></td>
    </tr>
    <tr>
      <td colspan="2"><input type="checkbox" name="Acepto" value="Acepto" style="text-align: left;width:15px;"><label style="font-size: 17px;">Acepto términos y condiciones</label><br><span class="error" style="font-size: 15px;padding: 0px;"><b> <?php echo $aceptoErr;?></b></span></td>
      </tr>
      </table> 
<br>
  <div style="text-align: center">
  <input class='gg' type="submit" value="REGISTRARSE">
</div>
<br>
</div>
       </form>
       <br>
  </section>

</body>
</html>