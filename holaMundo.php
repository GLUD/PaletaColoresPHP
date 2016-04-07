<!DOCTYPE html>
<html>
<body>

<input type="text" name="algo">
<input type="button" name="but" value="hola">
<br>
<br>

<?php

$a=2;
for ($i=0; $i<$a; $i++){
	echo "<tr>
              <td>HTML</td>
              <td>20</td>
              <td>16:00 - 20:00</td>
              <button>hola</button>
            </tr><br>";
}
var_dump($a);
if ($a==2){
	echo "\n hola soy $a";
}
?>

</body>
</html> 