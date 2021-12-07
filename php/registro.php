<?php
///////////////////////////////////////////////////////////////////////////DECLARACION DE VARIABLES

$username = "martinez"; 
$password = "100bautismos"; 
$host = "db4free.net:3306"; 		//coneccion
$dbname = "jzwork"; 
$mision;
$dueño;

$area = $_POST["area"]
$zona = $_POST["zona"];  
$misioneros = $_POST["misioneros"];   			//datos generales
$comentarios = $_POST["comentarios"]
 


$boiler = $_POST["boiler"]
$refrigerador = $_POST["refrigerador"];    
$calenton = $_POST["calenton"];
$microondas = $_POST["microondas"]
$estufa = $_POST["estufa"];    
$plancha = $_POST["plancha"];				//funcionan	SI/NO
$gas = $_POST["gas"]			
$cobijas = $_POST["cobijas"];    
$cortinas = $_POST["cortinas"];
$microondas = $_POST["microondas"]
$aire = $_POST["aire"];    
$sillas = $_POST["sillas"];
$mesas = $_POST["mesas"]


$boiler2 = $_POST["boiler1"]
$refrigerador2 = $_POST["refrigerador1"];    
$calenton2 = $_POST["calenton1"];
$microondas2 = $_POST["microondas1"]
$estufa2 = $_POST["estufa1"];    
$plancha2 = $_POST["plancha1"];				//Propiedad de la mision
$gas2 = $_POST["gas1"]			
$cobijas2 = $_POST["cobijas1"];    
$cortinas2 = $_POST["cortinas1"];
$aire2 = $_POST["aire1"];    
$sillas2 = $_POST["sillas1"];
$mesas2 = $_POST["mesas1"]





$boiler1 = $_POST["boilerc"]
$refrigerador1 = $_POST["refrigeradorc"];    
$calenton1 = $_POST["calentonc"];
$microondas1 = $_POST["microondasc"]
$estufa1 = $_POST["estufac"];    
$plancha1 = $_POST["planchac"];
$gas1 = $_POST["gasc"]							//cantidades
$cobijas1 = $_POST["cobijasc"];    
$cortinas1 = $_POST["cortinasc"];
$aire1 = $_POST["airec"];    
$sillas1 = $_POST["sillasc"];
$mesas1 = $_POST["mesasc"]


/////////////////////////////////////////////////////////////////////////////prueba de datos

echo $area;


///////////////////////////////////////////////////////////////////////////////////////////////////// conexion

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

try 
{ 
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
} 
catch(PDOException $ex) 
{ 
    die("Failed to connect to the database: " . $ex->getMessage()); 
} 




// Agregando a lista de dueño y mision
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($boiler2=="Si"){
	
	$mision .= $boiler2;
	$mision .=" ";
}else{
	$dueño .= $boiler2;
	$mision .=" ";
}


if($refrigerador2=="Si"){
	
	$mision .= $refrigerador2;
	$mision .=" ";
}else{
	$dueño .= $refrigerador2;
	$mision .=" ";
}

if($calenton2=="Si"){
	
	$mision .= $calenton2;
	$mision .=" ";
}else{
	$dueño .= $calenton2;
	$mision .=" ";
}

if($microondas2=="Si"){
	
	$mision .= $microondas2;
	$mision .=" ";
}else{
	$dueño .= $microondas2;
	$mision .=" ";
}


if($estufa2=="Si"){
	
	$mision .= $estufa2;
	$mision .=" ";
}else{
	$dueño .= $estufa2;
	$mision .=" ";
}

if($plancha2=="Si"){
	
	$mision .= $plancha2;
	$mision .=" ";
}else{
	$dueño .= $plancha2;
	$mision .=" ";
}

if($gas2=="Si"){
	
	$mision .= $gas2;
	$mision .=" ";
}else{
	$dueño .= $gas2;
	$mision .=" ";
}

if($cobijas2=="Si"){
	
	$mision .= $cobijas2;
	$mision .=" ";
}else{
	$dueño .= $cobijas2;
	$mision .=" ";
}


if($cortinas2=="Si"){
	
	$mision .= $cortinas2;
	$mision .=" ";
}else{
	$dueño .= $cortinas2;
	$mision .=" ";
}

if($aire2=="Si"){
	
	$mision .= $aire2;
	$mision .=" ";
}else{
	$dueño .= $aire2;
	$mision .=" ";
}

if($sillas2=="Si"){
	
	$mision .= $sillas2;
	$mision .=" ";
}else{
	$dueño .= $sillas2;
	$mision .=" ";
}

if($mesas2=="Si"){
	
	$mision .= $mesas2;
	$mision .=" ";
}else{
	$dueño .= $mesas2;
	$mision .=" ";
}

//////////////////////////////////////////////////////////



//guardar los datos //prueba

$_GRABAR_SQL = "INSERT INTO inventario (area, zona, boiler, refrigerador, calenton, microondas, estufa, plancha, gas, cobijas, cortinas, aire, sillas, mesas, mision, dueño, comentarios, misioneros) VALUES ('$area','$zona','$boiler1','$refrigerador1','$calenton1','$microondas1','$estufa1','$plancha1','$gas1','$cobijas1','$cortinas1','$aire1','$sillas1','$mesas1','$mision','$dueño','$comentarios','$misioneros')";    
mysql_query($_GRABAR_SQL);  