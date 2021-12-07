<!DOCTYPE html>
<html lang="en">
<head>
	<title>Seguimiento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

				<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
					<div class="container-contact2">
						<div class="wrap-contact2">
				
					
							<span class="contact2-form-title">
								Mision Mexico Ciudad Juarez
							</span>
							<center>
								<h2>Areas con cambios</h2>
							</center>
		 					<center>

								<table>
									<thead>
										<tr class="row100 body">
										<th colspan="2">Area</th>
										<th colspan="2">Misioneros </th>
										</tr>
									</thead>
									<tbody>
									

									</tbody>
								

								</table>

<?php
$username = "martinez"; 
$password = "100bautismos"; 
$host = "db4free.net:3306"; 		//coneccion
$dbname = "jzwork";
$result= " ";


$conn = mysqli_connect($host, $username, $password, $dbname);
																	// Conectar
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

			////////////////////////////CONSULTA

$sql = "SELECT * FROM inventario A INNER JOIN principal B ON A.area = B.area WHERE A.boiler <> B.boiler or A.refrigerador <> B.refrigerador or A.calenton <> B.calenton or A.microondas <> B.microondas or A.estufa <> B.estufa or A.plancha <> B.plancha or A.gas <> B.gas or A.cobijas <> B.cobijas or A.cortinas <> B.cortinas or A.aire <> B.aire or A.sillas <> B.sillas or A.mesas <> B.mesas";
			//////////////////////////////	

	$result = mysqli_query($conn, $sql);

    $row_cnt = mysqli_num_rows($result);

for ($i = 0; $i < $row_cnt; $i++) {
	
	mysqli_data_seek($result, $i);
	$row = mysqli_fetch_row($result);															
	 echo $row[0];
	 echo "-------";
	 echo $row[17]."<br>";

	 $temp= 21;
	 for($j = 2; $j <= 13; $j++){
	 	
	 	if(intval($row[$j]) < intval($row[$temp]) or intval($row[$j]) > intval($row[$temp])){
	 		switch ($j) {
    			case 2:
      			  echo "boiler ";
       			break;
    			case 3:
     			   echo "refrigerador ";
     			break;
  			  	case 4:
       			 echo "calenton ";
        		break;
    			case 5:
       			 echo "microondas ";
        		break;
    			case 6:
        			echo "estufa ";
        		break;
    			case 7:
        			echo "plancha ";
        		break;
    			case 8:
        			echo "gas ";
       		 	break;
    			case 9:
        			echo "cobijas ";
        		break;
    			case 10:
        			echo "cortinas ";
        		break;
    			case 11:
        			echo "aire ";
        		break;
    			case 12:
        			echo "sillas ";
        		break;
    			case 13:
        			echo "mesas ";
        		break;
			}
	 	}
	 	$temp += 1;
	 }
	 echo "<br>";

}


if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>

											
										
							</center>

						</div>

					</div>
				</div>


	
</body>
</html>
