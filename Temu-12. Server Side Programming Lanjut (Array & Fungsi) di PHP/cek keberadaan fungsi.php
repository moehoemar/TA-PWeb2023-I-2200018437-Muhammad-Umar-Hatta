<?php
function luas_persegiPanjang($panjang, $lebar) {
  return $panjang * $lebar;
}

$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";

if (in_array('exif_read_data', $arr['internal'])) {
  echo "Fungsi exif_read_data tersedia.";
} else {
  echo "Fungsi exif_read_data tidak tersedia.";
}
?>
