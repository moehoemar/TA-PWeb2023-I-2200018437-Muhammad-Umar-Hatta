<?php
$tinggi = 5;

for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp;";
    }
    
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }

    echo "<br>";
}
?>
