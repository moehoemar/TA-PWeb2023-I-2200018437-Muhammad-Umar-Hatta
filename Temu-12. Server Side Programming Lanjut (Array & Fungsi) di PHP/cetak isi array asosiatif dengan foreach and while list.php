<?php
$arrNilai=array("Alvin"=>80,"Simon"=>70,"Theodore"=>95);
echo "Menampilkan isi array asosiatif dengan foreach : <br>";
foreach($arrNilai as $nama => $nilai){
  echo "Nilai $nama=$nilai <br>";
}

reset($arrNilai);
echo "<br>Menampilkan isi array asosiatif dengan While dan List : <br>";
while ($key = key($arrNilai)) {
  $nilai = current($arrNilai);
  echo "Nilai $key=$nilai <br>";
  next($arrNilai);
}
?>