<?php
function tambah_string($str){
  $str=$str. " di Depok,Sleman";
  return $str;
}

$string="Universitas Gadjah Mada";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";
?>