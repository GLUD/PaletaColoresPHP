<html>
	<head>
		<meta charset="UTF-8">
		<title>Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
<body>

<?php $color = $_POST["so"];

function RGBToHex($r,$g,$b){
	$hex = "#";
	$hex.= str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
	$hex.= str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
	$hex.= str_pad(dechex($b), 2, "0", STR_PAD_LEFT);
	return $hex;
}
function impPaleta($color){
	
	echo "<table>";
	echo "<table><tr>
				<td>Color</td>
				<td>RGB</td>
				<td>HEXADECIMAL</td>
				</tr>";
	$i=40;
	for ($i; $i<255; $i+=8){
		echo "<tr>";
		echo "<td id='algo' style='background-color:rgb(";
		if($color=="amarillo"){
			echo "$i,";
			echo "$i,";
			echo "0)";
		}elseif($color=="morado"){
			echo "$i,";
			echo "0,";
			echo "$i)";
		}elseif($color=="azulAguaMarina"){
			echo "0,";
			echo "$i,";
			echo "$i)";
		}elseif($color=="rojo"){
			echo "$i,";
			echo "0,";
			echo "0)";
		}elseif($color=="verde"){
			echo "0,";
			echo "$i,";
			echo "0)";
		}elseif($color=="azul"){
			echo "0,";
			echo "0,";
			echo "$i)";
		}else{
			echo "$i,";
			echo "$i,";
			echo "$i)";
		}
		echo "'</td>";
		echo  "<td>($i,$i,$i)</td>";
		$hex = RGBToHex($i, $i, $i);
		echo "<td>$hex</td>";
		echo "</tr>";
	
			
	}
	echo "</table>
			<br>";
	
}

impPaleta($color);
?>

</body>
</html> 