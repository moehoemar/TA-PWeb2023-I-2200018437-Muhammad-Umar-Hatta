<?php
function luas_persegiPanjang($panjang, $lebar) {
  return $panjang * $lebar;
}

$p = 10;
$l = 50;
echo "<b>Luas persegi panjang adalah:</b><br>";
echo luas_persegiPanjang($p, $l);
?>
