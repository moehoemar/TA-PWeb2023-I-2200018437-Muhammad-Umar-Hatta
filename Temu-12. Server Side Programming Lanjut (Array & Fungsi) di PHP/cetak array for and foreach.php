<?php
$arrWarna = array("Red","Green","Blue");

echo "Menampilkan isi array dengan For : <br>";
for($i = 0; $i < count($arrWarna); $i++){
  echo "Warna Additive <font color=$arrWarna[$i]>" .$arrWarna[$i]."</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH : <br>";
foreach($arrWarna as $warna){
  echo "Warna Additive <font color=$warna>" .$warna. "</font><br>";
}
?>