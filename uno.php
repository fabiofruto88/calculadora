<?php
//funcion suma
function sumar($arreglo, $cantidad){
$sum=0;
for ($i=1; $i=$cantidad  ; $i++) {
  $sum=$sum + $arreglo[$i];

} //finpara
echo $sum;
}//finfuncion

//funcion resta
  function restar($arreglo,$cantidad){
   $restar=0;
   for ($i=1; $i =$cantidad ; $i++) {
    if ($i==1) {
    $restar=$arreglo[1]-$arreglo[2];
  }else {
       if ($i>=3) {
         $restar=$restar-$arreglo[$i];
       }
    }//finsi
   }//finfor
   echo $restar;
 }//finfuncion

//funcion multiplicar
 function multiplicar($arreglo,$cantidad)
 {
    $sum=1;
    for ($i=1; $i=$cantidad ; $i++) {
      $sum=$sum*$arreglo[$i];

    }//finpara
    echo $sum;

 }
 //funicion diviision
 function divirf($arreglo,$cantidad)
{
  for ($i=1; $i=$cantidad ; $i++) {
    if ($i==1) {
      $sum=$arreglo[1];

    }else {
      $sum=$sum/$arreglo[i];
    }//finsi
  }//finfor
  echo $sum;

}//finfuncion

//funcion factorial

 function factorial($limite)
{
  for ($i=1; $i=$limite ; $i++) {
  if (condition) {
    $afac=1*$i;
  }else {
    $afac=$afac*$i;

  }//finsi
}//finpara
 echo $afac;
}//finfuncion

//inica algoritmo
$seguir=1;
while ($seguir == 1) {
switch ($operacion) {
  case 1:
      $limite = $_POST;
      $sumn = array($limite);
      $dato= $_POST;
    break;

  default:
    // code...
    break;
}

}

?>
