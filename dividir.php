<?PHP
if($_POST){
$num1 = $_POST["num_1"];
$num2 = $_POST["num_2"];
	 
$resutado= $num1 / $num2;	

echo "la division de los valores " .  $num1 . " / " . $num2 . " es " .$resutado;
}
?>