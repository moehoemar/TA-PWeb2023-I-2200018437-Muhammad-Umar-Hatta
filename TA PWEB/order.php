<?php
echo "<head><title>Data data orderan</title></head>";
$fp = fopen("lihatOrder.txt", "r");
echo "<table border='0'>";
$data = [];
while ($isi = fgets($fp))
{
    if (trim($isi) === "------------------------") {
        echo "<tr><td><br></td></tr>";
        echo "<tr><td colspan='2' style='border-top: 2px solid #000'></td></tr>";
        echo "<tr><td><br></td></tr>";
        echo "<tr><td><br></td></tr>";

        echo "<tr><td>Nama Pembeli</td><td>: " . (isset($data['Nama Pembeli']) ? $data['Nama Pembeli'] : "") . "</td></tr>";
        echo "<tr><td>Jumlah</td><td>: " . (isset($data['Jumlah']) ? $data['Jumlah'] : "") . "</td></tr>";
        echo "<tr><td>Pengiriman</td><td>: " . (isset($data['Pengiriman']) ? $data['Pengiriman'] : "") . "</td></tr>";
        echo "<tr><td>Ekspedisi</td><td>: " . (isset($data['Ekspedisi']) ? $data['Ekspedisi'] : "") . "</td></tr>";
        echo "<tr><td>Alamat</td><td>: " . (isset($data['Alamat']) ? $data['Alamat'] : "") . "</td></tr>";
        echo "<tr><td><br></td></tr>";

        $data = [];
        continue;
    }

    $pisah = explode(": ", $isi);
    $field = isset($pisah[0]) ? trim($pisah[0]) : "";
    $value = isset($pisah[1]) ? trim($pisah[1]) : "";

    $data[$field] = $value;
}

echo "</table>";
fclose($fp);
?>
