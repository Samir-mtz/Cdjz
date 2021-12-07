<?php
///////////////////////////////////////////////////////////////////////////DECLARACION DE VARIABLES


$username = "martinez"; 
$password = "100bautismos"; 
$host = "db4free.net:3306"; 		//coneccion
$dbname = "jzwork"; 

$mision=" ";
$dueño=" ";
$correjir=" ";
$area = $_POST["area"] ?? '';
$zona = $_POST["zona"]?? '';  
$misioneros = $_POST["misioneros"] ?? '';   			//datos generales
$comentarios = $_POST["comentarios"] ?? '';
 


$boiler = $_POST["boiler"] ?? '';
$refrigerador = $_POST["refrigerador"] ?? '';    
$calenton = $_POST["calenton"] ?? '';
$microondas = $_POST["microondas"] ?? '';
$estufa = $_POST["estufa"] ?? '';    
$plancha = $_POST["plancha"] ?? '';				//funcionan	SI/NO
$gas = $_POST["gas"] ?? '';			
$cobijas = $_POST["cobijas"] ?? '';    
$cortinas = $_POST["cortinas"] ?? '';
$microondas = $_POST["microondas"] ?? '';
$aire = $_POST["aire"] ?? '';    
$sillas = $_POST["sillas"] ?? '';
$mesas = $_POST["mesas"] ?? '';


$boiler1 = $_POST["boiler1"] ?? '';
$refrigerador1 = $_POST["refrigerador1"] ?? '';    
$calenton1 = $_POST["calenton1"] ?? '';
$microondas1 = $_POST["microondas1"] ?? '';
$estufa1 = $_POST["estufa1"] ?? '';    
$plancha1 = $_POST["plancha1"] ?? '';				//Propiedad de la mision
$gas1 = $_POST["gas1"] ?? '';			
$cobijas1 = $_POST["cobijas1"] ?? '';    
$cortinas1 = $_POST["cortinas1"] ?? '';
$aire1 = $_POST["aire1"] ?? '';    
$sillas1 = $_POST["sillas1"] ?? '';
$mesas1 = $_POST["mesas1"] ?? '';





$boiler2 = $_POST["boilerc"] ?? '';
$refrigerador2 = $_POST["refrigeradorc"] ?? '';    
$calenton2 = $_POST["calentonc"] ?? '';
$microondas2 = $_POST["microondasc"] ?? '';
$estufa2 = $_POST["estufac"] ?? '';    
$plancha2 = $_POST["planchac"] ?? '';
$gas2 = $_POST["gasc"] ?? '';							//cantidades
$cobijas2 = $_POST["cobijasc"] ?? '';    
$cortinas2 = $_POST["cortinasc"] ?? '';
$aire2 = $_POST["airec"] ?? '';    
$sillas2 = $_POST["sillasc"] ?? '';
$mesas2 = $_POST["mesasc"] ?? '';



/////////////////////////////////////////////////////////////////////////////prueba de datos

if($boiler1=="Si"){
	
	$mision .= "boiler";
	$mision .=" ";
}elseif($boiler1=="No"){
	$dueño .= "boiler";
	$dueño .=" ";
}


if($refrigerador1=="Si"){
	
	$mision .= "refrigerador";
	$mision .=" ";
}elseif($refrigerador1=="No"){
	$dueño .= "refrigerador";
	$dueño .=" ";
}

if($calenton1=="Si"){
	
	$mision .= "calenton";
	$mision .=" ";
}elseif($calenton1=="No"){
	$dueño .= "calenton";
	$dueño .=" ";
}

if($microondas1=="Si"){
	
	$mision .= "microondas";
	$mision .=" ";
}elseif($microondas1=="No"){
	$dueño .= "microondas";
	$dueño .=" ";
}


if($estufa1=="Si"){
	
	$mision .= "estufa";
	$mision .=" ";
}elseif($estufa1=="No"){
	$dueño .= "estufa";
	$dueño .=" ";
}

if($plancha1=="Si"){
	
	$mision .= "plancha";
	$mision .=" ";
}elseif($plancha1=="No"){
	$dueño .= "plancha";
	$dueño .=" ";
}

if($gas1=="Si"){
	
	$mision .= "gas";
	$mision .=" ";
}elseif($gas1=="No"){
	$dueño .= "gas";
	$dueño .=" ";
}

if($cobijas1=="Si"){
	
	$mision .= "cobijas";
	$mision .=" ";
}elseif($cobijas1=="No"){
	$dueño .= "cobijas";
	$dueño .=" ";
}


if($cortinas1=="Si"){
	
	$mision .= "cortinas";
	$mision .=" ";
}elseif($cortinas1=="No"){
	$dueño .= "cortinas";
	$dueño .=" ";
}

if($aire1=="Si"){
	
	$mision .= "aire";
	$mision .=" ";
}elseif($aire1=="No"){
	$dueño .= "aire";
	$dueño .=" ";
}

if($sillas1=="Si"){
	
	$mision .= "sillas";
	$mision .=" ";
}elseif($sillas1=="No"){
	$dueño .= "sillas";
	$dueño .=" ";
}

if($mesas1=="Si"){
	
	$mision .= "mesas";
	$mision .=" ";
}elseif($mesas1=="No"){
	$dueño .= "mesas";
	$dueño .=" ";
}

///////////////////////////////////////////////////////////////////////////////////////////////////////prueba 2

if($boiler=="No"){
	
	$correjir .= "boiler";
	$correjir .=" ";
}


if($refrigerador=="No"){
	
	$correjir .= "refrigerador";
	$correjir .=" ";
}

if($calenton=="No"){
	
	$correjir .= "calenton";
	$correjir .=" ";
}

if($microondas=="No"){
	
	$correjir .= "microondas";
	$correjir .=" ";
}


if($estufa=="No"){
	
	$correjir .= "estufa";
	$correjir .=" ";
}

if($plancha=="No"){
	
	$correjir .= "plancha";
	$correjir .=" ";
}

if($gas=="No"){
	
	$correjir .= "gas";
	$correjir .=" ";
}

if($cobijas=="No"){
	
	$correjir .= "cobijas";
	$correjir .=" ";
}


if($cortinas=="No"){
	
	$correjir .= "cortinas";
	$correjir .=" ";
}

if($aire=="No"){
	
	$correjir .= "aire";
	$correjir .=" ";
}

if($sillas=="No"){
	
	$correjir .= "sillas";
	$correjir .=" ";
}

if($mesas=="No"){
	
	$correjir .= "mesas";
	$correjir .=" ";
}

///////////////////////////////////////////////////////////////////////////////////////////////////// conexion

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `inventario` (`area`, `zona`, `boiler`, `refrigerador`, `calenton`, `microondas`, `estufa`, `plancha`, `gas`, `cobijas`, `cortinas`, `aire`, `sillas`, `mesas`, `mision`, `dueño`, `comentarios`, `misioneros`, `correjir`) VALUES ('$area', '$zona', '$boiler2','$refrigerador2', '$calenton2', '$microondas2', '$estufa2', '$plancha2', '$gas2', '$cobijas2', '$cortinas2', '$aire2', '$sillas2', '$mesas2', '$mision', '$dueño', '$comentarios', '$misioneros', '$correjir')";


if (mysqli_query($conn, $sql)) {
    header('Location: Terminado.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>