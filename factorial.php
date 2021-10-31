
<?php
$afac=0;
$limite= $_POST["num_1"];

  for ($i=1; $i<=$limite; $i++) {
  if ($i==1) {
    $afac=1*$i;
  }else{
    $afac=$afac*$i;
  }
 }

echo "el factorial de ".$limite . " es " . $afac;
?>