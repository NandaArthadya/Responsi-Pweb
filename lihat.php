<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("file.txt", "r");

echo "<table border='5'>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Tanggal: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Nama: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Kota Asal: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Kota Tujuan: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Jarak: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>Total Bayar: </td><td>: $pisah[5] </td></tr>";
}

echo "</table>";
echo "<a href='index.php'> Mengisi Database </a>";

?>