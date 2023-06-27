<?php 
$nilai = 50;
if ($nilai >= 80) {
  echo "Nilai anda $nilai, Nilai huruf anda = A";
} elseif ($nilai >= 76.25) {
  echo "Nilai anda $nilai, Nilai huruf anda = A-";
} elseif ($nilai >= 68.75) {
  echo "Nilai anda $nilai, Nilai huruf anda = B+";
} elseif ($nilai >= 65) {
  echo "Nilai anda $nilai, Nilai huruf anda = B";
} elseif ($nilai >= 62.50) {
  echo "Nilai anda $nilai, Nilai huruf anda = B-";
} elseif ($nilai >= 57.50) {
  echo "Nilai anda $nilai, Nilai huruf anda = C+";
} elseif ($nilai >= 55) {
  echo "Nilai anda $nilai, Nilai huruf anda = C";
} elseif ($nilai >= 51.25) {
  echo "Nilai anda $nilai, Nilai huruf anda = C-";
} elseif ($nilai >= 43.75) {
  echo "Nilai anda $nilai, Nilai huruf anda = D+";
} elseif ($nilai >= 40) {
  echo "Nilai anda $nilai, Nilai huruf anda = D";
} else {
  echo "Nilai anda $nilai, Nilai huruf anda = E";
}
?>
