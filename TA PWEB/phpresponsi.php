<?php
echo "<head><title>Data-data Order</title></head>";
$fp = fopen("lihatOrder.txt", "a+");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['name'];
  $jumlah = $_POST['quantity'];
  $pengiriman = isset($_POST['send']) ? implode(", ", $_POST['send']) : "Tidak ada";
  $ekspedisi = isset($_POST['ekspedisi']) ? implode(", ", $_POST['ekspedisi']) : "Tidak ada";
  $alamat = $_POST['address'];

  // Menulis data order ke dalam file
  fputs($fp, "Nama Pembeli: $nama\n");
  fputs($fp, "Jumlah: $jumlah\n");
  fputs($fp, "Pengiriman: $pengiriman\n");
  fputs($fp, "Ekspedisi: $ekspedisi\n");
  fputs($fp, "Alamat: $alamat\n");
  fputs($fp, "------------------------\n");

  fclose($fp);

  echo "Terima Kasih Telah Order Produk Kami<br>";
  echo "<a href='order.php'>Lihat Orderan</a><br>";
}
?>